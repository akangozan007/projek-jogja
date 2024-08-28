<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label><input type="checkbox" name="agree" value="A">A</label>
        <label><input type="checkbox" name="agree" value="B">B</label>
        <label><input type="checkbox" name="agree" value="C">C</label>
        <label><input type="checkbox" name="agree" value="D">D</label>
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $jawaban_dklik =  $_POST['agree'];
            echo $jawaban_dklik;
        }
    ?>    
</body>
</html>
