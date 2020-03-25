<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            p {
                display: inline-block;
                margin-right: -110px;
            }

            input {
                width: 10%;
            }

            .submit {
                width: 4%;
            }
        </style>
        <title>Document</title>
    </head>

    <body>
        <form action="index.php" method="POST">
            Síť <input type="number" name="first" value="">
            . <input type="number" name="second" value=""> 
            . <input type="number" name="third" value="">
            . <input type="number" name="fourth" value="">
            / <input type="number" name="prefix" value="">
            <input class="submit" type="submit" name="submit" value="submit">
        </form>


        <?php
        $first = $_POST["first"];
        $second = $_POST["second"];
        $third = $_POST["third"];
        $fourth = $_POST["fourth"];
        $prefix = $_POST["prefix"];

        include 'IPCalculator.php';
        $IPCalculator = new IPCalculator();

        echo "<br>M: ";
        echo $IPCalculator->maska($prefix);
        echo "<br>N:";
        echo "<br>F:";
        echo "<br>L:";
        echo "<br>B:";
        echo "<br># 2<sup>n</sup>-2:";
        echo pow(2, 32 - $prefix) - 2;
        

        ?>
    </body>

</html>