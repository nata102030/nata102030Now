<?php
//print_r($_POST);
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if(trim($name) == '') //trim - удаляет пробелы
    {echo "Не ввели имя";}
else if (strlen(trim($name)) <=2)
    {echo "Имя не существует";}
else if(trim($email) =='' || trim($pass) =='' || trim($_POST['message']) =='')
    {echo "Введите все";}
else{
   /* $pass = md5($pass); //хешируем пароль
    echo "<h1>Вcе данные</h1><p>$name</p><p>$email</p><p>$pass</p><p>$_POST[message]</p>";

    foreach($_POST as $kay => $value)
        {echo "<p>$value</p>";}
*/

//header('Location: https://itproger.com/'); //переадресация пользователя
header('Location: about.php');
exit; //выход из кода

}



