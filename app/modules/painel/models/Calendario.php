<?php
class Calendario extends model

{

	public $calendarioInfo;

	public $row = 0;

	protected $table = 'events';

	public $result = array();

	public function __construct($id_calendario = false, $offset = 0, $filtro = array())
	{
		parent::__construct();

		if ($id_calendario != false)
			$id_calendario == 'all' ? $this->getAll($offset, $filtro) : $this->getInfo($id_calendario);
	}

	public function getAll($offset, $filtro, $id_company = 0)
	{

		$where = $this->buildWhere($filtro, $id_company);

		$sql = "SELECT * FROM events cal WHERE " . implode(' AND ', $where) . " LIMIT $offset, 10";

		$sql = $this->db->prepare($sql);

		$this->bindWhere($filtro, $sql);

		$sql->execute();

		if ($sql->rowCount() > 0) {
			$this->calendarioInfo = $sql->fetchAll();
			$this->row = $sql->rowCount();
		}

		return $this->calendarioInfo;
	}

	private function buildWhere($filtro)
	{
		$where = array(
			'1=1'
		);

		if (isset($filtro['all']) && !empty($filtro['all'])) {

			$where[] = "(cal.nome_calendario LIKE :all) OR (cal.placa_calendario LIKE :all) OR (cal.observacoes_calendario LIKE :all)";
		}

		if (isset($filtro['allHistorico']) && !empty($filtro['allHistorico'])) {

			$where[] = "(atvcal.descricao LIKE :allHistorico) OR (atvcal.motorista LIKE :allHistorico)";
		}

		if (isset($filtro['id_calendario']) && !empty($filtro['id_calendario'])) {

			$where[] = "(calAt.id_calendario = :id_calendario)";
		}

		return $where;
	}

	private function bindWhere($filtro, &$sql)
	{

		if (!empty($filtro['all'])) {
			if ($filtro['all'] != '') {
				$sql->bindValue(":all", '%' . $filtro['all'] . '%');
			}
		}
		if (!empty($filtro['allHistorico'])) {
			if ($filtro['allHistorico'] != '') {
				$sql->bindValue(":allHistorico", '%' . $filtro['allHistorico'] . '%');
			}
		}
		if (!empty($filtro['id_calendario'])) {
			if ($filtro['id_calendario'] != '') {
				$sql->bindValue(':id_calendario', $filtro['id_calendario']);
			}
		}
	}

	public function getCount($offset, $filtro)
	{

		return $this->row;
	}

	public function getInfo($id_calendario)
	{

		$sql = "SELECT * FROM events cal WHERE id_calendario = :id_calendario LIMIT 1";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_calendario', $id_calendario);
		$sql->execute();

		if ($sql->rowCount() == 1) {
			$this->calendarioInfo = $sql->fetch();
		}

		return $this->calendarioInfo;
	}

	public function add($Parametros, $id_company)
	{
		return $this->insert($Parametros);
	}

	public function edit($Parametros, $id_company)
	{

		$id_calendario = $Parametros['id'];
		$this->update($Parametros, array('id' => $id_calendario));
		return $id_calendario;
	}

	public function getHistoricocalendario($Parametros)
	{
		$calendarioHistorico = array();
		$id_calendario = $Parametros['id_calendario'];
		$where = $this->buildWhere($Parametros);
		$sql = "SELECT *, (select km_final 
			FROM atividade_calendario atvcal 
			INNER JOIN calendario_atividade calAt ON (atvcal.id_atividade = calAt.id_atividade) WHERE id_calendario = :id_calendario ORDER BY calAt.id_atividade DESC LIMIT 1 ) AS kmAnterior 
		FROM events_atividade calAt 
			INNER JOIN atividade_calendario atvcal ON (atvcal.id_atividade = calAt.id_atividade)
		WHERE " . implode(' AND ', $where) . " ORDER BY calAt.id_atividade DESC";

		$sql = $this->db->prepare($sql);

		$this->bindWhere($Parametros, $sql);
		$sql->bindValue(':id_calendario', $id_calendario);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$calendarioHistorico = $sql->fetchAll();
			$rowHistorico = $sql->rowCount();
			for ($q = 0; $q < count($calendarioHistorico); $q++) {

				$calendarioHistorico[$q]['data_inicial'] = str_replace("-", "/", $calendarioHistorico[$q]['data_inicial']);
				$calendarioHistorico[$q]['data_inicial'] = date('d/m/Y H:i:s', strtotime($calendarioHistorico[$q]['data_inicial']));
			}
		}

		return $calendarioHistorico;
	}

	public function actionAtividadecalendario($id_atividade = false, $id_calendario, $Parametros, $id_company, $id_user)
	{
		$this->table = 'atividade_calendario';

		$data_inicio = str_replace("/", "-", $Parametros['data_inicial']);
		$data_inicio = date('Y-m-d H:i:s', strtotime($data_inicio));

		unset($Parametros['data_inicial']);

		$Parametros += [
			'data_inicial' => $data_inicio
		];


		if ($id_atividade) {
			$this->update($Parametros, array('id_atividade' => $id_atividade));
			$this->updatecalendarioAtividade('update', $id_atividade, $id_calendario, $id_user);
		} else {
			$id_atividade = $this->insert($Parametros);
			$this->updatecalendarioAtividade('add', $id_atividade, $id_calendario, $id_user);
		}

		return $id_atividade;
	}
	public function updatecalendarioAtividade($type = 'add', $id_atividade, $id_calendario, $id_user)
	{

		if ($type == 'add') {
			$sql = $this->db->prepare("
				INSERT INTO calendario_atividade SET 
					id_atividade = :id_atividade,
					id_calendario = :id_calendario,
					create_date = :date,
					create_by = :create_by
			");

			$sql->bindValue(":id_calendario", $id_calendario);
			$sql->bindValue(":id_atividade", $id_atividade);
			$sql->bindValue(":date", TODAY);
			$sql->bindValue(":create_by", $id_user);

			return $sql->execute() ? $id_atividade : '';
		} else {

			$sql = $this->db->prepare("
				UPDATE `calendario_atividade` SET  
				edit_by = :edit_by,
				edit_date = :edit_date
				WHERE id_atividade = :id_atividade AND id_calendario = :id_calendario
			");

			$sql->bindValue(":edit_by", $id_user);
			$sql->bindValue(":edit_date", TODAY);
			$sql->bindValue(":id_atividade", $id_atividade);
			$sql->bindValue(":id_calendario", $id_calendario);

			return $sql->execute() ? $id_atividade : '';
		}
	}
	public function getAtividadeById($id_atividade)
	{

		$atividadeArray = array();
		$sql = "SELECT * FROM atividade_calendario atvcal WHERE id_atividade = :id_atividade LIMIT 1";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id_atividade', $id_atividade);
		$sql->execute();

		if ($sql->rowCount() == 1) {
			$atividadeArray = $sql->fetch();
			$atividadeArray['data_inicial'] = str_replace("-", "/", $atividadeArray['data_inicial']);
			$atividadeArray['data_inicial'] = date('d/m/Y H:i:s', strtotime($atividadeArray['data_inicial']));
		}

		return $atividadeArray;
	}
}
