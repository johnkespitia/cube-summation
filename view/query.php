<?php

$result=$controller->query($_POST['x1'], $_POST['y1'], $_POST['z1'], $_POST['x2'], $_POST['y2'], $_POST['z2']);
echo json_encode(array(
        "result" => "ok",
        "message" => "Query ejecutado",
        "return" => $result
    ));
?>