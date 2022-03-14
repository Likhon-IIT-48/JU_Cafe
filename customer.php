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
    <div class="container">

        <div class="row">

        </div>
        <div class="row">
            <div class="col">

                <h2 style="color:black; text-align:center"> <b> Manage Customer </b></h2>

                <h1 style="color:black"> <b>Customer List</b></h1>
            </div>
            <form method="post" action="search_book.php">
                <input type="text" name="search" required />
                <input type="submit" value="Search" />
            </form>

            <table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 2px 4px 10px 2px;">

                <tr>
                    <th>UID</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Hall</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Roll</th>
                    <th>Session</th>
                </tr>
                <?php
                $s = mysqli_query($con, "select * from registration1");
                while ($r = mysqli_fetch_array($s)) {
                ?>
                    <tr align=center>
                        <td><?php echo $r['uid']; ?></td>
                        <td><?php echo $r['pass']; ?></td>
                        <td><?php echo $r['name']; ?></td>
                        <td><?php echo $r['department']; ?></td>
                        <td><?php echo $r['hall']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><?php echo $r['phone']; ?></td>
                        <td><?php echo $r['roll']; ?></td>
                        <td><?php echo $r['session']; ?></td>

                    </tr>
                <?php
                }
                ?>


            </table>


        </div>
        <!-- <?php include "footer.php"; ?> -->