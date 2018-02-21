<?php
//Step1
 /*$db = mysqli_connect('localhost','root','','shop')
 or die('Error connecting to MySQL server.');
 $sql = "SELECT * from product";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  '.base64_encode($row["image"])';
    }
} else {
    echo "0 results";
}
$db->close();*/
$db = mysqli_connect("localhost","root","","shop"); //keep your db name
$sql = "SELECT * FROM product where size='s'";
$sth = $db->query($sql);
$result=mysqli_fetch_assoc($sth);
/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
    }
}*/
?>
