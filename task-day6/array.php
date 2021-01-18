<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
    $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
    echo "<p> Isi dari variable kids : </p>";
    echo "<pre>";
    print_r($kids);
    echo "</pre>";

    echo "<p> Isi dari variable adults : </p>";
    echo "<pre>";
    print_r($adults);
    echo "</pre>";

    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    foreach ($kids as $k) {
        echo "<li> $k </li>";
    }
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: " . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    // ini cara manual
    // echo "<li> $adults[0] </li>";
    // echo "<li> $adults[1] </li>";
    // echo "<li> $adults[2] </li>";
    // echo "<li> $adults[3] </li>";

    //ini pakai looping
    foreach ($adults as $ad) {
        echo "<li> $ad </li>";
    }
    // Lanjutkan

    echo "</ol>";


    echo "<h3> Soal 3</h3>";
    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
           

            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
    $tempArray = array();
    $data1 = [
        "nama" => "Will Byers",
        "age" => 12,
        "alias" => "Will the Wise",
        "status" => "Alive"
    ];
    $data2 = [
        "nama" => "Mike Wheeler",
        "age" => 12,
        "alias" => "Dungeon Master",
        "status" => "Alive"
    ];
    $data3 = [
        "nama" => "Jim Hopper",
        "age" => 43,
        "alias" => "Deceased",
        "status" => "Deceased"
    ];
    $data4 = [
        "nama" => "Eleven",
        "age" => 12,
        "alias" => "El",
        "status" => "Alive"
    ];
    array_push($tempArray, $data1, $data2, $data3, $data4);

    echo "<pre>";
    print_r($tempArray);
    echo "</pre>";
    ?>
</body>

</html>