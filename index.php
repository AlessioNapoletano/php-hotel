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

    <main>
        
        <section class="form">
            <h2>
                Inserisci i dati:
            </h2>

            <!-- 1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio. -->

            <form action="index.php" method="GET">
                <label for="parking">Parcheggio: </label>
                <input id="parking" type="text" name="parking">
                <button type="submit">Invia</button>
            </form>
        </section>
            
        
        <section>
            <h2 class="text-center">
                Hotel disponibili: 
            </h2>

            <?php 
                foreach ($hotels as $hotel) {
                    echo "<article>";
                    echo "<p> nome: " . $hotel['name'] . "</p>";
                    echo "<p> description: " . $hotel['description'] . "</p>";
                    echo "<p> parking: " . $hotel['parking'] . "</p>";
                    echo "<p> vote: " . $hotel['vote'] . "</p>";
                    echo "<p> distance_to_center: " . $hotel['distance_to_center'] . "</p>";
                    echo "</article>";
                    echo "<hr>";
                }
            ?>
        </section>
    </main>
</body>
</html>