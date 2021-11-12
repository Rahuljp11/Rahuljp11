<?php

$conn = new mysqli('localhost', 'root', '', 'grocery','3308');

if ($conn->connect_error) {
    exit('Connection failed: '.$conn->connect_error);
}
