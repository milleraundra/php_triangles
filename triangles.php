<?php
    class Triangle
    {
        public $side1;
        public $side2;
        public $side3;

        function testTriangle($side1, $side2, $side3)
        {
            if ($side1 + $side2 <= $side3 || $side1 + $side3 <= $side2 || $side2 + $side3 <= $side1) {
                echo "<h1>Not a triangle!</h1>";
            } elseif ($side1 == $side2 && $side2 == $side3) {
                echo "<h1>Equilateral</h1>";
            } elseif ($side1 == $side2 || $side2 == $side3 || $side1 == $side3) {
                echo "<h1>Isosceles</h1>";
            } else {
                echo "<h1>Scalene</h1>";
            }
        }


    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Triangle</title>
  </head>
  <body>
    <h1>Your Results:</h1>
    <?php
        $side1 = $_GET["side1"];
        $side2 = $_GET["side2"];
        $side3 = $_GET["side3"];

        $triangle = new Triangle();
        $triangle->testTriangle($side1, $side2, $side3);

    ?>
  </body>
</html>
