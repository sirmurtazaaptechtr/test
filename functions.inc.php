<?php 
function pr($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }