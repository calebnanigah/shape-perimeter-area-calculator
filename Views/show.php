<?php
    require_once "../autoloader.php";

    use Shapes\Rectangle;
    use Shapes\Circle;
    use Shapes\Cube;

    $shape = $_POST['shape'];
    $perimeter = null;
    $area = null;
    $surfaceArea = null;
    $volume = null;
    $activeTabOn = ($_POST['activeTabOn'])? $_POST['activeTabOn'] : "../index.php";

    // rectangle perimeter and area
    if( $_SERVER["REQUEST_METHOD"] == "POST" && $shape == "rectangle"){
        $length = $_POST['length'];
        $width = $_POST['width'];
        @$perimeter = $_POST['perimeter'];
        @$area = $_POST['area'];
    

        if(!empty($length) && !empty($width)){
            // TODO: check if it is a number and other validations like trimming

            $rectangle = new Rectangle($length, $width);

            if($perimeter == "perimeter"){
                $perimeter = $rectangle->perimeter();
            }

            if($area == "area"){
                $area = $rectangle->area();
            }

        }else{
            echo "Length and width values required.";
        }
    }

    // circle perimeter and area
    if( $_SERVER["REQUEST_METHOD"] == "POST" && $shape == "circle"){
        $radius = $_POST['radius'];
        @$perimeter = $_POST['perimeter'];
        @$area = $_POST['area'];
    

        if(!empty($radius)){
            // TODO: check if it is a number and other validations like trimming

            $circle = new circle($radius);

            if($perimeter == "perimeter"){
                $perimeter = $circle->perimeter();
            }

            if($area == "area"){
                $area = $circle->area();
            }

        }else{
            echo "Radius value required.";
        }
    }

    // cube surfaceArea and Volume
    if( $_SERVER["REQUEST_METHOD"] == "POST" && $shape == "cube"){
        $side = $_POST['side'];
        @$volume = $_POST['volume'];
        @$surfaceArea = $_POST['surfaceArea'];
    

        if(!empty($side)){
            // TODO: check if it is a number and other validations like trimming

            $cube = new Cube($side);

            if($surfaceArea == "surfaceArea"){
                $surfaceArea = $cube->surfaceArea();
            }

            if($volume == "volume"){
                $volume = $cube->volume();
            }

        }else{
            echo "side and width values required.";
        }
    }
    
    /**
     * printCalculatedShapeValue
     *
     * @param  mixed $shape
     * @param  mixed $perimeter
     * @param  mixed $area
     * @return void
     */
    function printCalculatedShapeValue($shape, $perimeter, $area, $volume, $surfaceArea):void{
        if(!empty($perimeter)){
            echo "<h4> The perimeter of the $shape is <b>$perimeter</b>.</h4>";
        }
        if(!empty($area)){
            echo "<h4> The area of the $shape is <b>$area</b>.</h4>";
        }
        if(!empty($volume)){
            echo "<h4> The volume of the $shape is <b>$volume</b>.</h4>";
        }
        if(!empty($surfaceArea)){
            echo "<h4> The surface area of the $shape is <b>$surfaceArea</b>.</h4>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-secondary mt-3">
    <main class=" container bg-white p-3">

        <?php
            printCalculatedShapeValue($shape, $perimeter, $area, $volume, $surfaceArea);
        ?>


        <a href= <?php echo $activeTabOn ?>>Back to Shapes Perimeter/Area Calculator</a>
    </main>

</body>
</body>

</html>