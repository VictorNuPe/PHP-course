<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


echo $_SERVER['REQUEST_METHOD'] . '<br>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    $statement =  $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                             VALUES(:title, :image, :description, :price, :date)
                            ");

    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', '');
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);
    $statement->execute();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="app.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Products Crud</title>
  </head>
  <body>
    <h1>Create new product</h1>

    <form action="" method="post">
        <div class="form-group">
          <label>Product Image</label>
          <br>
          <input type="file" name="image">
        </div>

        <div class="form-group">
          <label>Product Title</label>
          <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
          <label>Product Description</label>
          <input class="form-control" name="description">
        </div>
        <div class="form-group">
          <label>Product Price</label>
          <input type="number" step=".01" name="price" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</table>

  </body>
</html>
