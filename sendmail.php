<?php

$mail_from = trim($_POST['email']); // 보내는 사람메일주소 
$mail_to = "jasonkim5672@gmail.com"; // 받는사람 메일주소 

$mailheaders.= "Return-Path : ". trim($_POST['form_user'])." \r\n";	//리턴되는 메일을 받는 주소
$mailheaders.= "From : SendMailTest \r\n";
$Headers .= "from: 폼메일 <formmail> \r\n";
$Headers .= "Content-Type: text/html; charset=EUC-KR \r\n";
$Name = trim($_POST['name']);


$subject =  "[About-Jason] from".$Name.trim($_POST['subject']);
$contents = $_POST['message'];

mail($mail_to,$subject,$contents,$Headers,$mail_from);
		alert('메일이 성공적으로 전송되었습니다.');
?>