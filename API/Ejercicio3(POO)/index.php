<?php

require_once 'autoload.php';

use App\Classes\Curl;

$curl = new Curl('https://reqres.in/api/users');

$array = [
    'first_name'=>'Andre',
    'last_name'=>'Caro',
    'job'=>'Web developer'
];

$response = $curl->init()->setOption()->setOption(CURLOPT_POST, true)->buildQuery($array)
->setOption(CURLOPT_RETURNTRANSFER, true)->decode()->fetch();

echo "
<b>ID:</b>
$response->id
<br>
<b>Names:</b>
$response->first_name
<br>
<b>Last Names:</b>
$response->last_name
<br>
<b>Job:</b>
$response->job
<br>
<b>Created At:</b>
$response->createdAt
<br>
";