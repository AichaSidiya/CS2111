<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="StyleSheet" href="CSS/stylesheet.css" />
	<script type="text/javascript" src="JavaScript/gold.js"></script>
    <title>Transactions</title>
  </head>
  <body style="background-color: #fff77a">
    <header>
      <img width="100%" height="200px" src="images/banner_header.png" />
    </header>

    <nav>
    <a href="index.php" class="selected"><span>Home</span></a>
    <a href="viewtransactions.php" class="header"><span> Transactions</span></a>
    </nav>

    <section>
      
	            <div class="container-fluid">
                    <h3 class="mt-4">List of Transactions</h3>
                    <p>These transactions are retrieved from MyGold system. The list is renewed automatically.</p>
                 <?php
					include('databaseConnection.php');
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);
					
					$sql = "select * from transaction";
					$result = mysqli_query($connection,$sql);
					
					echo "<table class='table table-striped'>";
					echo "<tr> <th> Order ID </th> <th> Gold Amount </th> <th> Silver Amount </th> <th> Customer Name </th> <th> Customer Phone </th> </tr>";
					
					while( $row = mysqli_fetch_assoc($result) )
					{
						echo "<tr>";
						echo "<td>".$row['ID']."</td>";
						echo "<td>".$row['gold']."</td>";
						echo "<td>".$row['silver']."</td>";
						echo "<td>".$row['customerName']."</td>";
						echo "<td>".$row['customerPhone']."</td>";
						echo "</tr>";
						
					}
					
					echo "</table>";
					
				 
				 ?>
                </div>
	  
    </section>

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