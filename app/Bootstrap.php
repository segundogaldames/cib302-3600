<?php

class Bootstrap
{
    public static function run(Request $peticion)
    {
        $controller = $peticion->getController() . 'Controller';
        $rutaControlador = ROOT . 'controllers' . DS . $controller . '.php';
        $metodo = $peticion->getMethod();
        $args = $peticion->getArgs();

        if(is_readable($rutaControlador))
        {
            require_once $rutaControlador;
            $controller = new $controller;

            if (is_callable(array($controller, $metodo)))
            {
                $metodo = $peticion->getMethod();
            }
            else
            {
                $metodo = 'index';
            }

            if(isset($args))
            {
                call_user_func_array(array($controller, $metodo), $args);
            }
            else
            {
                call_user_func(array($controller, $metodo));
            }
        } else{
            header('Location: ' . BASE_URL . 'error/error');
        }

    }
}
?>