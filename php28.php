<?php

$data = "123";
echo "$data <br>";

$hash = md5($data);
echo "$hash <br>";

$hash = hash("sha256", $data);
echo "$hash <br>";
