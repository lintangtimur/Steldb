<?php
use Symfony\Component\VarDumper\VarDumper;

/**
 * Var dump variable
 * @param  mixed $var variable yang akan di dump
 * @return mixed
 */
function dd($var)
{
    VarDumper::dump($var);
}
