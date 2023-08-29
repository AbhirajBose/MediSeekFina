<?php
session_start();
// if (isset($_SESSION["name"])) {
//     echo $_SESSION["name"];
//     echo "<br>";
//     echo $_SESSION["userid"];
// }
// else {
//     echo "Profile";
// }

session_unset();
session_destroy();
?>