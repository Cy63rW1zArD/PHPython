<?php
dl("python.so");
$python = new Python($argv);
$python->assign("hello", ["a" => "b", "c" => "d"]);
$python->evalFile(__DIR__.'/testArgv.py');

$python->eval("print('EINE: Eval Is Not Evil')");