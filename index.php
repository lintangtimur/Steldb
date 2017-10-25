<?php
use Dotenv\Dotenv;
use Steldb\DB;

require "vendor/autoload.php";

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$db = new DB;
$select = $db->selectAll('siswa')->get();
$raw = $db->RAW("select * from siswa where id > ?", [2])->get();
