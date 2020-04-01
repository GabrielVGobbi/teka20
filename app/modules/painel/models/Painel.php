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

        $sql = $this->db->prepare("SELECT * FROM etapas etp {$type} ORDER BY etp.order");
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $this->retorno = $sql->fetchAll();
        }

        return $this->retorno;
    }

    public function getEtapaById($id_company, $Parametros)
    {

        $params = implode(',', $Parametros['id_etapa']);

        $sql = $this->db->prepare("SELECT * FROM etapas WHERE id_etapa IN ({$params}) AND id_company = :id_company AND etp_type = 2");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $this->retorno = $sql->fetchAll();
        }

        return $this->retorno;
    }

    public function getperguntas($id_company)
    {

        $sql = $this->db->prepare("SELECT id_cli_pe as id_pergunta,clip_pergunta FROM client_perguntas WHERE id_company = :id_company ORDER BY cli_ordem");
        $sql->bindValue(':id_company', $id_company);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $this->retorno = $sql->fetchAll();
        }

        return $this->retorno;
    }
    public function getFoto($id_cliente, $foto)
    {

        return BASE_URL . 'app/assets/images/clientes/' . mb_strtolower($id_cliente, 'UTF-8') . '/' . mb_strtolower($foto, 'UTF-8');
    }

    //excluir
    public function getCamposSilhueta()
    {

        $sql = $this->db->prepare("SELECT * FROM client_silhueta");
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $this->retorno = $sql->fetch();
        }

        return $this->retorno;
    }

    public function editPainel($arr, $nome_tabela, $id_company, $single = false, $WhereId = false)
    {
        $certo = true;
        $first = false;

        $arr['id'] = $WhereId;

        if ($WhereId)
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
                $sql = $this->db->prepare($query . ' WHERE ' . $arr['type'] . '=?');
                $sql->execute($parametros);
            } else {
                $sql = $this->db->prepare($query);
                $sql->execute($parametros);
            }
        }
        return $WhereId;
    }

    public function addCartela($Parametros, $id_company, $Foto)
    {
        $Parametros += [
            'id_company' => $id_company
        ];

        $this->table = 'cartela';

        $id_cartela = $this->insert($Parametros, $id_company);


        if (!empty($id_cartela)) {
            $c = new Cliente();
            $c->AddPhotoCartela($id_cartela, $Foto, $id_company);
        }
    }

    public function getCartelaByIdCliente($id_user)
    {
        $cartela = '';
        $sql = $this->db->prepare("SELECT car_nome AS cartela FROM coloracao cor INNER JOIN cartela car ON (car.id_cartela = cor.id_cartela) WHERE cor.id_user = :id_user LIMIT 1");
        $sql->bindValue(':id_user', $id_user);
        $sql->execute();

        if ($sql->rowCount() == 1) {
            $cartela = $sql->fetch();
            $cartela = $cartela['cartela'];
        }

        return $cartela;
    }
}
