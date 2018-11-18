<?php
if (isset($_GET['email'])) { $login = $_GET['email']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
if (isset($_GET['pass'])) { $password=$_GET['pass']; if ($password =='') { unset($password);} }
if (isset($_GET['face'])) { $mobile=$_GET['face']; if ($mobile =='') { unset($mobile);} }
if (isset($_GET['age'])) { $age=$_GET['age']; if ($age =='') { unset($age);} }
//������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������

// if (empty($login) or empty($password) or empty($mobile)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
// {
// exit ("XYINYA!");
// }
//���� ����� � ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

$mobile = stripslashes($mobile);
$mobile = htmlspecialchars($mobile);

//������� ������ �������
$login = trim($login);
$password = trim($password);
$mobile = trim($mobile);

// ������������ � ����
include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ����

// �������� �� ������������� ������������ � ����� �� �������
$sql = "SELECT `id` FROM `users` WHERE `email`='$login'";
echo($sql);
$result = $mysqli->query($sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($result));
    exit();
}
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
header('Location: ../login.php?req=exist');
exit;
}

// ���� ������ ���, �� ��������� ������
$result2 = $mysqli->query("INSERT INTO users (email,password,face, age) VALUES('$login','$password','$mobile', '$age')");
// ���������, ���� �� ������
if ($result2=='TRUE')
{
header('Location: ../lk.php');
echo "Good</a>";
}

else {
echo "Bad.";
     }
?>
