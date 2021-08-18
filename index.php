<!Doctype html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
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

div.polaroid {
  width: 75%;
  height: 79%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}
div.polaroid1 {
  width: 90%;
  height: 78%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}
.container {
  position: relative;
  width: 50%;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 101%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #DD2476;
}
.overlay1 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 106%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #00aaee;
}

.container:hover .overlay {
  opacity: 1;
}
.container:hover .overlay1 {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
img.animated-gif{
  width: 120px;
  height: auto;

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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


      <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Banking System</title>
  </head>

  <body>


      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                <h3>Welcome to</h3><img class="animated-gif" src="img/globe1.gif"/>
                  <h1>WORLD BANK</h1>


                </div>
              </div>

            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                  <div class="polaroid">
                  <div class="container">
                  <img src="img/transfer.jpg"  height = "60%" width = "64%">
                   <div class="overlay">
                   <div class="text">Make your First transaction with World bank</div>
                  </div>
                  </div>
                  <br>
                  <a href="transfermoney.php"><button class = noselect>New payment</button></a>
                  </div>
                  </div>



                  <div class="col-md act">
                  <div class="polaroid1">
                  <div class="container">
                  <img src="img/history.jpg" width = "72%" height = "65%">
                  <div class="overlay1">
                   <div class="text">See your transaction history</div>
                  </div>
                  </div>
                  <br>
                  <br>
                  <a href="transactionhistory.php"><button class = noselect>Payment History</button></a>
                  </div>

                  </div>
            </div>
      </div>

  </body>

  </body>
</html>