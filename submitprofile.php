<?php

// Retrieve the user's display picture and bio from the database
$display_picture = $row['display_picture'];
$bio = $row['bio'];

// Display the user's display picture and bio
echo "<img src='$display_picture' alt='Display Picture'><br>";
echo "<p>$bio</p>";

?>