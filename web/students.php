<?php
$conn = mysqli_connect("localhost", "root", "", "University");
if(!$conn){
    die("Connection failed!");
}
$sql ="SELECT * from Student";
$result = $conn->query($sql);
?>
<table border="1"><tr>
    
    <th>id</th>
    <th>Name</th>
    <th>Email</th></tr>

<?php    
    
    while($row=$result->fetch_assoc()){ ?>
<tr>
<td> <?php echo $row["ID"]?></td>
    <td> <?php echo $row["Name"]?></td>
    <td> <?php echo $row["Email"]?></td>
</tr>
    <?php }

//else{
//    echo "no data";
//}





?>
        </table>