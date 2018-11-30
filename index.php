<?php

// Načti datumy ze souboru
$dates_input = json_decode(file_get_contents(__DIR__ . '/dates.json'));

$dates_output = [];

foreach ($dates_input as $date) {
    // Zde převeď $date z formátu ISO-8601 do formátu ANSI (tedy jako SQL známé: Y-m-d H:i:s)
    //$date = ...

    //Přidej do pole $date_output
    $dates_output[] = $date;
}

//Ulož datumy do JSONu
file_put_contents(__DIR__ . '/dates-vystup.json', json_encode($dates_output, JSON_PRETTY_PRINT));