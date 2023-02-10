<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        text-align: center;
    }
</style>
<body>
    <?php
    ini_set('display_errors',0);
    function add_numbers($f, $s){
        return $f + $s;
    }
    add_numbers($number1 = $_POST["number1"],$number2 = $_POST["number2"]);
    ?>


    <?php
    function display_name($fame){
        return "Hello My boss: " . $fame;
    }
    display_name($_POST['fname']);
    ?>

    <?php
    function kilometers_to_milis($kilometers = 0){
        $milis_scale = 0.62;
        return $kilometers * $milis_scale;
    }
    kilometers_to_milis($_POST['kilo']);
    ?>
    <table>
        <form action="Function.php" method="post">
            Numer 1:<input type="text" name="number1" ><br><br>
            Numer 2:<input type="text" name="number2" ><br><br>
            Total:<input type="text" id="" value="<?php echo add_numbers($number1 = $_POST["number1"],$number2 = $_POST["number2"]) ?>"> <br><br>
            <button type="submit">ok</button> <br><br>
        </form>
        <form action="Function.php" method="post">
            Full name:<input type="text" name="fname" ><br><br>
            Out put:<input type="text" id="" value="<?php echo display_name($_POST['fname']); ?>"> <br><br>
            <button type="submit">ok</button><br><br>
        </form>
        <form action="Function.php" method="post">
            Kilometers:<input type="text" name="kilo" ><br><br>
            Kq:<input type="text" id="" value="<?php echo kilometers_to_milis($_POST['kilo'])  ?>"> <br><br>
            <button type="submit">ok</button><br><br>
        </form>
    </table>
</body>
</html>
