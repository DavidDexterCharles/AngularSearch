<?php

header('Access-Control-Allow-Origin: *');//http://stackoverflow.com/questions/20035101/no-access-control-allow-origin-header-is-present-on-the-requested-resource
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');//http://stackoverflow.com/questions/13400594/understanding-xmlhttprequest-over-cors-responsetext?lq=1
require_once('Jengine.php');


$template=Jengine::json_template('http://localhost/AngularSearch/data1.json');
$json_data2=array("David", "Cows", "grey","http://www.gettyimages.com/gi-resources/images/CreativeImages/Hero-527920799.jpg");

for ($x = 0; $x <= 1000; $x++) {
    $template=Jengine::json_add($template,$json_data2);
}

echo $template;