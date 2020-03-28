<?php

class Venda extends Model

{

    public $cupomInfo;

    public $row = 0;

    protected $table = 'venda';

    public $result = array();

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll($offset, $filtro, $id_company)
    {
        $where = $this->buildWhere($filtro, $id_company);

        $sql = "SELECT * FROM cupom cup WHERE " . implode(' AND ', $where) . " LIMIT $offset, 10";

        $sql = $this->db->prepare($sql);

        $this->bindWhere($filtro, $sql);

        $sql->execute();

        if ($sql->rowCount() > 0) {
            $this->cupomInfo = $sql->fetchAll();
            $this->row = $sql->rowCount();
        }


        return $this->cupomInfo;
    }

    private function buildWhere($filtro, $id = 0)
    {
        $where = array(
            '1=1'
        );

        if (isset($filtro['all']) && !empty($filtro['all'])) {

            $where[] = "(ven.ven_data LIKE :all) OR (ven.ven_liquido LIKE :all) OR (ven.ven_forma_pagamento LIKE :all) ";
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
        if (!empty($filtro['razao_social'])) {
            if ($filtro['razao_social'] != '') {
                $sql->bindValue(":razao_social", '%' . $filtro['razao_social'] . '%');
            }
        }

        if (!empty($filtro['id'])) {
            if ($filtro['id'] != '') {
                $sql->bindValue(":id", $filtro['id']);
            }
        }
    }

    public function getCount($offset = 0, $filtro = array())
    {

        $this->row = 0;

        $sql = $this->db->prepare("SELECT COUNT(*) AS count FROM cupom ");
        $sql->execute();

        $row = $sql->fetch();
        $this->row = $row['count'];

        return $this->row;
    }



    public function getVendaByCliente($offset,$filtro, $id_company, $id_cliente)
    {
        $VendaCliente = array();

        $where = $this->buildWhere($filtro);

        $sql = "
			SELECT * FROM vendas_cliente venCli INNER JOIN venda ven ON (venCli.id_venda = ven.id_venda) WHERE id_cliente = :id_cliente AND " . implode(' AND ', $where) . ' ORDER BY id_venda_cliete DESC';

        $sql = $this->db->prepare($sql);

        $this->bindWhere($filtro, $sql);

        $sql->bindValue(':id_cliente', $id_cliente);

        $sql->execute();

        if ($sql->rowCount() > 0) {
            $VendaCliente = $sql->fetchAll();


            for ($q = 0; $q < count($VendaCliente); $q++) {

                $VendaCliente[$q]['ven_liquido'] = number_format($VendaCliente[$q]['ven_liquido'], 2, ',', '.');

                $VendaCliente[$q]['ven_data'] = date('d/M/Y', strtotime($VendaCliente[$q]['ven_data']));

                $date = explode('/', $VendaCliente[$q]['ven_data'] );
                $dia = $date[0];
                $mes = mb_strtoupper( $date[1], 'UTF-8');

                $VendaCliente[$q]['dia'] = $dia;
                $VendaCliente[$q]['mes'] = $mes;

                
            }
        }

        return $VendaCliente;
    }

    public function add($Parametros,$id_company)
    {
        $id_cliente = $Parametros['id_cliente'];
        unset($Parametros['id_cliente']);

        $data = str_replace("/", "-", $Parametros['ven_data']);
        $data = date('Y-m-d', strtotime($data));

        $Parametros += [
            'id_company' => $id_company,
            'ven_data' => $data
        ];

        $id_venda = $this->insert($Parametros, $this->table);

        $this->setClientVenda($id_cliente, $id_venda);

        return $id_venda;
    }

    public function setClientVenda($id_cliente, $id_venda){
        $now = date('Y-m-d');
        $sql = $this->db->prepare("INSERT INTO `vendas_cliente` SET 
				
				id_venda = :id_venda,
				id_cliente = :id_cliente,
                created_at = :now
				
			");
        $sql->bindValue(":id_venda", $id_venda);
        $sql->bindValue(":id_cliente", $id_cliente);
        $sql->bindValue(":now", $now);
        return $sql->execute() ? true : false;
    }

    public function pagToVenda($id_venda, $status)
    {

        $sql = $this->db->prepare("UPDATE venda SET ven_status = :stats WHERE id_venda = :id_venda ");

        $sql->bindValue(":id_venda", $id_venda);
        $sql->bindValue(":stats", $status);

        return $sql->execute() ? true : false ;          
        
    }



}
