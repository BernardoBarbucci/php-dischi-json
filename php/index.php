<!-- front-end file -->
<?php
// Percorso del file JSON
$jsonFilePath = '../json/albums.json';

$jsonData = file_get_contents($jsonFilePath);

// Decodifica il JSON in un array
$albums = json_decode($jsonData, true);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi json</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
    main {
        height: 100vh;
        background: linear-gradient(180deg, #360568, #5b2a86);
        color: white;
    }

    .custom_album {
        height: 13rem;
        width: 11rem;
        border: 2px solid #e53f71;
        background-color: #f89f5b;
        border-radius: 10px;
        color: black;
    }

    p:last-child {
        font-size: .75rem;
    }
    </style>
</head>

<body>

    <div id="app">
        <main class="container-fluid">
            <section class="col-8 offset-2 d-flex justify-content-center flex-column">
                <h1 class="pt-2 mb-5">
                    Dischi json
                </h1>
                <section class="col-12">
                    <div class="container-fluid d-flex flex-wrap">
                        <div v-for="album in albums"
                            class="custom_album m-2 text-center d-flex flex-column justify-content-around">
                            <h1 class="fs-4">
                                {{ album.titolo }}
                            </h1>
                            <p>Author: {{ album.autore }}</p>
                            <p>Release date: {{ album.dataUscita }}</p>
                        </div>
                    </div>
                </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>