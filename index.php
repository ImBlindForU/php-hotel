<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


        <?php for($i = 0; $i < count($hotels); $i++){
            $cur_hotel = $hotels[$i];
                ?>
         <?php } ?>


        <table class="table">
            <thead>
                <tr>
                    <?php foreach($cur_hotel as $key => $hotel){
                        echo "<th scope ='col'>" . $key . "</th>";
                    } ?>
                </tr>
            </thead>
            <tbody>
                    <?php
                    for($i = 0; $i < count($hotels); $i++){
                        $cur_hotel = $hotels[$i];
                ?>
                <tr>
                    <?php foreach($cur_hotel as $key => $hotel){
                            echo "<td scope ='col'>" . $hotel . "</td>";
                        } ?>
                </tr>

            <?php } ?>

            </tbody>
        </table>

        

</body>
</html>