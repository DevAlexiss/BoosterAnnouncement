<html lang="en"><head>
    <meta charset="UTF-8">
	<style>

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
background: #2c2c47;
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
    display: block;
}
body {
background: #2c2c47;
    line-height: 1;
}
ol, ul {
    list-style: none;
}
blockquote, q {
    quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}


/*
 * Page Styling
 */

/*
 * Container
 */

.container {
background: #2c2c47;
    width: 1020px;
    margin: 0 auto;
}

/*
 * Viewport
 */

.builder-viewport {
    width: 490px;
    min-height: 442px;
    box-shadow: 0 5px 0 rgba( 0, 0, 0, .4 );
    border-radius: 0 0 8px 8px;
    -webkit-border-radius: 0 0 8px 8px;
    -moz-border-radius: 0 0 8px 8px;
    -ms-border-radius: 0 0 8px 8px;
    -o-border-radius: 0 0 8px 8px;
}

/*
 * Navigation
 */

.main-navigation ul {
    margin: 50px 0 0 0;
    display: block;
    width: 100%;
    height: 40px;
}

.main-navigation ul {
    border-bottom: 2px solid rgba( 255, 255, 255, .4 );
}

.main-navigation ul li {
    width: 61px;
    height: 40px;
    float: left;
    margin: 0 2.5px 0 0;
    border-radius: 7px 7px 0 0;
    -webkit-border-radius: 7px 7px 0 0;
    -moz-border-radius: 7px 7px 0 0;
    -ms-border-radius: 7px 7px 0 0;
    -o-border-radius: 7px 7px 0 0;
    background: rgba( 0, 0, 0, .2 );
}

.main-navigation ul li img {
    display: block;
    margin: 7px auto;
}

/*
 * Sub Navigation
 */

.sub-navigation {
    background: #eceae0;
    padding: 15px 10px 10px 10px;
}

.sub-navigation li {
    height: 35px;
    width: 55px;
    display: inline-block;
}

.sub-navigation li a {
    width: 100%;
    height: 100%;
    display: block;
    cursor: pointer;
    opacity: .5;
}

.sub-navigation li a.nav-selected {
    opacity: 1;
}

.sub-navigation li a:hover {
    opacity: 1;
}

a.male {
    background: url(../img/male.png) no-repeat center 5px;
}

a.female {
    background: url(../img/female.png) no-repeat center center;
}

a.hair {
    background: url(../img/hair-sn.png) no-repeat center center;
}

a.hats {
    background: url(../img/hats.png) no-repeat center center;
}

a.hair-accessories {
    background: url(../img/hair-accessories.png) no-repeat center center;
}

a.glasses {
    background: url(../img/glasses.png) no-repeat center center;
}

a.moustaches {
    background: url(../img/moustaches.png) no-repeat center center;
}

a.tops {
    background: url(../img/top.png) no-repeat center center;
}

a.chest {
    background: url(../img/chest.png) no-repeat center center;
}

a.jackets {
    background: url(../img/jackets.png) no-repeat center center;
}

a.accessories {
    background: url(../img/accessories.png) no-repeat center center;
}

a.bottoms {
    background: url(../img/bottoms-sn.png) no-repeat center center;
}

a.shoes {
    background: url(../img/shoes.png) no-repeat center center;
}

a.belts {
    background: url(../img/belts.png) no-repeat center center;
}



/*
 * Clothes and Colors
 */

#clothes-colors {
    width: 75%;
    height: 400px;
    float: left;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    padding: 0 10px;
    background: #eceae0;
    border-radius: 0 0 0 8px;
    -webkit-border-radius: 0 0 0 8px;
    -moz-border-radius: 0 0 0 8px;
    -ms-border-radius: 0 0 0 8px;
    -o-border-radius: 0 0 0 8px;
}

#colors,
#clothes {
    display: block;
    margin: 0 0 0 0;
    overflow-y: auto;
}

#colors {
    height: 40%;
    max-height: 150px;
    margin: 15px 0;
}

#clothes {
    height: 60%;
    max-height: 250px;
}

#avatar {
    float: left;
    background: #eceae0;
    width: 25%;
    height: 400px;
    border-radius: 0 0 8px 0;
    -webkit-border-radius: 0 0 8px 0;
    -moz-border-radius: 0 0 8px 0;
    -ms-border-radius: 0 0 8px 0;
    -o-border-radius: 0 0 8px 0;
    position: relative;
}

#avatar #myHabbo {
    margin: 0 auto;
    display: block;
}

