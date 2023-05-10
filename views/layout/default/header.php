<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
    <link rel="stylesheet" href="<?= $_layoutParams['ruta_css'] ?>reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Roboto+Mono:wght@200;500&display=swap"
        rel="stylesheet">
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
                <a href="<?= $_layoutParams['root'] ?>">Inicio</a>
            </li>
            <li>
                <a href="<?= $_layoutParams['root'] ?>about">Acerca de</a>
            </li>
            <li>
                <a href="#">Contacto</a>
            </li>
        </ul>
    </nav>