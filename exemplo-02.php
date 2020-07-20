<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true); //true para que tudo seja transformado em array, e não em objeto.

var_dump($data);

?>