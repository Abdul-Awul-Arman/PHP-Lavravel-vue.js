    <?php
    $assoArray = ["name" => "aramn", "roll" => 1, "language" => "arabic"];

    // $serialize = serialize($assoArray);

    // echo $serialize . PHP_EOL;

    // $unserialize = unserialize($serialize);

    // print_r($unserialize);

    $json = json_encode($assoArray);

    // echo $json;

    $jsonDecode = json_decode($json,true);

    print_r($jsonDecode);
