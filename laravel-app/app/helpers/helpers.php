<?php

function ResponseBaseHelper($function_name, $params = NULL)
{
    $function_name = str_replace('.', '', $function_name);
    return require 'Response/'.$function_name.'.php';
}


