<?php
include_once '../model/Cube.php';
include_once '../controller/Controller.php';
$controller = new Controller(0);
if (empty($_GET['view'])) {
    include_once '../view/index.php';
} else if ($_GET['view'] == 'set-n') {
    header('Content-type: application/json');
    include_once '../view/set-n.php';
} else if ($_GET['view'] == 'update') {
    header('Content-type: application/json');
    include_once '../view/update.php';
} else if ($_GET['view'] == 'query') {
    header('Content-type: application/json');
    include_once '../view/query.php';
} else if ($_GET['view'] == 'test-form') {
    include_once '../view/test-form.php';
} else if ($_GET['view'] == 'restart') {
    header('Content-type: application/json');
    include_once '../view/restart.php';
} else if ($_GET['view'] == '') {
    
}
?>