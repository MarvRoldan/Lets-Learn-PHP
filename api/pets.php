<?php
/**
 * This file is an API endpoint.
 * Scripts (front-end, or otherwise) can make requesto to this file and receive JSON response.
 * It is up to that script what is will do with that data!
 */
$pets = array(
    'Bear' => array(
        'age' => 4,
        'type' => 'cat',
        'tricks' => array(
            'fetch',
            'roll-over'
        )
    ),
    'Spike' => array(
        'age' => 16,
        'type' => 'fish',
        'tricks' => array(
            'swim through hoop',
            'float upside down'
        )
    ),
    'Bingo' => array(
        'age' => 12,
        'type' => 'dog',
        'tricks' => array(
            'land on all fours',
            'Finds all the food'
        )
    ),
    'Lucas' => array(
        'age' => 2,
        'type' => 'newt',
        'tricks' => array(
            'hold breath for 4 minutes',
            'climbing'
        )
    )
);

// Set headers to be more descriptive.
header( 'Content-Type: application/json' );

// Convert from PHP object/array, to a JSON string.
$petsJSON = json_encode( $pets );

//Send this back to whomeever (or whatever) made the request.
echo $petsJSON;
