<?php
/*if(!isset($_POST['submit'])){
    exit('�Ƿ�����!');
}*/
$username = $_GET['username'];
$pass = $_GET['pass'];
//$email = $_POST['email'];
$home_id = $_GET['home_id'];
$phone = $_GET['phone'];
$userid = '10000';
//ע����Ϣ�ж�
/*if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
    exit('�����û��������Ϲ涨��<a href="javascript:history.back(-1);">����</a>');
}
if(strlen($password) < 6){
    exit('�������볤�Ȳ����Ϲ涨��<a href="javascript:history.back(-1);">����</a>');
}
if(!preg_match('/^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*$/', $email)){
    exit('���󣺵��������ʽ����<a href="javascript:history.back(-1);">����</a>');
}*/
//�������ݿ������ļ�
include('conn.php');
//����û����Ƿ��Ѿ�����
$check_query = mysql_query("select uid from user where username='$username' limit 1");
if($result = mysql_fetch_array($check_query)){
    echo '�����û��� ',$username,' �Ѵ��ڡ�<a href="javascript:history.back(-1);">����</a>';
    exit;
}
//д������
$pass = MD5($pass);
//$regdate = time();
$sql = "INSERT INTO user(id,username,pass,home_id,phone,userid)VALUES(null,'$username','$pass','$home_id',
'$phone','$userid')";
if(mysql_query($sql,$conn)){
    exit('�û�ע��ɹ�������˴� <a href="login.html">��¼</a>');
} else {
    echo '��Ǹ���������ʧ�ܣ�',mysql_error(),'<br />';
    echo '����˴� <a href="javascript:history.back(-1);">����</a> ����';
}
?>