<?php 
include("connection.php");

// $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_NUM);
// working fine noo issues

$sql="select * from users";
$arr=$conn->query($sql);


// yes clear


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <style>
    table{
        margin-left:350px;
        margin-top:200px;
    }
       </style>
</head>
<body>
    <h2 class="text-center text-warning"> <u>DETAILS</u> </h2>
    <table border="3">
        <tr>
            <td colspan="7" class="text-center">DISPLAY DETAILS</td>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>MOBILE</th>
            <th>Age</th>
            <th>PASSWORD</th>
            <th>Action</th>
        </tr>
        <?php
        $n=1;
                while($data=$arr->fetch())
                {
                    ?>

            <tr>
                <td><?php echo $n ; ?></td>
                <td><?php echo $data['Name'] ; ?></td>
                <td><?php echo $data['Email'] ; ?></td>
                <td><?php echo $data['Mobile'] ; ?></td>
                <td><?php echo $data['Age'] ; ?></td>
                <td><?php echo $data['Password'] ; ?></td>
                <td>
                    <button class="btn btn-warning"><a href="Edit.php?con=<?php echo $data['id'];?>">EDIT</a></button>
                    <button class="btn btn-warning"><a href="Delete.php?con=<?php echo $data['id'];?>">DELETE</a></button>
                </td>
            </tr>

<?php
            $n+=1;    }

    ?>
    </table>

    
</body>
</html>

