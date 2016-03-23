<?php
if ($controller->update($_POST['x'], $_POST['y'], $_POST['z'], $_POST['w'])) {
    $value = $controller->getCube();
    echo json_encode(array(
        "result" => "ok",
        "message" => "Update ejecutado",
        "return" => $value[$_POST['x']][$_POST['y']][$_POST['z']]
    ));
}
?>