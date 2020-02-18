<?php
session_start();
include("baglanti");
?>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<h1>Hosgeldin</h1><?php
$_SESSION["kullanici"]=$liste["kad"];
?>
</body>
</html>