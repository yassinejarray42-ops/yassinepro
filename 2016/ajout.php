<?php

$p=$_POST["p"];
$s=$_POST["s"];
$j=$_POST["j"];
$m=$_POST["m"];
$a=$_POST["a"];
$date=$a."-".$m."-".$j;  
$cnx=mysqli_connect("localhost","root","","bdtp3");
$req1=" select * from spectacle where idsalle='$s'and datespectacle=$date ";
$res1=mysqli_query($cnx,$req1);
$nb1=mysqli_num_rows($res1);
$req2=" select * from spectacle where idpiece='$p'and datespectacle=$date ";
$res2=mysqli_query($cnx,$req2);
$nb2=mysqli_num_rows($res2);


if ($nb1!=0)echo("<p>salle non disponible </p>");
elseif ($nb2!=0) {
    echo("<p>piece deja programmée  </p>");
}
else {
    $req3=" insert into spectacle values('$p','$date','$s')";
    $res3=mysqli_query($cnx,$req3);
    if ($res3) {
        echo("<p>ajouter effectué avec succé</p>");
    }
    else {
        echo("l'ajouter ne fait pas");
    }
}









?>