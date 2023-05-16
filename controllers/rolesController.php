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

            $rol = $this->_rol->getRolNombre(ucfirst($this->getTexto('nombre')));

            if ($rol) {
                Session::set('msg_error','El rol ingresado ya existe... intente con otro');
                $this->redireccionar('roles/create');
            }

            $rol = $this->_rol->addRol(ucfirst($this->getTexto('nombre')));

            if ($rol) {
                Session::set('msg_success','El rol se ha registrado correctamente');
                $this->redireccionar('roles');
            }
        }else {
            throw new Exception("Error Processing Request", 1);

        }
    }

    public function show($id = null)
    {
        $rol = $this->_rol->getRolId($this->filtrarInt($id));

        if (!$rol) {
            $this->redireccionar('error/error');
        }

        $this->_view->titulo = 'Roles';
        $this->_view->rol = $rol;
        $this->_view->render('show');
    }

    public function edit($id = null)
    {
        $rol = $this->_rol->getRolId($this->filtrarInt($id));

        if (!$rol) {
            $this->redireccionar('error/error');
        }

        $this->_view->titulo = 'Roles';
        $this->_view->rol = $rol;
        $this->_view->process = "roles/update/{$id}";
        $this->_view->send = HASH_KEY;
        $this->_view->render('edit');
    }

    public function update($id = null)
    {
        if ($this->getSql('send') == HASH_KEY) {

            if (!$this->getTexto('nombre')) {
                Session::set('msg_error','Debe ingresar el nombre del rol');
                $this->redireccionar('roles/edit/' . $id);
            }

            $rol = $this->_rol->editRol(
                $this->filtrarInt($id),
                ucfirst($this->getTexto('nombre'))
            );

            if (!$rol) {
                Session::set('msg_error','El rol no se ha modificado... intente nuevamente');
                $this->redireccionar('roles');
            }

            Session::set('msg_success','El rol se ha modificado correctamente');
            $this->redireccionar('roles/show/' . $id);

        }else {
        throw new Exception("Error Processing Request", 1);

        }
    }
}
