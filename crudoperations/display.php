
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>

<!-- <button class="btn btn-secondary"><a href="insert.php">Insert Data</a><button> -->

    <div class="container">
        <div class="col-lg-12 "><br><br>

                <h1 class=" text-warning text-center"> Display Table Data </h1>
                <a href="insert.php" class="btn btn-secondary">Insert Data</a>


                <table class="table table-striped table-hover table-borderd mt-4">
                    <tr class="  text-center">
                        <th>Id</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Delete</th>
                        <th>Update</th>
                    

                    </tr>

                    <?php
                            include 'conn.php';
                     
                            $q= "select * from crudtable";
                        
                            $query = mysqli_query($con, $q);

                            while($res = mysqli_fetch_array($query)){
                        
                    
                    ?>

                    <tr class="text-center">
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo $res['username'] ?></td>
                        <td><?php echo $res['password'] ?></td>
                        <td><?php echo $res['gender'] ?></td>
                        <td><?php echo $res['mobile'] ?></td>
                        <td> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white btn btn-danger"> Delete</a></td>
                        <td> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white btn btn-primary"> Update</a></td>
                    </tr>
                        <?php
                            }
                        ?>
                </table>

        </div>
</div>

</body>
</html>