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
    <form class=" container py-5 d-flex w-75" method="GET" action="./index.php">
        <label for="isParkingAllowed" class="form-label me-2">Check if the parking is avabile :</label>
        <input type="text" class="form-control w-50 me-2" name="isParkingAllowed" id="isParkingAllowed">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">vote</th>
                <th scope="col">distance_to_center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel) { ?>
                <tr>   
                <td scope="row"><?php echo $hotel["name"] ?></td>
                <td scope="row"><?php echo $hotel["description"] ?></td>
                <td scope="row"><?php echo $hotel["vote"] ?></td>
                <td scope="row"><?php echo $hotel["distance_to_center"] ?></td>
                <?php  }  ?>
                </tr>
            </tbody>
        </table> 
    </div>   
</body>
</html>