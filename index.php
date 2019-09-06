<!DOCTYPE html>
<html lang="en">
<head>

  <title>Home</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/home.css">
  <script src = "js/home.js"></script>

</head>

<body class="container" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"  class="shortPage">

<nav class="navbar navbar-default navbar-fixed-top navbar navbar-dark bg-dark">
<div class="container">
  <div class="navbar-header">
    <h1><b><font color="red">BOOK'sZONE</font></b1></h1>
      <p>The kingdom of books, the kingdom of knowledge</p>
  </div>

  <div class="collapse navbar-collapse" style="margin-top:50px;margin-left:600px;">
    <form class="form-inline my-2 my-lg-0">
      <span class="input-group-text" id="basic-addon1"></span>
      <input size="50" class="form-control mr-sm-2" type="search" placeholder="Search your books here..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="home.html"><img src="" alt="BOOKSHOP"/></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><font color="" size="4.5">HOME</font></a></li>
        <li><a href ="exm.php"><font color="green" size="4.5">PUBLISHER</font></a></li>
        <li><a href="Category.php"><font color="orange" size="4.5">CATEGORY</font></a></li>
        <li><a href="bestSellerBooks.html"><font color="red">BEST SELLER BOOKS</font></a></li>
        <li><a href ="" ><font color="blue" size="4.5">MY CART</font></a></li>
        <li><a href="login.php"><font color="" size="4.5">LOG IN</font></a></li>
        <li><a href="signUp.html"><font color="orange" size="4.5">SIGN UP</font></a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron text-center">
<div class="container">
      <br><br><br>
      <div class="container" id="main">
      <p class="lead text-center text-muted"><h2>LATEST BOOKS</h2></p>
      <div class="row">

        <div class="col-md-3">
          <img class="img-responsive img-thumbnail" src="images/img1.jpg">
        </div>

      	<div class="col-md-3">
          <img class="img-responsive img-thumbnail" src="images/img2.jpg">
        </div>

        <div class="col-md-3">
          <img class="img-responsive img-thumbnail" src="images/img7.jpg">
        </div>

        <div class="col-md-3">
          <img class="img-responsive img-thumbnail" src="images/img6.jpg">
        </div>

      </div>
      	<hr>

</div>
</div>





  <!-- Container (login Section) -->

<div style="background-image: url('images/ourbackground.jpg'); background-size: cover; background-repeat:no-repeat;fixed">

<form action = "login.php" method = "post">
<div id="login" class="container-fluid" >
  <div class="row" >
        <div class="col-sm-2 form-group">
			<div class="row">
			  <h2 class="text-center">Login</h2>
			</div>
			<div class="row">
			  <input class="form-control" id="username" name="username" placeholder="username" type="text" required>
			</div></br>
            <div class="row">
			  <input class="form-control" id="password" name="password" placeholder="password" type="password" required>
			</div>
        </div>
		<div class = "col-sm-8" style="padding-left:60px">
		  <h4><strong>MISSION:</strong>
        <ul>
          <li> To sell the books in low price an increasingly competitive market</li>
					<li>To maintain an efficient and technologically </li>
				</ul>
      </h4>
		</div>

      </div>
      <div class="row">
        <div class="col-sm-2 form-group">
          <button class="btn btn-default pull-right" type="submit">Log In</button>
        </div>
      </div>
    </div>
</form>


<footer class="container-fluid text-center">
    <br><br>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p> </p>
</footer>


</div>
</body>
</html>
