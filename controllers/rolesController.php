<?php
class rolesController extends Controller
{
    private $_rol;

    public function __construct()
    {
        parent::__construct();
        $this->_rol = $this->loadModel('rol');
    }

    public function index()
    {
        $this->_view->titulo = 'Roles';
        $this->_view->notice = 'No hay roles disponibles';
        $this->_view->roles = $this->_rol->getRoles();
        $this->_view->render('index');
    }

    public function create()
    {

        $this->_view->titulo = 'Roles';
        $this->_view->process = 'roles/store';
        $this->_view->send = HASH_KEY;
        $this->_view->render('create');
    }

    public function store()
    {
        if ($this->getSql('send') == HASH_KEY) {
            $this->_view->datos = $_POST;

            if (!$this->getTexto('nombre')) {
                Session::set('msg_error','Debe ingresar el nombre del rol');
                $this->redireccionar('roles/create');

            }
        }else {
            throw new Exception("Error Processing Request", 1);

        }
    }
}
