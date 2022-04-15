<?php

// Start the session
session_start();


// $_SESSION is a dictionary that needs to have assigned values to work
// Varaibles or hard-coded values will work so in theory it can be used to carry
// login info $_SESSION['user'] = $userid;

echo $_SESSION['email'];



?>