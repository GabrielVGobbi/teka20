<?php
class ajaxController extends controller
{

    public function __construct()
    {
        $this->user = new Users();
        $this->user->setLoggedUser();

        $this->painel = new Painel();
        $this->cliente = new Cliente();

        if ($this->user->isLogged() == false) {
            header("Location: " . BASE_URL_PAINEL . "/login");
            exit;
        }

        $this->retorno = array();
    }

    public function index()
    {
    }

    public function getEtapasById()
    {

        $this->retorno = $this->painel->getEtapaById($this->user->getCompany(), $_POST);

        echo json_encode($this->retorno);
    }

    public function ValidateClienteDouble()
    {

        $data = array();

        $data = $this->cliente->validacao($this->user->getCompany(), $_POST['nome']);

        echo json_encode($data);
    }


    public function addPhotoClient($typePasta = 'inUsed', $id_cliente = '', $div, $id_image = 0)
    {
        $div = str_replace("'", '', $div);
        $u = new Users();
        $u->setLoggedUser();
        $c = new Cliente();

        $id_company = $u->getCompany();

        $Parametros = array();

        $folder_name = 'app\assets\images\clientes';
        $cliente = $c->getClienteByIdName($id_cliente, $id_company);

        if (!empty($id_cliente)) {
            if (!empty($_FILES)) {
                $name = str_replace(' ', '_', $cliente['cli_nome']) . '_' . str_replace(' ', '_', $cliente['cli_sobrenome']);

                $name = str_replace('-', '', $name);
                $name = str_replace(' - ', '_', $name);
                $name = str_replace(' ', '_', $name);

                $c->addPhotoExImagemClient($id_cliente, mb_strtolower($name, 'UTF-8'), $_FILES, $id_company, $typePasta, $div, $id_image);
            }
        }
    }

    public function getImagesByCliente($typePasta, $id_cliente, $nomecliente)
    {


        $u = new Users();
        $u->setLoggedUser();
        $c = new Cliente();

        $pasta = "'".$typePasta."'";

        $id_company = $u->getCompany();

        $arrayFotos = $c->getFotosByPasta($id_cliente, $id_company, $typePasta);

        $qntFoto = 0;
        if (isset($arrayFotos) && !empty($arrayFotos)) {
            $qntFoto = count($arrayFotos);
            foreach ($arrayFotos as $doc) {
                $scanDir[] = $doc;
            }
        }

        $output = '';

        for ($i=0; $i < 5; $i++) { 
            if (isset($scanDir) && false !== $scanDir && isset($scanDir[$i])) {

                $output .= '
                            <div class="btn btn-file text-center col-sm-2" style="background-color: transparent;
    border-bottom: 1px solid rgba(0,0,0,.125);
    padding: .75rem 1.25rem;
    position: relative;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    border-left: 1px solid rgba(0,0,0,.125);
    border-right: 1px solid rgba(0,0,0,.125);
    border-top: 1px solid rgba(0,0,0,.125);    margin-right: 3px;">
                                <img class=" img-fluid" name="preview' . $typePasta . '' . $i . '" src="' . BASE_URL . 'app/assets/images/clientes/' . mb_strtolower($id_cliente, 'UTF-8') . '/' . $scanDir[$i]['img_type'] . '/' . mb_strtolower($scanDir[$i]['img_url'], 'UTF-8') . '" alt="clique e adicione sua foto">
                                <input data-pasta="'. $typePasta. '" data-img="' . $scanDir[$i]['id_cli_image'] . '" type="file" class="fotoArray" onchange="previewImagem('.$i. ',' . $pasta . ' )" id="imagem' . $typePasta . '' . $i . '" name="fotos' . $typePasta . '' . $i . '" multiple="">
                            </div>
                            ';
            } else {
                $output .= '<div class="btn btn-file text-center col-sm-2" style="background-color: transparent;
    border-bottom: 1px solid rgba(0,0,0,.125);
    padding: .75rem 1.25rem;
    position: relative;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    border-left: 1px solid rgba(0,0,0,.125);
    border-right: 1px solid rgba(0,0,0,.125);
    border-top: 1px solid rgba(0,0,0,.125);    margin-right: 3px;">
                        <img class=" img-fluid" name="preview' . $typePasta . '' . $i . '" src="" alt="clique e adicione sua foto">
                        <input data-img="0" data-pasta="' . $typePasta . '" type="file" class="fotoArray" onchange="previewImagem(' . $i . ', ' . $pasta . ')" id="imagem' . $typePasta . '' . $i . '" name="fotos' . $typePasta . '' . $i . '" multiple="">
                    </div>';
            }
        }
        

        $output .= '</div>';

        echo ($output);
    }


    function saveComentyExercicioImagem()
    {



        if (isset($_POST) && isset($_POST['id_etapa']) && !empty($_POST['id_etapa'])) {

            $id_cliente =  !empty($u->getClienteId()) ? $u->getClienteId() : $_POST['id_cliente'];

            $notepad = $u->saveComentyExercicioImagem($_POST, $id_cliente, $u->getCompany());

            echo $notepad ? json_encode($notepad) : false;
        }
    }

    /**
     * Mudar o status do cliente 0 = Ativo 1 = possivel cliente
     * @return json TRUE ou FALSE
     */
    public function statusClient()
    {
        $id_cliente = $_POST['id_client'];
        $status =  $_POST['statusChange'];

        if (!empty($id_cliente)) {
            $this->retorno = $this->cliente->changeStatus($id_cliente, $status);
            echo json_encode($this->retorno);
        } else {
            return false;
        }
    }
    /**
     * Pegar a entrevista do usuario
     * @return json array ou FALSE
     */
    public function getPerguntas()
    {

        $c = new Cliente();

        if (isset($_REQUEST['id_client']) && !empty($_REQUEST['id_client'])) {

            $id =  $c->getEntrevista($_REQUEST['id_company'], $_REQUEST['id_client']);
        }

        if ($id != false) {
            echo json_encode($id);
        } else {
            echo json_encode('');
        }

        exit;
    }
    public function getPerguntaById($id_entrevista)
    {

        $c = new Cliente();


        $array =  $c->getEntrevistaById($id_entrevista);


        echo $array == true ?  json_encode($array) :  json_encode('');

        exit;
    }

    public function actionPergunta()
    {

        $c = new Cliente();
        $edit = false;
        if (isset($_REQUEST['id_cli_pe']) && !empty($_REQUEST['id_cli_pe'])) {

            $edit =  $c->setPerguntaEntrevista($_REQUEST['id_cli_pe'], $_REQUEST['clip_pergunta'], $this->user->getCompany());
        } else {
            $edit =  $c->setPerguntaEntrevista(false, $_REQUEST['clip_pergunta'], $this->user->getCompany(), $_REQUEST['id_client']);
        }

        echo $edit == true ?  json_encode($edit) :  json_encode(false);

        exit;
    }
    public function deletePerguntaByEntrevista()
    {
        $c = new Cliente();
        $edit = false;
        if (isset($_REQUEST['id_entrevista']) && !empty($_REQUEST['id_entrevista'])) {

            $edit =  $c->deletePerguntaByEntrevista($_REQUEST['id_entrevista']);
        } 
        echo $edit == true ?  json_encode($edit) :  json_encode(false);

        exit;
    }
}
