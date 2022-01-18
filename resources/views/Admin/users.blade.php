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
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($users as $user)    
    <tr>
      <th>{{$user->name}}</th>
      <td>{{$user->email}}</td>
      <td>{{$user->number}}</td>
      <td>{{$user->password}}</td>
      <td><a href="user-info/{{$user->id}}" class="btn btn-primary">Info</a></td>
    </tr>
@endforeach    
  </tbody>
</table>
</body>
</html>