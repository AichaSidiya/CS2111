<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="StyleSheet" href="CSS/stylesheet.css" />
	<script type="text/javascript" src="JavaScript/gold.js"></script>
    <title>Add Transaction</title>
  </head>
  <body style="background-color: #fff77a">
    <header>
      <img width="100%" height="200px" src="images/banner_header.png" />
    </header>

    <nav>
    <a href="index.php" class="selected"><span>Home</span></a>
      <a href="viewtransactions.php" class="header"><span> Transactions</span></a>
    </nav>
                <!-- Page content-->
                <div class="container-fluid">
					<?php
					$connection = mysqli_connect("localhost","root","","gold");
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);
					
					$gold = $_POST['quan1'];
					$silver = $_POST['quan2'];
					$name= $_POST['fullname'];
					$phone= $_POST['phone'];

					$sql = "insert into transaction(gold, silver, customerName, customerPhone) values(".$gold.", ".$silver.",'".$name."', '".$phone."')";
                    if( mysqli_query($connection,$sql) )
					{
						echo "<h4> The data has been saved. Thank you! </h4>";
					}
					else
					{
						echo "<h4> We could not save the data. Try again later! </h4>";
					}
					
				
					?>
				
                   
                <footer>
      <span>Home  |</span>
      <span>Pravicy  |</span>
      <span>Site map  |</span>
      <span>Links  </span>
      <span style="float: right" class="Copyright">Copyright 2021; all Rights Reserved.</span
      >
    </footer>
    <script src="/MyGold/JavaScript/goldfunctions.js"></script>
  </body>
</html>
