<?php
include 'includes/connection.php';
$select="SELECT * FROM history";
$select_query=mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Sparks Bank</title>
</head>

<body style="background-color : #FFFFAA;">

<?php
include 'includes/header.php';
?>
<div class="container" >

<div class="row">
<h2 class="text-center" style="margin-top: 100px;"><b>Transaction History</b></h2>

<br>

<div class="col-md-offset-2 col-md-8" >
	
<table class="table table-hover" >

<thead>

<tr>
<th>ID</th>
<th>Sender</th>
<th>Receiver</th>
<th>Amount</th>
<th>Date & Time</th>
</tr>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_assoc($select_query)){
?>
<tr>
<td ><?php echo $row['sid'] ?></td>
<td ><?php echo $row['sender']?></td>
<td ><?php echo $row['receiver']?></td>
<td ><?php echo $row['amount']?></td>
<td ><?php echo $row['date&time']?></td>
</tr>

<?php
}
?>


</tbody>
</table>
</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>

</html>
