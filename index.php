<?php

require "vendor/autoload.php";

$m = new Mustache_Engine(array('partials_loader' => new Mustache_Loader_FilesystemLoader('template/partial/')));

echo $m->render('Hello {{planet}} & {{peo}}', array('planet' => 'World', 'peo' => 'Sky!'));

echo $m->render("{{>header}}{{>../index}}", array('qqun' => "moi", "qqch" => "naze", "titre" => "bip"));