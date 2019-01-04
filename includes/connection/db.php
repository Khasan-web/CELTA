<?php

    $connection = mysqli_connect('localhost', 'root', '', 'celta');

    if( $connection == false ){
        echo 'Error';
        echo mysqli_connect_error();
        exit();
    }

?>