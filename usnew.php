<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit file</title>
</head>
<div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name:</th>
                                    <th>gender:</th>
                                    <th>birth:</th>
                                    <th>father name:</th>
                                    <th>address:</th>
                                    <th>state:</th>
                                    <th>mobile:</th>
                                    <th>disease:</th>
                                    <th>time schedule</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
                            if(isset($_POST['sm']))
                            {
                                $name=$_POST['enum'];
                                $birth=$_POST['birth'];
                                $con=mysqli_connect("localhost","root",null,"medical");
                                $qry="select * from admin where name='$name' and dateb='$birth'";
                                $res=mysqli_query($con,$qry);
                                while($row=mysqli_fetch_array($res)){
                                    $id=$row["id"];
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
                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $gen;?></td>
                                    <td><?php echo $birth;?></td>
                                    <td><?php echo $fname;?></td>
                                    <td><?php echo $address;?></td>
                                    <td><?php echo $state;?></td>
                                    <td><?php echo $number;?></td>
                                    <td><?php echo $dis;?></td>
                                    <td><?php echo $time;?></td>
                                    <td> <button type="button" class="btn btn-danger">
                                        <a href="dnew.php ?d=<?php echo $id ?>" class="text-light">CANCEL</a></button>
                                        <button type="button" class="btn btn-primary">
                                        <a href="enew.php  ?e=<?php echo $id ?>" class="text-light">CHANGE</a></button></td>
                                    </tr>
                                    <?php
                                }}?>
                                   </tbody>
                        </table>
                </div>
