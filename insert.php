<?php include 'db.php'?>
<?php
if(isset($_POST['SAVE'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="insert into items(name, phone, email)values('$name', '$phone', '$email')";
$result=mysqli_query($conn,$sql);
header("location:view.php");


if(!$result){
    
    echo'unable to insert';
}

}

mysqli_close($conn);

?>


<html>
    <head>
<title> INSERT</title>
    </head>
    <body>
<form method='post' action="insert.php">
    <h3>REGISTRATION FORM</h3>
    <input type="text" placeholder="name" name="name"><br><br>
    <input type="text" placeholder='email' name="email"><br><br>
    <input type="text" placeholder='phone' name="phone"><br><br>
    <input type='submit'value="SEND" name="SAVE">
</form>
<a href=view.php>view</a>
    </body>

</html>