<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>



<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>

        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table id = "customers">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Account ID</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button class = button>Send</button></a></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    <div>
                    <a href="index.php"><button class = button>Back</button></a>
                     </div>
                    </div>
                </div>
            </div> 
         </div>

</body>
</html>
