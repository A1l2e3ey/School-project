<!DOCTYPE html>
<html>
<head>
<title>Files</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
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
Записи:
<?php

require 'connection.php';

$task = 'select * from names';

$taskto = mysqli_query($link, $task);

while($row = mysqli_fetch_array($taskto)) {
echo "<div><a href='". $row['filename']. "'>". $row['name']. "</a></div>";	
}

?>
</div>
</div>
<div class="footer">
<div>
© 2017 ФНИЦ "Кристаллография и фотоника" | НИЦ "Курчатовский институт" 
</div>
</div>
</body>
</html>