<?php
session_start();
//session_start();

?>

<!DOCTYPE html>
<html>


<head>
<title>My Profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
   

</script>

<script>
  function back(){
    window.location="tm_prof.php";
  }
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#7a5230">
   <div class="first" style="background-image:url('subback.jpg'); background-repeat: no-repeat; background-position: center;  background-size: '20%';  padding-bottom: 50px;">
    <br>
    <div class="second" style="float:right"><button class="btn btn-primary" onclick="back()" type="button">Back</button></div>
    <br>
    <br><br>
    <span class="firstsub_a" style="float:center; " align="center">
      <h1 style="color: white; font-family: arial;font-size: 30px;margin-left: 57px;">Locam Teachers</h1>
    </span>
    <br>
    <br>
    <br><br>
  </div>
  <br><br><br><br>
  <form method="POST">
  <table align="center" cellpadding=20px style="background-color:#e5e5f2;" border="0" width="90%">
    <tr style="background-color:  #4c4c4c;" height="50px">
    <td width="5%"><b>Tmid</b></td>
      <td width="20%"><b>Employee Name</b></td>
      <td width="20%"><b>E-mail</b></td>
      <td width="15%"><b>Phone Number</b></td>
      <td width="15%"><b>Empid</b></td>
    </tr>  
    <?php
  include('connsp.php');
  $sq="select * from locam";
  $res = $connsp->query($sq);
  while($fe=$res->fetch_object())
  {
 
    ?>
    <tr  height="50px">
      <td><?php echo $fe->tmid;?></td>
      <td><?php echo $fe->user;?></td>
      <td><?php echo $fe->email;?></td>
      <td><?php echo $fe->phone_no;?></td>
      <td><?php echo $fe->empid;?></td>
     
    </tr>
    <?php
  
}
  ?>
    
  </table>
  <br><br>
  
</form>
  </body>

</html>
