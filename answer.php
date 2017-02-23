<?php
include("class/users.php");
$ans= new users;
$answer=$ans->answer($_POST);
//print_r($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>

	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <center><h2>Your Quiz Result</h2></center><br>                       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total no of questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted questions</td>
        <td><?php echo $attempt_qus; ?></td>
      </tr>
      <tr>
        <td>Right answer</td>
        <td><?php echo $answer['right']; ?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
      <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
      <tr>
        <td>Your Result</td>
        <td><?php 
        $per= ($answer['right']*100)/($total_qus);
        echo $per."%";
        ?></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-sm-2"></div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>