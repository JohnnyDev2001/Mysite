<?php

use src\Core\Helpers;

require 'vendor/autoload.php';

//require 'router.php';

use src\Models\PostModel;

$sql = (new PostModel())->read();

var_dump($sql);

print "<hr/>";

foreach($sql as $s){
    print $s['title']."<br/>";
}