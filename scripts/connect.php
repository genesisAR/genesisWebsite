<?php
// Host Name
$db_host = "localhost";
// SQL DB user
$db_username = "genesjm4_admin";
// SQL DB pass
$db_pass = "L0ngr0051!";
// SQL connect DB Name
$db_name = "genesjm4_emails";
// Run the actual connection here
$mysqli = mysqli_connect("$db_host","$db_username","$db_pass","$db_name") or die ("could not connect to mysqli");
?>
