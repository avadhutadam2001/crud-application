<?php
include 'conn.php';

$id = $_GET['id'];

    $sql = "select * from  `crudtable` where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $password = $row['password'];
    $gender = $row['gender'];
    $mobile = $row['mobile'];


if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];

    // $id = $_GET['id'];

    $q= " update crudtable set id=$id, username='$username', password='$password', gender='$gender', mobile='$mobile' where id=$id ";

    $query = mysqli_query($con, $q);

    header('location:display.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>crud</title>
</head>
<body>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <div class="card"><br> <br>
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Operation </h1>
                </div>
                <label> Username: </lable>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>"> 

                <label> Password: </lable>
                <input type="text" name="password"  class="form-control " value="<?php echo $password; ?>"> 

                <label> Gender: </lable>
                <input type="text" name="gender"  class="form-control" value="<?php echo $gender; ?>"> 

                <label> Mobile: </lable>
                <input type="text" name="mobile"  class="form-control" value="<?php echo $mobile; ?>"> <br>

                <button class="btn btn-success" name="submit" type="submit"> Submit </button>

            </div>
        </form>
    </div> 
</body>
</html>