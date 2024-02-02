


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table-auto">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>stock</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $product) : ?>
    <tr>
      <td><?php echo $product->getId(); ?></td>
      <td><?php echo $product->getName(); ?></td>
      <td><?php echo $product->getPrice(); ?></td>
      <td><?php echo $product->getStock(); ?></td>
      <td><?php echo $product->getType(); ?></td>
      <td><a href="index.php?action=addtocard&id=<?php echo $product->getId(); ?>">add to cart</a></td>
    </tr>
    <?php endforeach ;?>
  </tbody>
</table>
</body>
</html>