<?php
include 'connection.php';
$query="select * from rooms where rtype='double' and rstate='A'";
$result=mysqli_query($a,$query);
$z=mysqli_num_rows($result);
echo $z;
?>