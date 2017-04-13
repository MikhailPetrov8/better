<?
$name = $_POST['name'];
$email = $_POST['mail'];
$mess = $_POST['mess'];
$to = 'myemail@email.comm';
$subject = 'Hello';
$header = "From: ". $name . " <" . $email . ">\r\n";
/* Соединяемся с базой данных */
$hostname = "localhost"; // название/путь сервера, с MySQL
$username = "root"; // имя пользователя (в Denwer`е по умолчанию "root")
$password = ""; // пароль пользователя (в Denwer`е по умолчанию пароль отсутствует, этот параметр можно оставить пустым)
$dbName = "bd_contacts"; // название базы данных
 
/* Таблица MySQL, в которой будут храниться данные */
$table = "tb_clients";
 
if(empty($name) || empty($email) || empty($mess))	 {
	echo "
	<div style=\"text-align: center; margin-top: 10px;\">
	<font color=\"red\">Пожалуйста запоните все поля.</font>	 
	<a href=\"index.php\">Вернуться назад</a></div>";
} else  {
	mail ($to, $subject, $mess, $header);
	
	/* Создаем соединение */
	mysql_connect($hostname, $username, $password) or die ("Не могу создать соединение");
	 
	/* Выбираем базу данных. Если произойдет ошибка - вывести ее */
	mysql_select_db($dbName) or die (mysql_error());
	 
	/* Определяем текущую дату */
	$cdate = date("Y-m-d");
	 
	/* Составляем запрос для вставки информации в таблицу
	name...date - название конкретных полей в базе;
	в $_POST["name"]... $_POST["mess"] - в этих переменных содержатся данные, полученные из формы */
	$query = "INSERT INTO $table SET name='".$name."', email='".$email."', text='".$mess."', data='$cdate'";
	 
	/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
	mysql_query($query) or die(mysql_error());
	 
	/* Закрываем соединение */
	mysql_close();
	 
	/* В случае успешного сохранения выводим сообщение и ссылку возврата */
	echo ("<div style=\"text-align: center; margin-top: 10px;\">
	<font color=\"green\">Ваше сообщение было отправлено.</font>

	<a href=\"../../index.php\">Вернуться назад</a></div>");
}
?>
