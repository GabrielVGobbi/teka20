<?php

class ConfigController extends controller
{

    public function __construct()
    {
        parent::__construct();

        $this->user = new Users();
        $this->user->setLoggedUser();
        if ($this->user->isLogged() == false && $this->user->isClient() == 0) {
            header("Location: " . BASE_URL_PAINEL . "login");
            exit();
        }
        $this->id_company = $this->user->getCompany();

        $this->filtro = array();
        $this->cliente = new Cliente();
        $this->painel = new Painel();
        $this->permissions = new Permissions();

        $this->dataInfo = array(
            'pageController' => 'config',
            'nome_tabela'   => 'config',
            'titlePage' => 'Configurações'
        );
    }

    public function index()
    {

        if ($this->user->hasPermission('config_view')) {

            $this->dataInfo['paleta']           = $this->cliente->getPaleta($this->id_company);

            $this->loadView($this->dataInfo['pageController'] . "/index", $this->dataInfo);
        } else {

            $this->loadViewErrorNotPermission();
        }
    }

    public function add()
    {

        if ($this->user->hasPermission('clientes_view')) {

            $this->dataInfo['titlePage'] = 'Adicionar';

            $this->loadView($this->dataInfo['pageController'] . "/cadastrar", $this->dataInfo);
        } else {

            $this->loadViewErrorNotPermission();
        }
    }

    public function action()
    {


        if (isset($_POST['type']) && $_POST['type'] == 'addCartela') {

            $this->painel->addCartela($_POST, $this->user->getCompany(), $_FILES);

            header('Location:' . BASE_URL_PAINEL . $this->dataInfo['pageController']);

            exit();
        }
    }
}
