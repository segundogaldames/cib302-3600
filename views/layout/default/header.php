<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
    <link rel="stylesheet" href="<?= $_layoutParams['ruta_css'] ?>reset.css">
    <link rel="stylesheet" href="<?= $_layoutParams['ruta_css'] ?>styles.css">
</head>

<body>
    <!--Cabecera de la pagina-->
    <header>
        Cabecera
    </header>
    <!-- seccion de navegacion -->
    <nav>
        <ul>
            <li>
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a href="#">Acerca de</a>
            </li>
            <li>
                <a href="#">Contacto</a>
            </li>
        </ul>
    </nav>