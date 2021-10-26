<?php
include("class/users.php");
$ques = new users;
$cat = $_POST['cat'];
$ques->ques_show($cat);
$_SESSION['cat']=$cat;
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset=UTF-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SGP || Rakesh</title>
	<link rel="stylesheet" href="bootstrap.min.css"><!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="style1.css"> <!-- Stylesheet -->
	<link rel="shortcut icon" type="image/icon" href="images/favicon.jpg"> <!-- Favicon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Font awesome icons -->

	<!-- countdown script -->
	<script type="text/javascript">
	function timeout()
	{
		var minute = Math.floor(timeLeft/60);
		var second = timeLeft%60;
		var mint = checktime(minute);
		var sec = checktime(second);
		if (timeLeft<=0) {
			clearTimeout(tm);
			document.getElementById("form1").submit();
		} else {
			document.getElementById("time").innerHTML="<b>Time Out = </b>00 : "+mint+" : "+sec;
		}
		timeLeft--;
		var tm = setTimeout(function(){timeout()},1000);
	}
	function checktime(msg)
	{
		if(msg<10)
		{
			msg="0"+msg;
		}
		return msg;
	}
	</script>
	<!-- end of script -->
	
</head>
<body onload="timeout()">
	<div class="container">
		<div> <!-- Start Header -->
		<img class="img-fluid" href="ques_show.php" src="images/L_45933.gif" alt="Siliguri govt polytechnic">
		<h1 class="text-center" style="font-family:audrey;">SILIGURI GOVERNMENT POLYTECHNIC<br><small style="color:darkblue;">Rakesh quiz world</small></h1><hr>
		</div> <!-- Ending Header -->
		<div class="row">
			<div class="col-lg-8">
				<div class="card"> <!-- Start Questions Panel -->
    				<div class="card-body">

    					<form action="answer.php" id="form1" method="post"><!-- Start form -->

              <?php 
              $i = 1; foreach($ques->ques as $qust) { ?> <!-- Loop for show questions -->

      					<h2 class="card-title"><?php echo $i.".&nbsp;"; ?><?php echo $qust['question']; ?></h2><br>
      					<!-- show question -->

      				<?php if(isset($qust['ans1'])) { ?>
      					<label class="container"><?php echo $qust['ans1']; ?> <!-- show answers1 -->
  							<input type="radio" value="0" name="<?php echo $qust['id']; ?>">
 						 	<span class="checkmark"></span>   
						</label>
					<?php } ?>
					<?php if(isset($qust['ans2'])) { ?>
						<label class="container"><?php echo $qust['ans2']; ?> <!-- show answers2 -->
  							<input type="radio" value="1" name="<?php echo $qust['id']; ?>">
 					 		<span class="checkmark"></span>
						</label>
					<?php } ?>
					<?php if(isset($qust['ans3'])) { ?>
						<label class="container"><?php echo $qust['ans3']; ?> <!-- show answers3 -->
  							<input type="radio" value="2" name="<?php echo $qust['id']; ?>">
  							<span class="checkmark"></span>
						</label>
					<?php } ?>
					<?php if(isset($qust['ans4'])) { ?>
						<label class="container"><?php echo $qust['ans4']; ?> <!-- show answers4 -->
  							<input type="radio" value="3" name="<?php echo $qust['id']; ?>">
  							<span class="checkmark"></span>
						</label>
					<?php } ?>

						<label class="container">
  							<input type="radio" checked="checked" value="4" name="<?php echo $qust['id']; ?>" style="display:none">
						</label>

			  <?php $i++; } ?> <!-- End of loop -->
              <!-- End Questions Panel -->

      			<!-- Button -->
						<center><a href="home.php" class="btn btn-success"><i class="fa fa-close"></i> Close</a>&emsp;&emsp;
						<!-- <a href="#" class="btn btn-success"><i class="fa fa-forward"></i> Next</a></center> -->
						
                <!-- end Button -->
   					 </div>
  				</div>
			</div>
			<div class="col-lg-4"> <!-- Start Selection panel -->

				<!-- countdown section -->
				<script type="text/javascript">
					var timeLeft = 480; //Time	

				</script>
				<div id="time" style="color:darkblue;"><b>Time Out</b></div><span style="color:darkblue;"><b>Full Marks = 20</b></span><hr> <!-- Show coundown -->
				<!-- end of coundown -->
				 <!-- <div class="btn-group">
    				<button type="button" class="btn btn-lg btn-light">01</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">02</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">03</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">04</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">05</button>&nbsp;&nbsp;
    			</div>
				<br><br>
    			<div class="btn-group">
    				<button type="button" class="btn btn-lg btn-light">06</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">07</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">08</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">09</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">10</button>&nbsp;&nbsp;
    			</div>
    			<br><br>
    			<div class="btn-group">
    				<button type="button" class="btn btn-lg btn-light">11</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">12</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">13</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">14</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">15</button>&nbsp;&nbsp;
    			</div>
    			<br><br>
    			<div class="btn-group">
    				<button type="button" class="btn btn-lg btn-light">16</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">17</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">18</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">19</button>&nbsp;&nbsp;
    				<button type="button" class="btn btn-lg btn-light">20</button>&nbsp;&nbsp;
  				</div>--> <!-- End Selection panel -->
				  <!-- <br><br>  -->
				  <center><input type="submit"><a href="answer.php" class="btn btn-success"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit </a></center>
  				<!-- Submit -->
  				</form>
  				 <!-- End of form -->
			</div>
		</div>
	</div>
</body>
</html>