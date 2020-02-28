<?php
$timezones = ["Asia/Seoul", "America/New_York"]; //배열 선언
echo implode(',', $timezones);
//implode함수는 2개의 인자를 가짐(배열의 원소를 구분하는 문자,배열객체), 배열을 문자열로 만들어줌
//"Asia/Seoul,America/New_York" 문자열이 출력됨
?>
