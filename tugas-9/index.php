<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('animal.php');
        require_once('ape.php');
        require_once('frog.php');

        $sheep = new Animal("shaun");

        echo "Name : ".$sheep->name; // "shaun"
        echo "<br>";
        echo "legs : ".$sheep->legs; // 4
        echo "<br>";
        echo "cold_blooded : ".$sheep->cold_blooded; // "no"
        echo "<br>";

        $kodok = new Frog("buduk");
        echo "<br>";
        echo "Name : ".$kodok->name;
        echo "<br>";
        echo "legs : ".$kodok->legs;
        echo "<br>";
        echo "cold blooded : ".$kodok->cold_blooded;
        echo "<br>";
        echo "jump : ".$kodok->jump() ; // "hop hop"

        $sungokong = new Ape("kera sakti");
        echo "<br>";
        echo $sungokong->name;
        echo "<br>";
        echo "legs : ".$sungokong->legs;
        echo "<br>";
        echo "cold blooded : ".$sungokong->cold_blooded;
        echo "<br>";
        echo "yell : ".$sungokong->yell(); // "Auooo"
        echo "<br>";

    ?>
</body>
</html>