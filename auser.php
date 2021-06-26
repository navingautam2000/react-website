<?php include 'aheader.php'?><br>
<div class="container">
 <div class="row">
 <div class="col-8">
   <form action="auser.php" method="POST">
  <label ><b>  Enter User Id : </b></label>
    <input type="text" placeholder="User Email" name="uid">
    <button class="btn btn-primary" name="search"> Search</button>
  <h2 class="m-3"><b>User Detail</b></h2>
</form>
   </div>
<div class="col-4">
</div>
 </div>
</div>
<?php 
if(isset($_POST['search']))
{
$uid=$_POST['uid'];
include 'connection.php';
$sql=mysqli_query($a,"select * from user where email='$uid'");
?>
<table  class="table table-bordered table-striped" cellpadding="7px">
<thead >
<th>uno</th>
<th>uname</th>
<th>phno</th>
<th>email</th>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_assoc($sql)){
?>
<tr>    
    <td><?php echo $row['uno']; ?></td>
    <td><?php echo $row['uname']; ?></td>
    <td><?php echo $row['phno']; ?></td>
    <td><?php echo $row['email']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } ?>
