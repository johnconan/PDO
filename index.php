<?php 
	
$db = new PDO('mysql:host=localhost;dbname=mini-site','root', '');

// $sql = "SELECT * FROM films";
// $result = $db->query($sql);
// echo "<h2>Вывод записей по одной</h2>";
// while ( $film = $result->fetch(PDO::FETCH_ASSOC) )  {
// 	echo "Название фильма " . $film['title'];
// 	echo "<br>";
// }

// echo "<hr/>";

// $sql = "SELECT * FROM films";
// $result = $db->query($sql);
// $films = $result->fetchAll(PDO::FETCH_ASSOC);
// foreach ($films as $film) {
// 	echo "Название фильма: " . $film['title'] . "<br>";
// 	echo "Жанр фильма: " . $film['genre'] . "<br>";
// 	echo "Год фильма: " . $film['year'] . "<br>";
// }

// echo "<hr/>";

// $sql = "SELECT * FROM films";
// $result = $db->query($sql);

// $result->bindColumn('id',$id);
// $result->bindColumn('title',$title);
// $result->bindColumn('genre',$genre);
// $result->bindColumn('year',$year);

// while ($result->fetch(PDO::FETCH_ASSOC)) {
// 	echo "ID: {$id} <br>";
// 	echo "title: {$title} <br>";
// 	echo "genre: {$genre} <br>";
// 	echo "year: {$year} <br>";
// }

// 1. Выборка без защиты от SQL инъекции
// $username  = 'Joker';
// $password = '777';

// $sql = "SELECT * FROM `users` WHERE `name` = '{$username}' AND `password` = '{$password}' LIMIT 1";
// $result = $db->query($sql);

// if ($result->rowCount() == 1) {
// 	$user = $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользовтеля: " . $user['name'] . "<br>";
// 	echo "Пароль пользовтеля: " . $user['password'];
// }

// 2. Выборка c защитой от SQL инъекции в ручном режиме
// $username  = 'Joker';
// $password = '777';

// $username = $db->quote($username);
// $username = strtr($username, array('_' => '\_' => '%') );

// $password = $db->quote($password);
// $password = strtr($password, array('_' => '\_' => '%') );

// $sql = "SELECT * FROM `users` WHERE `name` = '{$username}' AND `password` = '{$password}' LIMIT 1";

// if ($result->rowCount() == 1) {
// 	$user = $result->fetch(PDO::FETCH_ASSOC);
// 	echo "Имя пользовтеля: " . $user['name'] . "<br>";
// 	echo "Пароль пользовтеля: " . $user['password'];
// }

// 3. Выборка c защитой от SQL инъекции в автоматическом режиме

// $sql = "SELECT * FROM `users` WHERE `name` = :username AND `password` = :password LIMIT 1";
// $stmt = $db->prepare($sql);

// $username  = 'Joker';
// $password = '777';

// $stmt->bindValue(':username', $username );
// $stmt->bindValue(':password', $password );
// $stmt->execute();


// $stmt->bindColumn('name',$name);
// $stmt->bindColumn('email',$email);
// $stmt->fetch();

// 	echo "Имя пользовтеля: " . $name . "<br>";
// 	echo "Пароль пользовтеля: " . $email;

// 3. Выборка c защитой от SQL инъекции в автоматическом режиме другой формат запроса.
// $sql = "SELECT * FROM `users` WHERE `name` = ? AND `password` = ? LIMIT 1";
// $stmt = $db->prepare($sql);

// $username  = 'Joker';
// $password = '777';

// $stmt->bindValue(1,$username);
// $stmt->bindValue(2,$password);
// $stmt->execute();

// $stmt->fetch();
// echo "Имя пользовтеля: " . $username . "<br>";
// echo "Пароль пользователя: " . $password;


// Готовим запрос в БД
// $sql = "INSERT INTO `users` (`name`, `email`) VALUES (:name, :email)";
// $stmt = $db->prepare($sql);

// $username = "Flash";
// $useremail = "Flash@mail.com";

// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':email', $useremail);
// $stmt->execute();


// Изменение в БД

// $sql = "UPDATE `users` SET `name`= :name WHERE id = :id";

// $stmt=$db->prepare($sql);

// $username = "New Flash";
// $id = 7;
// $stmt->bindValue(':name', $username);
// $stmt->bindValue(':id', $id);
// $stmt->execute();
// echo "<p>Было затронуто строк: " . $stmt->rowCount() . "</p>";

// $sql = "DELETE FROM `users` WHERE name = :name";
// $stmt = $db->prepare($sql);

// $username = "New Flash";
// $stmt->bindValue(':name', $username);
// $stmt->execute();
// echo "<p>Было затронуто строк: " . $stmt->rowCount() . "</p>";
 ?>