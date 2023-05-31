<?PHP
session_start();
session_destroy();
header ("location: http://www.qoogle.io/index.php");
?>