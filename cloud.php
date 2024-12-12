<?php
header("Content-type: text/html; Charset=UTF-8;");
//Создание объекта и загрузка в него документа
$sxml = simplexml_load_file("cloud.xml");
?>
<html>
<head>
<title>Каталог</title>
</head>
<body>
<h1>Каталог книг</h1>
<table border="1" width="100%">
<tr>
<th>Название услуги</th>
<th>Описание</th>
<th>Цена, руб</th>
</tr>
<?php

  foreach ($sxml->service as $service) {
    echo "<tr>";
    echo "<td>", $service->title, "</td>";
    echo "<td>", $service->description, "</td>";
    echo "<td>", $service->price, "</td>";
    echo "</tr>";
  }
?>
</table>
</body>
</html> 
