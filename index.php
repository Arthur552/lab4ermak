<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Лаба 4</title>
</head>
<body>

<form action="vote.php" method="get" target='_blank'>
    <!-- указываем в value цифру нужного нам голосования, для которого уже создали файлы //-->
    <input type="Hidden" name="id" value="1">
    <p><b>Какой фильм круче всех?</b></p>
    <input type="Radio" name="vote" value="1" checked>Мстители<br>
    <input type="Radio" name="vote" value="2">Мстители<br>
    <input type="Radio" name="vote" value="3">Мстители<br>
    <input type="Radio" name="vote" value="4">Мстители<br>
    <input type="Radio" name="vote" value="5">Мстители Финал<br>
    <input type="Submit" value=" Отдать голос за Мстители Финал" style="margin-top:10px;">
</form>

<!-- указываем в href после vote.php?id= цифру нужного нам голосования, для которого уже создали файлы //-->
<p><a href='vote.php?id=1' target='_blank'><button>Результаты</button></a></p>

</body>
</html>