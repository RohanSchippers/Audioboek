<?php


function initialiseerHoofdstuk(): array // Functie voor het laten zien van gegevens per hoofdstuk, uiteindelijk d.m.v. database
{

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=audioboek;charset=utf8mb4',
            'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
       /* if ($pdo) {
            echo "Connected to the audioboek database successfully!";
        }*/
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


    $query = "SELECT * FROM hoofdstukken";
    $collectie = $pdo->query($query);
    $hoofdstukken = $collectie->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;

    return $hoofdstukken;
}

function getHoofdstuk($index)
{
    $hfd = initialiseerHoofdstuk();

    if ($index < 0) {
        $index = 0;
    }
    return $hfd[$index];
}



