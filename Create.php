<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Create</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php

require 'connection.php';

$text = $_REQUEST['text'];

$name = array ();

for($m = 0; ;$m++){
	$name[] = 'userfiles/new'.$m.'.html';
	if( !file_exists($name[$m])){
$fl = fopen($name[$m], 'w');
$namefile = $name[$m];
break;
	}
}

$insert_sql = "INSERT INTO names (name, filename)" .
        "VALUES ('{}', '{$namefile}');";

$result = mysqli_query($link, $insert_sql)
    or die(mysql_error());

fwrite($fl, '<html>
<head>
<title>Test</title>
<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
<div class="header">
<div class="image">
<a href="../index.html">*Будет картинка-ссылка<br> на главную страницу*</a>
</div>
<div class="files">
<a href="../Allfiles.php">Все записи</a>
</div>
</div>
<div class="menu">
<ul>
<li><a href="../Comand.html">Команда</a></li>
<li><a href="../Idea.html">Идеология</a></li>
<li><a href="../Add.html">Добавить запись</a></li>
</ul>
</div>
<div class="mainbody">'. $text .'</div>
<div class="footer">
<div>
© 2017 ФНИЦ "Кристаллография и фотоника" | НИЦ "Курчатовский институт" 
</div>
</div>
</body>
</html>');

fclose($fl);

?>
<div class="header">
<div class="image">
<a href="index.html">*Будет картинка-ссылка<br> на главную страницу*</a>
</div>
<div class="files">
<a href="Allfiles.php">Все записи</a>
</div>
</div>
<div class="menu">
<ul>
<li><a href="Comand.html">Команда</a></li>
<li><a href="Idea.html">Идеология</a></li>
<li><a href="Add.html">Добавить запись</a></li>
</ul>
</div>
<div class="mainbody">
<div>
Запись была создана, чтобы просмотреть ее, перейдите во вкладку "Все записи".
</div>
</div>
<div class="footer">
<div>
© 2017 ФНИЦ "Кристаллография и фотоника" | НИЦ "Курчатовский институт" 
</div>
</div>
</body>
</html>