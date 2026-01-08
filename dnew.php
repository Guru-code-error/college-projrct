<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Delete</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>delete items</h3>
            </div>
            <div class="card-body">
                <?php
                    $id=$_GET["d"];
                        $con=mysqli_connect("localhost","root",null,"medical");
                        $q="delete from admin where id='$id'";
                        if(mysqli_query($con,$q))
                            echo '<script>location.replace("main.php")</script>';
                        else
                            echo "error";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
