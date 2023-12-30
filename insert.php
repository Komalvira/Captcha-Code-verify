<?php
session_start();
$con=mysqli_connect("localhost","root","vertrigo");
$db=mysqli_select_db($con,"captcha");


if($_SESSION['CODE']==$_POST['captcha']){
    $sql="insert into contact(name,email,message) values('$_POST[name]','$_POST[email]','$_POST[message]')";
     $rs=mysqli_query($con,$sql);
     if($rs){

    header('location:index.php?msg=Record is Inserted..');
     }
     else{
        header('location:index.php?msg=Something went wrong...');
    }
}
else{
    header('location:index.php?msg=Invalid captcha code..Prove your a human');

}  

?>