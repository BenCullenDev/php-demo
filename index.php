<?php

require "functions.php";

if ($_SERVER['REQUEST_URI'] === '/')
{
    require 'controllers/index.php';
}
