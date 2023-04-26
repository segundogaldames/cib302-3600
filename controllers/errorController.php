<?php
class errorController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function error()
    {
        $this->_view->titulo = 'Error: Página No Encontrada';
        $this->_view->render('error');
    }
}
