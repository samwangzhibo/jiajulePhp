<?php
session_start();

//����Ƿ��¼����û��¼��ת���¼����
if(!isset($_SESSION['userid'])){
    header("Location:login.html");
    exit();
}

//�������ݿ������ļ�
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where id=$userid limit 1");
$row = mysql_fetch_array($user_query);
echo '�û���Ϣ��<br />';
echo '�û�ID��',$userid,'<br />';
echo '�û�����',$row['userid'],'<br />';
echo '��ͥ�ţ�',$row['home_id'],'<br />';
#echo '�绰���룺��',date("Y-m-d", $row['regdate']),'<br />';
echo '�绰���룺��',$row['phone'],'<br />';
echo '<a href="login.php?action=logout">ע��</a> ��¼<br />';
?>