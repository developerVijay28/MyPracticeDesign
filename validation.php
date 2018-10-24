<?php  include("bootstrap.php"); ?>


<?php
if(isset($_POST["submit"])){
$number=numberValidation();
$type=typeValidation();
if($number==true){
  numberValidation();
}else {
  typeValidation();
}

}
 function numberValidation(){
   $em=$_POST["email"];
 $pass=$_POST["password"];
 $un=$_POST["myName"];

$nullType=$un=$em=$pass;
 if(!$nullType==null){
   echo "<div class='alert alert-success' role='alert'>your name is $em and your password is
   $pass and username is $un</div>";
 }
  else{
 echo "<div class='alert alert-warning' role='alert'> please fill the your email and password </div>";
 }
 }
 function typeValidation(){
   $em=$_POST["email"];
 $pass=$_POST["password"];
 $un=$_POST["myName"];
 if($em<5){
   echo "<div class='alert alert-primary' role='alert'>userename cant be less than 5 character</div>";
 }elseif ($em>10) {
   echo "<div class='alert alert-primary' role='alert'>userename cant be greater than 10 character</div>";
 }
 }
 ?>
