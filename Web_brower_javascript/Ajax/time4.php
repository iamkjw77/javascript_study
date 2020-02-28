<?php
$timezones = ["Asia/Seoul", "America/New_York"];
header('Content-Type: application/json');
echo json_encode($timezones);
//객체 또는 배열을 JSON화 시킬 때 사용하는 것이 json_encode
//데이터 형식을 다시 예전상태로 돌리는 것이 json_decode
//["Asia\/Seoul","America\/New_York"] 출력
?>
