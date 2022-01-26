<?php

    /*
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,'https://reqres.in/api/users/2');
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);

    if (curl_errno($ch)) echo curl_errno($ch);
    else $decoded = json_decode($response, true);
    var_dump($decoded);

    curl_close($ch);
    

    $ch = curl_init();

    $array = [
        'name' => 'Emilio',
        'Job' => 'Programer'

    ];
     
    $data = http_build_query($array);

    curl_setopt($ch, CURLOPT_URL,'https://reqres.in/api/users/2');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if(curl_errno($ch)) echo curl_errno($ch);
    else $decoded = json_decode($response, true);

    foreach($decoded as $index => $value) {
        echo "$index: $value <br>";
    }

    curl_close($ch);
    */
?>