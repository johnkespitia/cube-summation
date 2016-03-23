<?php
$controller->setNCube($_GET['n']);
echo json_encode(array(
        "result" => "ok",
        "message" => "Matriz creada con dimesión: ",
        "return" => $_GET['n'].'X'.$_GET['n']
    ));
?>