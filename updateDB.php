<?php
//**********insert X Y
include 'sqlPdo3.php';

$PDO= new PDO($dsn,$username,$passwd,$options);

if(isset($_POST['mx'])){
    $x = $_POST['mx'];
    $y = $_POST['my'];
    $player = $_POST['player'];

//    $sql = 'INSERT INTO bsk (player,winx,winy) VALUES (?,?,?)';
//    $stmt = $PDO->prepare($sql);
//    $stmt->execute([$player,$x,$y]);

    echo 'OK';

}
?>