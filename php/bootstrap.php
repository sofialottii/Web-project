<?php

require_once("../db/database.php");
require_once("../utils/function.php");
$dbh = new DatabaseHelper("localhost", "root", "", "GrimildeDatabase", 3306);
define("UPLOAD_DIR", "./upload/")
?>