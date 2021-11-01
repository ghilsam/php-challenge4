<?php

  $stevensonMovies = [
    'la planéte au trésor' => ['Joseph Gordon-Levitt', 'Emma Thompson', 'Brian Murray'],
    'Antoinette dans les Cévennes' => ['Laure calamy', 'OLivia Côte', 'Benjamin Lavernhe'],
    'Kidnapped' => ['Michael Caine', 'Jack Hawkins', 'Trevor Howard']
];
//print_r($svensonMovies);
foreach ($stevensonMovies as $movieTitle => $actor)
{
    echo 'Dans le film '. $movieTitle . 'les acteurs principaux sont : ';
    
    foreach ($actor as $actor) {
        echo $actor. '<br>';
        
    };
}


  ?>
