<?php include 'db.php'?>

<html>
<head>
    <title>view</title>
</head>
<body>

<table border="bordered">
<thead>
    <th> NAME</th>
    <th> EMAIL</th>
    <th> PHONE</th>
</thead>
<tbody>
<?php
$sql="select * from items";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['phone']."</td>";


echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a></td>";

echo"</tr>";
}

mysqli_close($conn);

?>

    <tbody>

    <table>
        <a href="insert.php">create new item</a>
</body>


</html>