<?php
class Painel extends model
{

    public function __construct()
    {
        parent::__construct();
        $this->array = array();
        $this->retorno = array();
    }

    public function dataTable()
    { 



    }

    public function getEtapas($type = false)
    { 

        $type = $type == false ? '' : 'WHERE etp_type = 2';

        $sql = $this->db->prepare("SELECT * FROM etapas {$type}");
		$sql->execute();

		if($sql->rowCount() > 0 ) {
			$this->retorno = $sql->fetchAll();
        }
        
        return $this->retorno;

    }

    public function getEtapaById($id_company, $Parametros){

        $params = implode(',', $Parametros['id_etapa']);

        $sql = $this->db->prepare("SELECT * FROM etapas WHERE id_etapa IN ({$params}) AND id_company = :id_company AND etp_type = 2");
        $sql->bindValue(':id_company', $id_company);
		$sql->execute();

		if($sql->rowCount() > 0 ) {
			$this->retorno = $sql->fetchAll();
        }
        
        return $this->retorno;

    }

    public function getperguntas($id_company){

        $sql = $this->db->prepare("SELECT * FROM client_perguntas WHERE id_company = :id_company ORDER BY cli_ordem");
        $sql->bindValue(':id_company', $id_company);
		$sql->execute();

		if($sql->rowCount() > 0 ) {
			$this->retorno = $sql->fetchAll();
        }

        #error_log(print_r($this->retorno,1));
        
        return $this->retorno;

    }
    public function getFoto($id_cliente, $foto){

       return BASE_URL.'app/assets/images/clientes/'.mb_strtolower($id_cliente, 'UTF-8').'/'.mb_strtolower($foto, 'UTF-8');

    }

    //excluir
    public function getCamposSilhueta(){
        
        $sql = $this->db->prepare("SELECT * FROM client_silhueta");
		$sql->execute();

		if($sql->rowCount() > 0 ) {
			$this->retorno = $sql->fetch();
        }

        return $this->retorno;
    }

    public function editPainel($arr, $nome_tabela, $id_company, $single = false, $WhereId = false)
    {
        $certo = true;
        $first = false;
        
        $arr['id'] = $WhereId;

        if($WhereId)
            $query = "UPDATE `$nome_tabela` SET ";
            foreach ($arr as $key => $value) {
                $nome = $key;
                $valor = $value;

                if ($nome == 'acao' || $nome == 'nome_tabela' || $nome == 'id' || $value == '' || $nome == 'type')
                    continue;


                if ($first == false) {
                    $first = true;
                    $query .= "$nome=?";
                } else {
                    $query .= ",$nome=?";
                }

                $parametros[] = $value;

            }

            if ($certo == true) {
                if ($single == false) {
                    $parametros[] = $arr['id'];
                    $sql = $this->db->prepare($query . ' WHERE '.$arr['type'].'=?');
                    $sql->execute($parametros);

                } else {
                    $sql = $this->db->prepare($query);
                    $sql->execute($parametros);

                }
            }
            return $WhereId;
    }

}
