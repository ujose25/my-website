<?php include "db.php"?>
<?php
//update
if(isset ($_POST['update'])){
 $id=$_POST['id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];   
$sql="update items set name='$name',email='$email',phone='$phone' where id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:view.php");
}
}
//edit
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from items where id='$id'";
    $result=mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($result);
}

?>
<html><head>updae</head>
<body>

    <form method='post' action="update.php">
    <h3>update FORM</h3>
    <input type="hidden" name="id" value="<?php echo $row ['id'];?>"><br><br>
    <input type="text" placeholder="name" name="name" value="<?php echo $row['name'];?>"><br><br>
    <input type="text" placeholder='email' name="email" value="<?php echo $row['email'];?>"><br><br>
    <input type="text" placeholder='phone' name="phone" value="<?php echo $row ['phone'];?>"><br><br>
    <input type='submit'value="UPDATE" name="update">
    </form>
</body></html>