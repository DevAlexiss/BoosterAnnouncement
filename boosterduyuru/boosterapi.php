<?php 
   $host='localhost';
   $user='root';
   $pass='123456';
   $db='alexissdb';
$baglan = new PDO('mysql:host=$host;dbname=$db;charset=utf8;',$user,$pass);
$dizi=$baglan->query('SELECT * FROM boostduyuru',PDO::FETCH_ASSDOC);
foreach($dizi as $boosteralex)
{
echo '<div>'.$boosteralex['username'].': '.$boosteralex['duyurutext'].' ';
}
?>