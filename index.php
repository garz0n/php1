<?php

    include('views/header.php');

    $nombre = 'Mauricio Max Garzón Ruiz';
    $escuela = 'CBTIS 134';
    $edad = '16';

    print('<h2 class="alert alert-danger" align="center" >Bienvenido a mi primera página PHP me llamo '.$nombre.'</h2>');
    print('<h3 class="alert alert-info" align="center">Actualmente curso el 4to semestre de programación en: '.$escuela.'</h3>');
    echo '<p class="alert alert-warning" align="center">Aunque no lo parezca tengo '.$edad.' de edad</p>';
    include('views/footer.php');
?>