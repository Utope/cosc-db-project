<?php
include_once 'helpers.php';

use function cosc\getPage_Login_Url;

echo getPage_Login_Url();
header("Location: " . getPage_Login_Url());