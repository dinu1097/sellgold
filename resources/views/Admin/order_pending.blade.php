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
      <th scope="col">amount</th>
      <th scope="col">grams</th>
      <th scope="col">buysell</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $key => $order)
    <tr>
      <th scope="row">{{ $order->name }}</th>
      <th scope="row">{{ $order->amount }}</th>
      <td>{{ $order->grams }}</td>
      <td>{{ $order->buysell }}</td>
      <td>{{ $order->status }}</td>
      <td><a class="btn btn-danger" href="/delete-pending-orders/{{$order->order_id}}">Delete</a></td>
    </tr>
  @endforeach  
  </tbody>
</table>
</body>
</html>
