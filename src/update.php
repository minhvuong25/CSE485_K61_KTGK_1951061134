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
    if (isset($_GET['patiendtid'])) {
        $patiendtid = $_GET['patiendtid'];
        $sql ="select * from patient where patiendtid = '$patiendtid'";
        $rs = mysqli_query($con,$sql);
        if(mysqli_num_rows($rs))
        {
            $row= mysqli_fetch_assoc($rs);
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $dateofbirth = $row['dateofbirth'];
            $gender = $row['gender'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $height = $row['height'];
            $weight = $row['weight'];
            $blood_type = $row['blood_type'];
            $created_on = $row['created_on'];
            $modified_on = $row['modified_on'];
        }
      
        
    }

    ?>
   <a href="./index.php"><button type="button" class="btn btn-primary">table</button></a>
    <form action="" method="POST">
    <?php
if(isset($_POST['update']))
{
        $firstname_update = $_POST['firstname'];
        $lastname_update = $_POST['lastname'];
        $dateofbirth_update = $_POST['dateofbirth'];
        $gender_update = $_POST['gender'];
        $mobile_update = $_POST['mobile'];
        $email_update = $_POST['email'];
        $height_update = $_POST['height'];
        $weight_update = $_POST['weight'];
        $blood_type_update = $_POST['blood_type'];
        $created_on_update = $_POST['created_on'];
        $modified_on_update = $_POST['modified_on'];
        $sql_update = "UPDATE `patient` SET 
        `firstname`='$firstname_update'
        ,`lastname`='$lastname_update',
        `dateofbirth`='$dateofbirth_update',
        `gender`='$gender_update',
        `mobile`='$mobile_update ',
        `email`='$email_update',
        `height`='$height_update',
        `weight`='$weight_update',
        `blood_type`='$blood_type_update'
        ,`created_on`='$created_on_update',
        `modified_on`='$modified_on_update' 
        WHERE `patiendtid`='$patiendtid'";
        $rs_update= mysqli_query($con,$sql_update);
        echo $rs_update ;
        if($rs_update)
        {
             header('location:index.php');
        }else
        {
             header('location:eror.php');
        }
}
?>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">patiendtid </label>
            <div class="col-sm-10">
        <input value="<?php echo $patiendtid ?>" type="text" class="form-control" readonly id="modified_on" name="patiendtid">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">firstname</label>
            <div class="col-sm-10">
                <input value="<?php echo $firstname ?>" type="text" class="form-control" id="modified_on" name="firstname">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">lastname</label>
            <div class="col-sm-10">
                <input value="<?php echo $lastname ?>" type="text
            " class="form-control" id="modified_on" name="lastname">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">dateofbirth</label>
            <div class="col-sm-10">
                <input value="<?php echo $dateofbirth ?>" type="date" class="form-control" id="modified_on" name="dateofbirth">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">gender</label>
            <div class="col-sm-10">
                <input type="radio" <?php if($gender==1) {echo "checked"; }?> name="gender" value="1"> Nam
                <input type="radio" <?php if($gender==0) {echo "checked"; }?> name="gender" value="0"> Nữ
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">mobile</label>
            <div  class="col-sm-10">
                <input value="<?php echo $mobile ?>" type="text
            " class="form-control" id="modified_on" name="mobile">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input value="<?php echo $email ?>" type="text
            " class="form-control" id="modified_on" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label  for="empMobile" class="col-sm-2 col-form-label">height</label>
            <div  class="col-sm-10">
                <input value="<?php echo $height ?>" type="text
            " class="form-control" id="modified_on" name="height">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">weight</label>
            <div  class="col-sm-10">
                <input value="<?php echo $weight ?>" type="text
            " class="form-control" id="modified_on" name="weight">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">blood_type</label>
            <div class="col-sm-10">
                <input value="<?php echo $blood_type ?>" type="text
            " class="form-control" id="modified_on" name="blood_type">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">created_on</label>
            <div  class="col-sm-10">
                <input value="<?php echo $created_on ?>" type="date" class="form-control" id="modified_on" name="created_on">
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">modified_on</label>
            <div  class="col-sm-10">
                <input value="<?php echo $modified_on ?>" type="date" class="form-control" id="modified_on" name="modified_on">
            </div>
        </div>
        <button name="update" type="submit" class="btn btn-success">Update</button>
    </form>

</body>

</html>