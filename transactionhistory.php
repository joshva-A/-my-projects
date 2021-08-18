<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4C4B4B;
  color: white;
}
.noselect {
  -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
		-webkit-tap-highlight-color: transparent;
}

button {
	width: 150px;
	height: 50px;
	cursor: pointer;
	font-size: 20px;
	font-weight: bold;
	color: black;
	background: white;
	border: 2px solid black;
	box-shadow: 5px 5px 0 black,
		-5px -5px 0 black,
		-5px 5px 0 black,
		5px -5px 0 black;
	transition: 500ms ease-in-out;
}

button:hover {
	box-shadow: 20px 5px 0 black, -20px -5px 0 black;
}

button:focus {
	outline: none;
}
body {
  margin:25px;
  background:-webkit-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
  background:-moz-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* FF3.6+ */
  background:-ms-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* IE10 */
  background:-o-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* Opera 11.10+ */
  background:linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* W3C */ 
}
</style>
</head>

<body>



	<div class="container">
        <h2 class="text-center pt-4">Payment History Statement</h2>
        <br>


       <br>
       <div class="table-responsive-sm">
    <table  id="customers">
        <thead>
            <tr>
                <th class="text-center">Account Id.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>

        <?php
            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>
        <div>
        <a href="index.php"><button class = noselect>Back</button></a>
        </div>
    </div>
</div>

</body>
</html>
