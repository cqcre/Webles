<?php
session_start();
require("check_admin.php");
require("config.php");
?>
<?

$position=$_POST['position'];
$pass=$_POST['pass'];
$linkurl=$_POST['linkurl'];
$imgurl=$_POST['imgurl'];
$paixu=$_POST['paixu'];
$Query = "
    INSERT INTO 
      floatimg
    (
      position
      ,pass
      ,linkurl
      ,imgurl
      ,paixu
       )
    VALUES
    (
      '$position'
      ,'$pass'
      ,'$linkurl'
      ,'$imgurl'
      ,'$paixu'
         )
   ";
$result = mysql_query($Query, $mysql_link); 
 
/*�ж�SQL����ִ���Ƿ���������������ʾ����ʧ�ܣ� 
��������Ӧ�Ĵ���š���ִ�гɹ�����ʾ���Է��ͳɹ�*/ 
if (! $result) { 
  $errno = mysql_errno(); 
  $error = mysql_error(); 
  echo '<html><head><title>Error</title></head><body>'; 
  echo 'SQL����ʧ��.'; 
  echo "<br>Error: ($errno) $error<br>"; 
  echo '</body></html>'; 
  exit(); 
} 

echo "<script language=javascript>alert('����ɹ�');window.location='floatimg_edit.php';</script>"; 

mysql_close($mysql_link);
?>