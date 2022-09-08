<?php

declare(strict_types=1);

include 'utils.php';

$path = $_POST['path'];
$path_thumbs = $_POST['path_thumb'];

create_folder($path, $path_thumbs);
