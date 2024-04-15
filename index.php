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

$parkFilter = $_GET["parking"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form action="" method="get">
        <span>Filtra per parcheggio:</span>
        <select name="parking" id="">
            <option value="yes">si</option>
            <option value="no">no</option>
        </select>
        <button type="submit">Cerca</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>

        <tbody>



            <?php if ($parkFilter == "no"): ?>
                <?php foreach ($hotels as $hotel): ?>
                    <tr>
                        <td scope="col"><?= $hotel['name'] ?></td>
                        <td scope="col"><?= $hotel['description'] ?></td>
                        <td scope="col"><?= $isParking = $hotel['parking'] == true ? 'si' : 'no' ?></td>
                        <td scope="col"><?= $hotel['vote'] ?></td>
                        <td scope="col"><?= $hotel['distance_to_center'] ?> Km</td>

                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>



            <?php if ($parkFilter == "yes"): ?>
                <?php foreach ($hotels as $hotel): ?>
                    <?php if ($hotel['parking'] == true): ?>
                        <tr>
                            <td scope="col"><?= $hotel['name'] ?></td>
                            <td scope="col"><?= $hotel['description'] ?></td>
                            <td scope="col"><?= $isParking = $hotel['parking'] == true ? 'si' : 'no' ?></td>
                            <td scope="col"><?= $hotel['vote'] ?></td>
                            <td scope="col"><?= $hotel['distance_to_center'] ?> Km</td>

                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>




        </tbody>
    </table>

</body>
</html>