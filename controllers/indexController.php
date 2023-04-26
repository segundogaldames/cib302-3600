<?php
class indexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_view->titulo = 'Página de Inicio';
        $this->_view->render('index');
    }

}
