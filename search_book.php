<?php

include('connect.php');


include('header.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- CSS STYILE  -->

    <style>
        body {
            background-color: #8CD2AB;
        }

        table,
        th,
        td {
            font-weight: bold;
            margin-left: -95px;
            color: black;
        }



        table th {
            font-size: 20px;
            font-family: sans-serif;
        }

        a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .tabbutton {
            background: none;
            border: solid black 3px;
            padding: 5px;
            border-radius: 15px;

        }



        .tabbutton:hover {
            transform: scale(1.1);
            transition: .5s;
        }
    </style>



</head>

<body>


    <div class="container">


        <<div class="row">
            <div style="margin-left: 40%; margin-top: 4cm;">
                <h2 style="color:black"> <b> Manage Booking </b></h2>
            </div>
    </div>

    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">
            <table id="dataTable" width="90%" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Dept </th>
                        <th> Booking Type</th>
                        <th> Phone </th>
                        <th> Guests </th>
                        <th> Check_in </th>
                        <th> Check_out </th>


                    </tr>
                </thead>

                <tbody>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "L#153445", "ju-cafe");
                    $search = $_POST['search'];

                    $sql = "select * from book  where   Dept like '%$search%' OR Phone like '%$search%' ";
                    $query = mysqli_query($conn, $sql);
                    while ($Patient_data = mysqli_fetch_array($query)) {

                    ?>
                        <tr>
                            <td><?php echo $Patient_data['Name'];  ?></td>
                            <td><?php echo $Patient_data['Email'];  ?></td>
                            <td><?php echo $Patient_data['Dept'];  ?></td>
                            <td><?php echo $Patient_data['Booking Type'];  ?></td>
                            <td><?php echo $Patient_data['Phone'];  ?></td>
                            <td><?php echo $Patient_data['Guests'];  ?></td>
                            <td><?php echo $Patient_data['Check_In'];  ?></td>
                            <td><?php echo $Patient_data['Check-out'];  ?></td>

                        </tr>
                    <?php

                    }

                    ?>

                </tbody>
            </table>
            <div class="col" align="right">
                <button type="button" onclick="window.location.href='booking_show.php';" class="btn btn-success btn-circle btn-sm"><i class="fas fa-arrow-alt-circle-left"></i></button>
            </div>
        </div>


    </div>

</body>

</html>