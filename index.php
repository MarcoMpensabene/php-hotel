<?php   include_once __DIR__ . "/utilities/hotelsList.php";   


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
<table class="table">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">parking</th>
        <th scope="col">vote</th>
        <th scope="col">distance_to_center</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($hotels as $hotel) { ?>
        <tr>   
        <td scope="row"><?php echo $hotel["name"] ?></td>
        <td scope="row"><?php echo $hotel["description"] ?></td>
        <td scope="row"><?php echo $hotel["parking"] ?></td>
        <td scope="row"><?php echo $hotel["vote"] ?></td>
        <td scope="row"><?php echo $hotel["distance_to_center"] ?></td>
        <?php  }  ?>
        </tr>
    </tbody>
</table>
</body>
</html>