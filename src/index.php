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
    
<button type="button" class="btn btn-warning"><a href="./add.php" style="text-decoration: none;">Add</a></button>
        <div class=" text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">patiendtid </th>
                            <th scope="col">firstname</th>
                            <th scope="col">lastname</th>
                            <th scope="col">dateofbirth</th>
                            <th scope="col">gender </th>
                            <th scope="col">update</th>
                            <th scope="col">delete</th>
                            <th scope="col">details</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from patient";
                        $rs = mysqli_query($con, $sql);
                        if (mysqli_num_rows($rs) > 0) {
                            while ($row = mysqli_fetch_assoc($rs)) { ?>
                                <tr>
                                    <th><?php echo $row['patiendtid'] ?></th>
                                    <td><?php echo $row['firstname'] ?></td>
                                    <td><?php echo $row['lastname'] ?></td>
                                    <td><?php echo $row['dateofbirth'] ?></td>
                                    <th><?php if($row['gender']==1)
                                    {
                                        echo "Nam";
                                    } else if ($row['gender']==0)
                                    {
                                        echo "Nữ";
                                    } ?></th>
                                    <td><a href="./update.php?patiendtid=<?php echo $row['patiendtid']?>"><button type="button" class="btn btn-danger">update</button></a></td>
                                    <td><a href="./delete.php?patiendtid=<?php echo $row['patiendtid']?>"><button type="button" class="btn btn-primary">delete</button></a></td>
                                    <td><a href="./details.php?id=<?php echo $row['patiendtid']?>">details</a></td>
                                </tr>
                        <?php

                            }
                        }
                        ?>

        </div>



    </tbody>
    </table>
</body>

</html>