<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

@if ($_SERVER['REQUEST_URI'] === '/insert')
<div class="container">
  <h2 class="text-center">Products Management | Add</h2>
  <br>
  <form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">Name:</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
    <label>Price:</label>
    <input type="text" class="form-control" placeholder="Price" name="price">
  <label>Body:</label>
    <input type="text" class="form-control" placeholder="Enter Body" name="body"><br>
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  </form>
</div>

@else
<div class="container">
  <h2 class="text-center">Products Management | Edit</h2>
  <br>
  <form action="{{ route('products.edit',['id' => $product[0]->id]) }}" method = "POST" class="form-group" style="width:70%; margin-left:15%;">
  @csrf
  @method('PATCH')

    <label class="form-group">Name:</label>
    <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $product[0]->name ?>">
    <label>Price:</label>
    <input type="text" class="form-control" placeholder="Price" name="price" value="<?php echo $product[0]->price ?>">
  <label>Body:</label>
    <input type="text" class="form-control" placeholder="Enter Body" name="body" value="<?php echo $product[0]->body ?>">
    <br>
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  </form>
</div>

@endif

</body>
</html>