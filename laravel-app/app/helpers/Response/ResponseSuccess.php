<?php

if(!is_array($params))
    $params = ['message' => $params];

$data = 
[
    'status' => 'success',
    'code' => 200,
    'data' => $params
];

return ResponseBaseHelper('Response', $data);