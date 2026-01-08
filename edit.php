<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CHANGE file</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 align=center>CHANGE THE DATA</h3>
            </div>
            <div class="card-body">
                <?php
                    $id=$_GET["e"];
                    $con=mysqli_connect("localhost","root",null,"medical");
                    $q="select * from admin where id='$id'";
                    $res=mysqli_query($con,$q);
                    $row=mysqli_fetch_array($res);
                    $name=$row["name"];
                    $gen=$row["gender"];
                    $birth=$row["dateb"];
                    $fname=$row["fname"];
                    $address=$row["address"];
                    $state=$row["state"];
                    $number=$row["number"];
                    $dis=$row["dis"];
                    $time=$row["time"];
                    ?>
                <form action="#" method="post">
                    <div class="form-group">
                        <label>ID:</label>
                        <input type="text" name="id" class="form-control" required value="<?php echo $id ?>">
                    </div>
                    <div class="form-group">
                        <label>NAME:</label>
                        <input type="text" name="name" class="form-control" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <label>GENDER:</label>
                        <input type="text" name="gen" class="form-control" required value="<?php echo $gen ?>">
                    </div>
                    <div class="form-group">
                        <label>DATE OF BIRTH:</label>
                        <input type="text" name="birth" class="form-control" required value="<?php echo $birth ?>">
                    </div>
                    <div class="form-group">
                        <label>FATHER NAME:</label>
                        <input type="text" name="fname" class="form-control" required value="<?php echo $fname ?>">
                    </div>
                    <div class="form-group">
                        <label>ADDRESS:</label>
                        <input type="text" name="address" class="form-control" required value="<?php echo $address ?>">
                    </div>
                    <div class="form-group">
                        <label>DATE:</label>
                        <input type="text" name="state" class="form-control" required value="<?php echo $state ?>">
                    </div>
                    <div class="form-group">
                        <label>MOBILE:</label>
                        <input type="text" name="number" class="form-control" required value="<?php echo $number ?>">
                    </div>
                    <div class="form-group">
                        <label>disease:</label>
                        <input type="text" name="dis" class="form-control" required value="<?php echo $dis ?>">
                    </div>
                    <div class="form-group">
                        <label>TIME SCHEDULE:</label>
                        <input type="text" name="time" class="form-control" required value="<?php echo $time?>">
                    </div><br>
                    <div></div>
                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </div>
            <?php
            if(isset($_POST["submit"])){
                $code=$_POST["id"]; 
                $name=$_POST['name'];
                $gen=$_POST['gen'];
                $birth=$_POST['birth'];
                $fname=$_POST['fname'];
                $address=$_POST['address'];
                $state=$_POST['state'];
                $number=$_POST['number'];
                $dis=$_POST['dis'];
                $time=$_POST['time'];
                $con=mysqli_connect("localhost","root",null,"medical");
                $q="update admin set id='$id' , name='$name' , gender='$gen',dateb='$birth',fname='$fname',address='$address',state='$state',number='$number',dis='$dis',time='$time' where id='$id'";
                if(mysqli_query($con,$q)){
                    echo '<script> location.replace("main.php")</script>';
                }
                else{
                    echo "error";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
