<?php
$data = json_decode(file_get_contents('php://input'), true);
//데이터 형식을 다시 예전상태(문자열)로 돌리는 것이 json_decode
$d1 = new DateTime;
$d1->setTimezone(new DateTimezone($data['timezone']));
echo $d1->format($data['format']);
?>
