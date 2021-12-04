<?php

session_start();				//session strat

session_unset(); 				//session unset;

session_destroy();				//

header("location:index.php");   //go to index page
?>