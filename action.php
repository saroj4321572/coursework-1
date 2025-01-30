<?php
session_start();
require('database.php');

if (isset($_POST['register'])) {

    $usr = $_POST['usr'];
    $em = $_POST['em'];
    $pw = $_POST['pw'];
    $hashed_pw = md5($pw);

    $q = "INSERT into tbl_register (id, username, email, pass)
    VALUES (Null, '$usr', '$em', '$hashed_pw')";

    $conn->query($q);
    header("Location:index.php");
}


if (isset($_POST['login'])) {

    $us = $_POST['us'];
    $pwd = $_POST['pwd'];
    $hashed_pwd = md5($pwd);


    $q = "select * from tbl_register where username='$us' and pass='$hashed_pwd'";

    $result = $conn->query($q);
    $count = $result->num_rows; 

    if ($count == 1) {
        $_SESSION['ticket'] = $us;
        header("Location:homepage.php");
    } else {
        header("Location:index.php");
    }
}

if (isset($_POST['edit'])) {
    $nam = $_POST['nam'];
    $em = $_POST['em'];
    $gen = $_POST['gen'];
    $dept = $_POST['dept'];
    $pos = $_POST['pos'];
    $addr = $_POST['addr'];
    $ph = $_POST['ph'];
    $id = $_POST['id'];

    $sql = "UPDATE tbl_add SET nam='$nam', em='$em', gen='$gen', dept='$dept', pos='$pos', addr='$addr', ph='$ph' where id='$id'";
    $conn->query($sql);

    header('Location:homepage.php');
}

if (isset($_POST['add_employee'])) {

    $nam = $_POST['nam'];
    $em = $_POST['em'];
    $addr = $_POST['addr'];
    $gen = $_POST['gen'];
    $dept = $_POST['dept'];
    $pos = $_POST['pos'];
    $ph = $_POST['ph'];

    $q = "INSERT INTO tbl_add (id, nam, em, addr, gen, dept, pos, ph) 
    VALUES (Null, '$nam', '$em', '$addr', '$gen', '$dept', '$pos', '$ph')";
    echo $q;
    $conn->query($q);
    header('Location:homepage.php');
}