.color-object {
    display: inline-block;
    width: 10px;
    height: 15px;
    border: 2px solid #736d67;
    margin: 2px 1.5px;
    border-radius: 3px;
    box-shadow: 0px 2px 0px rgba(0 ,0, 0, 1 );
}

.clothes-object {
    display: inline-block;
    height: 55px;
    width: 55px;
    background: #eceae0;
    background-repeat: no-repeat;
    background-position: center -10px;
    border-radius: 50%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    border: 2px solid rgba( 0, 0, 0, 0 );
}

.removable {
    background-image: url(../img/removable.png);
    background-position: center center !important;
}

.clothes-object:hover,
.clothes-object.selected {
    background-color: rgba( 0, 0, 0, .2 );
    border: 2px solid rgba( 255, 255, 255, .5 );
}

.ch {
    background-position-y: -30px !important;
}

.lg {
    background-position-y: -70px !important;
}

.ca {
    background-position-y: -30px !important;
}

.cp {
    background-position-y: -30px !important;
}

.cc {
    background-position-y: -45px !important;
}

.wa {
    background-position-y: -50px !important;
}

.sh {
    background-position-y: -75px !important;
}

/*
 *
 */

.nav-selected {
    opacity: 1;
}

.hidden {
    display: none;
}

/*
 * Code
 *
 */

#code {
    width: 100%;
    height: 40px;
    background: #f3f3f3;
}

/*
 * Miscellaneous
 *
 */

::-webkit-scrollbar
{
    width: 16px;
    position: relative;
    background: url(../img/scrollbar-background.png) repeat-y;
}

::-webkit-scrollbar-button:vertical:increment {
    background: url(../img/scrollbar_bottom.png) no-repeat;
    height: 16px;
}

::-webkit-scrollbar-button:vertical:decrement {
    background: url(../img/scrollbar_top.png) no-repeat;
    height: 16px;
}

::-webkit-scrollbar-thumb
{
    background: url(../img/scrollbar-bar.png) repeat-y;
    margin: 200px;
    width: 14px;
    cursor: pointer;
    border-radius: 5px;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
}

::-webkit-scrollbar-track
{
    background: url(../img/scrollbar-background.png) repeat-y;
}

/* Buttons */


#avatarSelectionForm {
    width: 90%;
    margin: 0 auto;
}

#avatarSelectionForm button {
    width: 100px;
    height: 28px;
    background: url(../img/button.png) no-repeat;
    text-indent: -9999px;
    cursor: pointer;
    position: absolute;
    bottom: 20px;
    border: 0;
    outline: none;
}
.blue{
    color: rgb(41, 120, 224);
}
.baslık{
    margin-top: 90px;
    color: white;
    font-size: 26px;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
}
.i-text{
    color: gray;
    font-family: 'Poppins', sans-serif;
    font-weight: 900;
}
.not{
    color: rgb(197, 197, 197);
    font-weight: 900;
    font-family: 'Poppins', sans-serif;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>

<link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Php System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

</head>
<body style='background: #2c2c47;'>
<br>
<br>
<br>
<br>
  <center>  <img src="https://habbofont.net/font/habbo_new/alexiss.gif">
  </center>
<div class="container">
<div class="row">
<div class="col">
    <div class="info-box">
        <p class="baslık">İşlem</p>
		<?php
   $host='localhost';
   $user='root';
   $pass='123456';
   $db='alexissdb';
   $alexisss = new PDO('mysql:host=$host;dbname=$db;charset=utf8;',$user,$pass);

		$duyuruyapan = User::userData('username');
		$nick = $_GET['isimtext']; // Seçilen Kullanıcı
		$duyuru = $_GET['duyurutext']; // Duyuru Yazısı
		$boost = User::userData('boost');
if (isset($_POST['isim'])) {
	$sql = $alexisss->query("UPDATE users SET boost = boost + 5 WHERE username = '$nick'");
	echo'<h5 class="i-text mt-4">Booster Rolü Verildi</h5>';
}
if (isset($_POST['duyuru'])) {
	if ($boost > '0') { 
	$sql = $alexisss->query("
				INSERT INTO
				boostduyuru
				(username, duyurutext)
				VALUES
				(
				:username,
				:text
				)");
				$sql->bindParam(':username', $duyuruyapan);
				$sql->bindParam(':text', $duyuru);
	echo'<h5 class="i-text mt-4">Duyuru Gönderildi</h5>';
	}
	else{
		echo'<h5 class="i-text mt-4">Yeterli Hakkınız Yok</h5>';
	}
}

         ?>
		 
    </div>
</div>
</div>
</div>