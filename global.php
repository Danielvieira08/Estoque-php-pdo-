<?php

require_once 'classes/config.php';

spl_autoload_register('carregarClasses');

    function carregarClasses($nomeClasses) 
    {
        if (file_exists('classes/' . $nomeClasses . '.php' )) {
            require_once ('classes/' . $nomeClasses . '.php');
        }
    }

    /*Serve pra organizar minhas classes quando uso apenas o global pra requerir os documentos.*/