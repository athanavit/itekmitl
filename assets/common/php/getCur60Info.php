<?php
header("Content-Type: application/json; charset=UTF-8");
require_once 'DBConnect.php';

$subid = $_POST["subid"];

$result = $objCon->query("SELECT `no`, `subject_name_th`, `subject_name`, `teacher`, `type`, `description`, `description_en`, `credit` FROM `curriculum60`  WHERE `id`='" .$subid. "'");
$outp = $result->fetch_assoc();

$P_id = $outp['teacher'];
$result2 = $objCon->query("SELECT `name` FROM `professor` WHERE `P_id`='" .$P_id. "'");
$outp2 = $result2->fetch_assoc();

$result = array();
$result['sub'] = $outp;
$result['teacher'] = $outp2;

echo json_encode($result);
?>
