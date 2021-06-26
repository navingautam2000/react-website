<?php include 'aheader.php';
session_start();
include 'connection.php';
if(isset($_SESSION['aname']))
{
}
else{
    header("Location: {$hostname}/Project/Home.html");
}
?>

<div class="main-content">
<h2 style="margin:10px; "><b>All Records</b></h2>
<?php 
include 'connection.php';
$sql=mysqli_query($a,"select * from user,rooms,booking where user.uno=booking.f_uno and rooms.rno=booking.f_rno");
?>
<table class="table table-bordered table-striped" cellpadding="7px">
<thead>
<tr>
<th>uno</th>
<th>uname</th>
<th>phno</th>
<th>email</th>
<th>rno</th>
<th>rtype</th>
<th>beds</th>
<th>amount</th>
<th>rstate</th>
<th>bid</th>
<th>bdate</th>
<th>cin_date</th>
<th>cout_date</th>
<th>total_amount</th>
</tr>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_assoc($sql)){
?>
<tr>    
    <td><?php echo $row['uno'];?></td>
    <td><?php echo $row['uname'];?></td>
    <td><?php echo $row['phno'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['rno']; ?></td>
    <td><?php echo $row['rtype'];?></td>
    <td><?php echo $row['beds'];?></td>
    <td><?php echo $row['amount'];?></td>
    <td><?php echo $row['rstate'];?></td>
    <td><?php echo $row['bid'];?></td>
    <td><?php echo $row['bdate'];?></td>
    <td><?php echo $row['cin_date'];?></td>
    <td><?php echo $row['cout_date'];?></td>
    <td><?php echo $row['total_amount'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>