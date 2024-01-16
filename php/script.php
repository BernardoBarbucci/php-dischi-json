<!-- back-end for api -->
<?php

$albums = [
    [
        "titolo" => "The Dark Side of the Moon",
        "autore" => "Pink Floyd",
        "dataUscita" => "01 marzo 1973"
    ],
    [
        "titolo" => "Abbey Road",
        "autore" => "The Beatles",
        "dataUscita" => "26 settembre 1969"
    ],
    [
        "titolo" => "Sticky Fingers",
        "autore" => "The Rolling Stones",
        "dataUscita" => "23 aprile 1971"
    ],
    [
        "titolo" => "Metallica",
        "autore" => "Metallica",
        "dataUscita" => "12 agosto 1991"
    ],
    [
        "titolo" => "Hybrid Theory",
        "autore" => "Linkin Park",
        "dataUscita" => "24 ottobre 2000"
    ],
    [
        "titolo" => "The Colour and the Shape",
        "autore" => "Foo Fighters",
        "dataUscita" => "20 maggio 1997"
    ],
    [
        "titolo" => "Let It Be",
        "autore" => "The Beatles",
        "dataUscita" => "08 maggio 1970"
    ],
    [
        "titolo" => "Rumours",
        "autore" => "Fleetwood Mac",
        "dataUscita" => "04 febbraio 1977"
    ],
    [
        "titolo" => "Master of Puppets",
        "autore" => "Metallica",
        "dataUscita" => "03 marzo 1986"
    ],
    [
        "titolo" => "Meteora",
        "autore" => "Linkin Park",
        "dataUscita" => "25 marzo 2003"
    ],
    [
        "titolo" => "The Wall",
        "autore" => "Pink Floyd",
        "dataUscita" => "30 novembre 1979"
    ],
    [
        "titolo" => "Wasting Light",
        "autore" => "Foo Fighters",
        "dataUscita" => "11 aprile 2011"
    ]
];

// Percorso del file JSON
$jsonFilePath = 'albums.json';

// Converte l'array in formato JSON e lo scrive nel file
file_put_contents($jsonFilePath, json_encode($albums, JSON_PRETTY_PRINT));

// Restituisci l'array come risposta alla richiesta
header('Content-Type: application/json');
echo json_encode($albums, JSON_PRETTY_PRINT);

?>