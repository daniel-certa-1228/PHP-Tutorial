<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 26</title>
</head>
<body>
    <h1><?php echo "Page 26"; ?></h1>
    <h2>Regex</h2>

    <?php
        $pattern = "/ca[kf]e/";
        $text = "He was eating cake in the cafe.";
        if(preg_match($pattern, $text)){
            echo "Match found!<br>";
        }  else  {
            echo "Match NOT found!<br>";
        }

        $matches = preg_match_all($pattern, $text, $array);
        echo $matches . " matches were found.<br>"; //returns a number
        var_dump($array); echo "<br>";
    ?>
    <?php
        $pattern_2 = "/\s/"; //matches whitespace
        $replacement_2 = "-";
        $text_2 = "Earth revolves around\nthe\nSun";
        //replace spaces, newlines, and tabs.
        echo preg_replace($pattern_2, $replacement_2, $text_2);
        echo "<br>";
        // replace only spaces
        echo str_replace(" ", "-", $text_2);
        echo "<br>";        
    ?>
    <?php
        $pattern_3 = "/[\s,]+/";// will split the string at comma, sequence of commas, whitespace, or combination thereof
        $text_3 = "My favourite colors are red, green and blue";
        $parts_3 = preg_split($pattern_3, $text_3);
        var_dump($parts_3);
        echo "<br>";        
        
        //Loop through parts array and display substrings
        foreach($parts_3 as $part){
            echo $part . "<br>";
        }
    ?>
    <?php
        $pattern_4 = "/^J/"; //returns matches with the first letter is a capital J
        $names_4 = array("John Carter", "Clark Kent", "John Rambo");
        $matches_4 = preg_grep($pattern_4, $names_4);
        var_dump($matches_4);
        echo "<br>"; 
        
        foreach($matches_4 as $match){
            echo $match . "<br>";
        }
    ?>
    <?php
        $pattern_5 = "/color/i";
        $text_5 = "Color red is more visible than color blue in daylight.";
        $matches_5 = preg_match_all($pattern_5, $text_5, $array_5);
        echo $matches_5 . " matches were found.<br>";
        var_dump($array_5); echo "<br>"; 
    ?>
    <?php
        $pattern_6 = "/^color/im"; //m modifier makes it match every newline
        $text_6 = "Color red is more visible than \ncolor blue in daylight.";
        $matches_6 = preg_match_all($pattern_6, $text_6, $array_6);
        echo $matches_6 . " matches found.<br>";
        var_dump($array_6); echo "<br>"; 
    ?>
    <?php
        $pattern_7 = '/\bcar\w*/';
        $replacement_7 = '<b>$0</b>';
        $text_7 = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
        echo preg_replace($pattern_7, $replacement_7, $text_7);
    ?>
    
</body>
</html>