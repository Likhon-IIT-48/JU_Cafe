<?php 
$conn = mysqli_connect("localhost", "root", "L#153445", "ju-cafe");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$n = $_REQUEST['bname'];
$e = $_REQUEST['email'];
$d = $_REQUEST['dept'];
$bt = $_REQUEST['type'];
$p = $_REQUEST['phone'];
$g = $_REQUEST['guest'];
$ci = $_REQUEST['check_in'];
$co = $_REQUEST['check_out'];

$sql = "INSERT INTO  book  VALUES('$n' ,'$e',' $d', '$bt','$p','$g','$ci','$co')";


if (mysqli_query($conn, $sql)) {
    
       echo"Success";
       header("location:index.php");

} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

