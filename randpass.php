<?php
$num = $_GET["num"];
function rp($Number){
    $Rand = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $Number);
    return $Rand;
}

if($num == "") {
}else{
    echo '<center><font color="white">'.rp($num);
}
?>

<html>

<link href="http://font.is-best.net/font/iransans.css" rel="stylesheet">
<link rel="stylesheet" href="http://telegramcheat.is-best.net/a.css">

<body class="blue">
<font face="iransans" color="white">
    <center>
        <form action="randpass.php" method="get">
            <input type="text" placeholder="تعداد کارکتر ها" name="num">
            <br>
            <input type="submit" value="ساخت رمز" class="waves-effect waves-light btn deep-orange darken-1">
        </form>
           <code>https://github.com/onyxtm/WebRandPass
           
           t.me/ch_jockdoni
           t.me/onyxtm
           t.me/phpbots</code>
    </center>
</body>
</html>
