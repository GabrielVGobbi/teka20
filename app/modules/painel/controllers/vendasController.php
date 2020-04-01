<?php

class VendasController extends controller
{

    public function __construct()
    {
        parent::__construct();

        $this->user = new Users();
        $this->user->setLoggedUser();

        $this->id_company = $this->user->getCompany();

        if ($this->user->isLogged() == false) {
            header("Location: " . BASE_URL_PAINEL . "login");
            exit();
        }

        $this->filtro = array();
        $this->venda = new Venda();
        $this->painel = new Painel();
        $this->permissions = new Permissions();

        $this->dataInfo = array(
            'pageController' => 'clientes',
            'nome_tabela'   => 'cliente',
            'titlePage' => 'clientes',
            'filtro' => array()
        );
    }

    public function index()
    {

      
        $this->loadView($this->dataInfo['pageController'] . "/index", $this->dataInfo);
    }


    public function info($id_cliente)
    {

        $this->dataInfo['tableInfo']        = $this->cliente->getInfo($id_cliente, $this->id_company);
        $this->dataInfo['titlePage']        = $this->dataInfo['tableInfo']['cli_nome'];

        !empty($this->dataInfo['tableInfo'])
            ? $this->loadView($this->dataInfo['pageController'] . "/editar", $this->dataInfo)
            : $this->loadViewErrorNotPermission();
    }

    public function action()
    {

        isset($_POST['EnVID']) && !empty($_POST['EnVID'])
            ? $id_cliente = $this->cliente->edit($_POST, $this->user->getCompany(), $this->user->getId())
            : $id_cliente = $this->cliente->add($_POST, $this->user->getCompany(), $_FILES);

        header('Location:' . BASE_URL_PAINEL . $this->dataInfo['pageController'] . '/info/' . $id_cliente);

        exit();
    }

    public function getVendaByCliente()
    {

        $this->dataInfo['p'] = 1;
        if (isset($_REQUEST['data']['p']) && !empty($_REQUEST['data']['p'])) {
            $this->dataInfo['p'] = intval($_REQUEST['data']['p']);
            if ($this->dataInfo['p'] == 0) {
                $this->dataInfo['p'] = 1;
            }
        }

        $offset = (10 * ($this->dataInfo['p'] - 1));

        $filtro = isset($_REQUEST['filtro']) ? $_REQUEST['filtro'] : '';

        $id_cliente = isset($_REQUEST['id_cliente']) ? $_REQUEST['id_cliente'] : '';

        $this->dataInfo['tableDados']  = $this->venda->getVendaByCliente($offset, $filtro, $this->user->getCompany(), $id_cliente);
        $this->dataInfo['getCount']    = $this->venda->row;
        $this->dataInfo['p_count']     = ceil($this->dataInfo['getCount'] / 10);

        echo json_encode($this->dataInfo);

        exit();
    }

    public function actionVenda()
    {

        $id_cliente = $_POST['id_cliente'];
        if($id_cliente)
            $id_cupom = $this->venda->actionVenda($_POST, $this->user->getCompany());
  
        echo json_encode($id_cupom);

        exit();
    }

    public function PagToVenda(){

        $return = $this->venda->PagToVenda($_REQUEST['id_venda'], $_REQUEST['status']);
  
        echo json_encode($return);

        exit();
    }

    public function getVendaById($id_venda)
    {
        $venda  = $this->venda->getVendaById($id_venda);

        echo json_encode($venda);

        exit();
    }

    public function deleteVendaById($id_venda)
    {

        $venda  = $this->venda->deleteVendaById($id_venda);
error_log(print_r($venda,1));
        echo $venda ? json_encode($venda) : false;

        exit();
    }
}
