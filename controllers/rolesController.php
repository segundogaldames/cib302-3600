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
}
