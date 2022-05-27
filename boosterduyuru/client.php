<div id='boosterduyuru'>
<?php $dizi=$baglan->query('SELECT * FROM boostduyuru',PDO::FETCH_ASSDOC);
foreach($dizi as $boosteralex)
{
echo '<div>'.$boosteralex['username'].': '.$boosteralex['duyurutext'].'</div>';
}
?>
</div>
<script>
 setInterval {
 function(){
 $('#boosterduyuru').load('/boosterapi.php');
 },1000
 }
</script>
<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>