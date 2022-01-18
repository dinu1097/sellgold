<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="{{url('register-user')}}" method="post">
  @csrf
  <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="name" placeholder="enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Enter Email</label>
      <input type="email" class="form-control" id="email" placeholder="enter email" name="email">
    </div>
    <div class="form-group">
      <label for="email">Number</label>
      <input type="number" class="form-control" id="number" placeholder="enter number" name="number">
    </div>
    <div class="form-group">
      <label for="email">Password</label>
      <input type="password" class="form-control" id="password" placeholder="enter password" name="password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
