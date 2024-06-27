<?php   include_once __DIR__ . "/utilities/hotelsList.php";   

$parking = isset($_GET['parking']) ? $_GET['parking'] : '';

$vote = isset($_GET['hotelVote']) ? $_GET['hotelVote'] : '';




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
    <form class=" container py-5" method="GET" action="./index.php">
        <!-- input for filtering the parking -->
        <section class="flex align-items-center mb-2">
                <h1>Parking is Allowed?</h1>
                <input class="form-check-input" type="radio" name="parking" id="parkIsAllowed" value="true">
                <label class="form-check-label" for="parkIsAllowed">
                    Yes
                </label>
                <input class="form-check-input" type="radio" name="parking" id="parkIsNotAllowed" value="false">
                <label class="form-check-label" for="parkIsNotAllowed">
                    No
                </label>
        </section>
        <!-- input for filtering by vote -->
        <div class="d-flex ">
            <label for="hotelVote" class="form-label me-2 w-25">Find the hotel at this vote (1-5):</label>
            <input type="number" class="form-control  me-2" name="hotelVote" id="hotelVote" min="1" max="5">
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance_to_center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel) { ?>
                    <?php if (($parking === '' || $hotel['parking'] == ($parking === 'true'))  && ($vote === '' || $hotel['vote'] >= $vote)) { ?>
                <tr>   
                <td> <?php echo $hotel['name']; ?> </td>
                            <td> <?php echo $hotel['description']; ?> </td>
                            <td ><?php if ($hotel['parking'] === false) { 
                                    echo 'Not Allowed';
                                } else { 
                                    echo 'Allowed';
                                }; 
                            ?></td>
                            <td ><?php echo $hotel['vote']; ?> stars</td>
                            <td ><?php echo $hotel['distance_to_center'] ?> km</td>
                <?php  }  ?>
                </tr>
                <?php  }  ?>
            </tbody>
        </table> 
    </div>   
</body>
</html>