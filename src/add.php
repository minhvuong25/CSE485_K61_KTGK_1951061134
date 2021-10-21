<?php
include('./config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['add'])) {
        $id = $_POST['patiendtid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $blood_type = $_POST['blood_type'];
        $created_on = $_POST['created_on'];
        $modified_on = $_POST['modified_on'];
        $sql ="insert into patient values ('','$firstname','$lastname','$dateofbirth',' $gender',' $mobile','$email','$height','$weight',' $blood_type',' $created_on','$modified_on')";
        echo $sql;
        $rs = mysqli_query($con,$sql);
        if($rs)
        {
            header('location:index.php');
        }else
        {
            header('location:eror.php');
        }
    }

    ?>
    <form action="" method="POST">
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">patiendtid </label>
            <div class="col-sm-10">
                <input type="text
            " class="form-control" readonly id="modified_on" name="patiendtid">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">firstname</label>
            <div class="col-sm-10">
                <input type="text
            " class="form-control" id="modified_on" name="firstname">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">lastname</label>
            <div class="col-sm-10">
                <input type="text
            " class="form-control" id="modified_on" name="lastname">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">dateofbirth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="modified_on" name="dateofbirth">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">gender</label>
            <div class="col-sm-10">
                <input type="radio" name="gender" value="1"> Nam
                <input type="radio" name="gender" value="0"> Nữ
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">mobile</label>
            <div class="col-sm-10">
                <input type="text
            " class="form-control" id="modified_on" name="mobile">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input type="text
            " class="form-control" id="modified_on" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">height</label>
            <div class="col-sm-10">
                <input type="text
            " class="form-control" id="modified_on" name="height">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">weight</label>
            <div class="col-sm-10">
                <input type="text
            " class="form-control" id="modified_on" name="weight">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">blood_type</label>
            <div class="col-sm-10">
                <input type="text
            " class="form-control" id="modified_on" name="blood_type">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">created_on</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="modified_on" name="created_on">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">modified_on</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="modified_on" name="modified_on">
            </div>
        </div>
        <button name="add" type="submit" class="btn btn-success">Add</button>
    </form>

</body>

</html>