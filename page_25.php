<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 25</title>
</head>
<body>
    <h1><?php echo "Page 25"; ?></h1>
    <h2>JSON</h2>
    <?php
//ENCODE
    //json object
    $marks = array("Peter"=>65, "Harry"=>80, "John"=>78, "Clark"=>90);
    echo json_encode($marks) . "<br>"; // {"Peter":65,"Harry":80,"John":78,"Clark":90}
    //json array
    $colors = array("Red", "Green", "Blue", "Orange", "Yellow");
    echo json_encode($colors) . "<br>"; // ["Red","Green","Blue","Orange","Yellow"]
    //php array into json object
    $more_colors = array("Red", "Green", "Blue", "Orange", "Yellow");
    echo json_encode($more_colors, JSON_FORCE_OBJECT) . "<br>";
    echo "<br>";
//DECODE
    $json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
    print_r(json_decode($json)); echo "<br>";
    //change object to an array
    print_r(json_decode($json, true)); echo "<br>";

    $json_2 = '{"Biff":65,"Hong":80,"Wong":78,"Dong":90}';
    //decode JSON to php associative array
    $arr = json_decode($json_2, true);
    print_r($arr);
    echo "<br>";
    echo "<br>";

    echo $arr["Biff"] . "<br>";
    echo $arr["Hong"] . "<br>";
    echo $arr["Wong"] . "<br>";
    echo $arr["Dong"] . "<br>";  echo "<br>";

    //decode JSON to php object
    $obj = json_decode($json_2);
    print_r($obj);
    echo "<br>";

    echo $obj->Biff . "<br>";
    echo $obj->Hong . "<br>";
    echo $obj->Wong . "<br>";
    echo $obj->Dong . "<br>";
    echo "<br>";
//loop through decoded data
    $json_3 = '{"Dave":20,"Cave":40,"Rave":60,"Wave":80}';

    //decode to assoc array
    $arr_3 = json_decode($json_3, true);  
    var_dump($arr_3);  echo "<br>";
    //loop thru assic array
    foreach($arr_3 as $key=>$val){
        echo $key . "=>" . $val . "<br>";
    }
    echo "<br>";
    //decode JSON to php object
    $obj_3 = json_decode($json_3);
    // Loop through the object
    foreach($obj_3 as $key=>$val) {
        echo $key . "=>" . $val . "<br>";
    }
    echo "<br>";
//extracting nested data from JSON

    function printValues($nested_array){
        global $count;
        global $values;

        if(!is_array($nested_array)){
            die("ERROR: Input is not an array.");
        }
        //recursively dig into arrays
        foreach($nested_array as $key=>$val){
            if(is_array($val)){
                printValues($val);
            }  else  {
                $values[] = $val;
                $count++;
            }
        }
        return array('total'=>$count, 'values' => $values);
    }

    $big_json = '{
        "book": {
            "name": "Harry Potter and the Goblet of Fire",
            "author": "J. K. Rowling",
            "year": 2000,
            "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
            "genre": "Fantasy Fiction",
            "price": {
                "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
            }
        }
    }';

    $decode_big = json_decode($big_json, true);
    print_r($decode_big);
    echo "<br>";
    echo "<br>";

    $final = printValues($decode_big);
    print_r($final);
    echo "<br>";
    echo "<h3>" . $final["total"] . " value(s) found: </h3>";
    echo implode("<br>", $final["values"]);
    
    echo "<hr>";
    
    // Print a single value
    echo $decode_big["book"]["author"] . "<br>";  // Output: J. K. Rowling
    echo $decode_big["book"]["characters"][0] . "<br>";  // Output: Harry Potter
    echo $decode_big["book"]["price"]["hardcover"] . "<br>";  // Output: $20.32

    ?>
    
</body>
</html>