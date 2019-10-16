    <?php
session_start();
if (isset($_SESSION['login'])) {
    //
    header("location: halawal.php");
} else {
    header("location: login.php");
}
?>