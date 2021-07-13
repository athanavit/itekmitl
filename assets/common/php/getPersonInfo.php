<?php
header("Content-Type: application/json; charset=UTF-8");
require_once 'DBConnect.php';

$short_name = $_POST["short_name"];

$result = $objCon->query("SELECT * FROM ( SELECT * FROM `professor` UNION SELECT * FROM `staff`) AS T1 WHERE `short_name`='" .$short_name. "'");
$outp = $result->fetch_assoc();

$result2 = $objCon->query("SELECT `subject`,`Institute` FROM `p_graduated` WHERE p_id='" .$outp["P_id"]. "'");
while ($row = $result2->fetch_assoc()) {
  $outp2[] = $row;
}

$result3 = $objCon->query("SELECT `teach_sub` FROM `p_teach` WHERE P_id='" .$outp["P_id"]. "'");
while ($row = $result3->fetch_assoc()) {
  $outp3[] = $row;
}

$result = array();
$result['info'] = $outp;
$result['edu'] = $outp2;
$result['teach'] = $outp3;
echo json_encode($result);
?>