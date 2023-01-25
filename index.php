<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hotel</title>

    <!--CSS-->
    <link rel="stylesheet" href="./styles/style.css">

</head>
<body>
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

    <header>
        <h1 class="text-center">
            Hotels
        </h1>

        <hr>
    </header>
    <main>
        <!-- 
            $hotels = 
            [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ]
        -->
              
        <!-- Stampare tutti i nostri hotel con tutti i dati disponibili. -->

        <section>
            <h2 class="text-center">
                Hotel disponibili: 
            </h2>

            <?php 
                foreach ($hotels as $hotel) {
                    echo "<article>";
                    foreach ($hotel as $key => $singleHotel) {
                        echo "<p> " . "<strong>". $key . "</strong>" . ": " . $singleHotel . "</p>";
                    }
                    echo "</article>";
                    echo "<hr>";
                  }
            ?>
        </section>
    </main>
</body>
</html>