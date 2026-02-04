<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Alessio', 'surname' => 'Bevilacqua', 'gender' => 'M'],
  ['name' => 'Chiara', 'surname' => 'Bianchi', 'gender' => 'F']
];

foreach ($users as $user){
    if($user['gender'] == 'M'){
        echo "Buongiorno Sig. {$user['name']} {$user['surname']}\n";
    }elseif($user['gender'] == 'F'){
        echo "Buongiorno Sig.ra {$user['name']} {$user['surname']}\n";
    }elseif($user['gender'] == 'NB'){
         echo "Buongiorno {$user['name']} {$user['surname']}\n";
    }
}