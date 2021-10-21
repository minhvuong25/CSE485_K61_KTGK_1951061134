<?php include('./config.php') ?>
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


    <a href="./index.php"> <button type="button" class="btn btn-primary">table</button></a>
    <div class=" text-center">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">patiendtid </th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">dateofbirth</th>
                    <th scope="col">gender </th>
                    <th scope="col">mobile</th>
                    <th scope="col">email</th>
                    <th scope="col">height</th>
                    <th scope="col">weight </th>
                    <th scope="col">blood_type</th>
                    <th scope="col">created_on</th>
                    <th scope="col">modified_on</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "select * from patient where patiendtid = '$id'";
                    $rs = mysqli_query($con, $sql);
                    if (mysqli_num_rows($rs) > 0) {
                        while ($row = mysqli_fetch_assoc($rs)) { ?>
                            <tr>
                                <th><?php echo $row['patiendtid'] ?></th>
                                <td><?php echo $row['firstname'] ?></td>
                                <td><?php echo $row['lastname'] ?></td>
                                <td><?php echo $row['dateofbirth'] ?></td>
                                <th><?php if ($row['gender'] == 1) {
                                        echo "Nam";
                                    } else if ($row['gender'] == 0) {
                                        echo "Nữ";
                                    } ?></th>
                                <td><?php echo $row['mobile'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['height'] ?></td>
                                <th><?php echo $row['weight'] ?></th>
                                <td><?php echo $row['blood_type'] ?></td>
                                <td><?php echo $row['created_on'] ?></td>
                                <td><?php echo $row['modified_on'] ?></td>


                            </tr>
                <?php

                        }
                    }
                }
                ?>

    </div>



    </tbody>
    </table>
</body>

</html>