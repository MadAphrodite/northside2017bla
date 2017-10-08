<?php

# Connect to localhost with the user "root" and password

$dbc = mysqli_connect("localhost", "root", "", "northsidedb") or die(mysqli_connect() );

# Set encoding to match our PHP-script

mysqli_set_charset($dbc, 'utf8');

?>