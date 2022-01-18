<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $("#exampleInputPassword1").prop("type", "hidden");
    $("#exampleInputPassword2").prop("type", "text");
    $("#amount-txt").hide();
    $("#grams-txt").show();


  $("#rupees").click(function(){
    $("#exampleInputPassword1").prop("type", "text");
    $("#exampleInputPassword2").prop("type", "hidden");
    $("#grams-txt").hide();
    $("#amount-txt").show();
  });
    $("#grams").click(function(){
    $("#exampleInputPassword1").prop("type", "hidden");
    $("#exampleInputPassword2").prop("type", "text");
    $("#amount-txt").hide();
    $("#grams-txt").show();
  });
});
</script>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Buy Gold</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<form class="container" method="post" action="{{url('buy')}}">
@csrf
  <div class="col-sm-6">
	<div class="form-check">
  <input class="form-check-input" id="rupees" type="radio" name="radiobutton" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Buy in rupees
  </label>
</div>
  </div>
  <div class="col-sm-6">
<div class="form-check">
  <input class="form-check-input" id="grams" type="radio" value="" name="radiobutton"  id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Buy in grams
  </label>
</div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" id="amount-txt">Amount</label>
    <input type="password" class="form-control" name="amount" id="exampleInputPassword1" placeholder="enter amount">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1" id="grams-txt">Grams</label>
    <input type="password" class="form-control" name="grams" id="exampleInputPassword2" placeholder="enter grams" value="0">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
