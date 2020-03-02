<?php
        $adjectives = array(
            'fun-loving',
            'clean',
            'jolly',
            'elegant',
            'fancy',
            'beautiful',
            'smart',
            'nice',
            'funny',
        );
        $compliments = array();

    ?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Compliment Generator
    </title>
</head>

<body>
    <div class="container">
        <h1>Compliment Generator</h1>
        <?php
            if (isset($_POST['adjNum']) && isset($_POST['compNum'])) {
                $adjNum = $_POST['adjNum'];
                $compNum = $_POST['compNum'];
                for ($i=0; $i < $compNum; $i++) { 
                    $tempArray = $adjectives;
                    $compCollection = "";
                    $tempNums = array();
                    for ($y=0; $y < $adjNum; $y++) { 
                        $num = rand(0, count($tempArray) - 1);
                        if (in_array($num, $tempNums)) {
                            $y = $y - 1;
                        } else {
                            array_push($tempNums, $num);
                            if ($y < $adjNum - 1) {
                                $compCollection = $compCollection . $tempArray[$num] . ', ';
                            } else {
                                $compCollection = $compCollection . $tempArray[$num];
                            }
                        }
                    }
                    echo "You are a " . $compCollection . ' kind of person' . '<br>';

                }
            }
        ?>
        <form method="post" action="benSic.php">
            <label for="adjNum">Number of adjectives:</label>
            <select class="form-control" id="adjNum" name="adjNum">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <label for="compNum">Number of compliments:</label>
            <select class="form-control" id="compNum" name="compNum">
                <option>1</option>
                <option>3</option>
                <option>5</option>
            </select>
            <input type ="submit" class="btn btn-primary" value="Submit">
        </form>
</div>


</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</html>
