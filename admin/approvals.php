<?php
require_once '../modules\sessions.php';
require_once '../connections\db_con.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets\css\style.css">
    <link rel="stylesheet" href="../assets\css\bootstrap.min.css">
    <title></title>
   
    <style>
        body{
            overflow-x: hidden;
        }
        .card-header{
            display: flex;
            flex-direction:column;
            gap:20px;
        }
        .card img{
            width:100%;
            height:300px;
        }
        a{
            text-decoration:none;
            color:white;
        }
        a:hover{
            color:white;
        }
    </style>
</head>
<body>
    
    <?php require_once '../modules\dashboard_menu.php'?>
    <?php include_once('modules\navbar.php'); ?>
    <?php echo succMsg(); echo errMsg();?>

    <?php          
        $sql  = "SELECT * FROM booking";
        $query = mysqli_query($connectDB,$sql);
    ?>
        <div class="row">
            <?php
        while ($row = mysqli_fetch_assoc($query)){ ?>
            <div class="col-md-6">
            <div class="card mx-auto mt-5 shadow">
                    <div class="card-header">
                    <b>id: <?php echo $row['id']; ?></b>
                    <b>Username: <?php echo strtoupper($row['user_name']); ?></b>
                    <b>Number of passengers: <?php echo $row['no_passengers']; ?></b>
                    <b>Travel time: <?php echo strtoupper($row['travel_time']); ?></b>
                    <b>Travel date: <?php echo $row['travel_date']; ?></b>
                    <b class="text-danger">Car type: <?php echo strtoupper($row['car_type']); ?></b>
                    <b>Status: <?php echo strtoupper($row['booking_status']); ?></b>
                </div>
                <div class="card-body">
                <a href="../connections\booking_preview_con.php?verify='<?php echo $row['id']; ?>'"><button class="btn btn-primary">Verify</button></a>
                <a href="../connections\booking_preview_con.php?delete='<?php echo $row['id']; ?>'"><button class="btn btn-danger">delete</button></a>
                </div>
        </div>
            </div>
        
    <?php } ?>
        </div>

</body>
<script src="../assets\js\bootstrap.bundle.min.js"></script>
</html>