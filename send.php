
<?
$to ="cameras0802@gmail.com";
$subject="我有話要說! ";
$message="
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>send</title>
</head>

<body>
您好,我是來自 .$select 的 .$company ! <BR>
請與我連絡 <br>
聯絡資訊: <BR>
我的姓名: .$name <BR>
我的電話: .$phone <br>
我的傳真: .$fax <br>
我的地址: .$address <br>
我的信箱: .$email <br></body></html>";
$headers = "MIME-Vearsion: 1.0\r\n";
$headers = "Content-type: text/html; charset=Big5\r\n";
$headers = "補充訊息";
@ mail($to,$subject,$message,$headers) or die("傳送失敗,請檢查伺服器是否正常運作");
?>




