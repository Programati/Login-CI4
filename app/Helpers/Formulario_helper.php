<?php
    //Aqui programararemos los SCRIP la vizualizacion de errores de cada campo del formulario de Registro
    function mostrar_errores($validaciones, $campo)
    {
        if($validaciones->hashError($campo))
        {
            return $validaciones->getError($campo); 
        }else
        {
            return false;
        }
    }

