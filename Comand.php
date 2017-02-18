<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Testmain</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php

require 'connection.php';

mysqli_query($link, "SET NAMES utf8");

$task = 'select * from comand';

$photo = array();

$taskto = mysqli_query($link, $task);

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
<li><a href="Comand.php">Команда</a></li>
<li><a href="Idea.html">Идеология</a></li>
<li><a href="Add.html">Добавить запись</a></li>
</ul>
</div>
<div class="mainbody">
<table>
<tbody>
<?php

$numb = 0;

while($row = mysqli_fetch_array($taskto)) {
	$ost = $numb % 2;
	if($ost == 0){
		echo "<tr>";
	}
echo '
<td>
<div class="comand">
<div class="comandpic">
<img src="'. $row['photo'] .'" height="90" width="90">
</div>
<div class="comandtext">
<div class="name">'
. $row['name'].
'</div>
<div class="task">
Задача:
</div>
<div class="maintext">'
.$row['task'].
'</div>
</div>
</td>';

$numb+= 1;
$ost = $numb % 2;
if($ost == 0){
echo "</tr>";
}
}

?>
</tbody>
</table>
</div>
<div class="footer">
<div>
© 2017 ФНИЦ "Кристаллография и фотоника" | НИЦ "Курчатовский институт" 
</div>
</div>
</body>
</html>