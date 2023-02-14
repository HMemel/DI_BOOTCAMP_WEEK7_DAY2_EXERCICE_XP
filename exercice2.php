<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="text" name="age"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form> 

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            echo "Hi " . $name . ". You are " . $age . " years old.";
        }
    ?>

</body>
</html>