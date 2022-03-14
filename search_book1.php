<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
    tr {
        font-size: 1.2em;


    }


    tr:hover {
        background-color: black;
        color: white;


    }

    th {
        color: tomato;
        font-size: 1.3em;
    }

    .del {
        color: red;
        text-decoration: none;
    }

    .del:hover {
        color: blue;
        text-decoration: none;
        text-shadow: 2px 3px 2px #FFFFFF;
    }

    .content {
        position: relative;
        top: 100px;
        left: 370px;
        padding-right: 450px;
    }
</style>
<div class="content">
    <div class="card-body">
        <div class="container">

            <div class="row">
                <div style="margin-left: 40%;">
                    <h2 style="color:black"> <b> Manage Booking </b></h2>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <h1 style="color:black"> <b>Booking List</b></h1>
                </div>
                <form method="post" action="search_book.php">
                    <input type="text" name="search" required />
                    <input type="submit" value="Search" />
                </form>

            </div>
        </div>
        <table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px;">
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
            <?php
            $conn = mysqli_connect("localhost", "root", "L#153445", "ju-cafe");
            $search = $_POST['search'];

            $sql = "select * from book  where   Dept like '%$search%' OR Phone like '%$search%' or Name like '%$search%' ";
            $query = mysqli_query($conn, $sql);
            while ($r = mysqli_fetch_array($query)) {
            ?>
                <tr align=center>
                    <td><?php echo $r['Name'];  ?></td>
                    <td><?php echo $r['Email'];  ?></td>
                    <td><?php echo $r['Dept'];  ?></td>
                    <td><?php echo $r['Booking Type'];  ?></td>
                    <td><?php echo $r['Phone'];  ?></td>
                    <td><?php echo $r['Guests'];  ?></td>
                    <td><?php echo $r['Check_In'];  ?></td>
                    <td><?php echo $r['Check-out'];  ?></td>
                </tr>
            <?php
            }
            ?>


        </table>


    </div>
    <?php include "footer.php"; ?>