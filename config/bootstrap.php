<?php

function __autoload($class_name) 
{
	if(file_exists('models/'.$class_name.'.php')) {
    	require_once ('models/'.$class_name.'.php');
    }
    else if(file_exists('helpers/'.$class_name.'.php')) {
    	require_once ('helpers/'.$class_name.'.php');

    }
}




?>