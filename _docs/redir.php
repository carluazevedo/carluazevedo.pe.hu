<?php

define("A_PATH","/a");

header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . A_PATH);
