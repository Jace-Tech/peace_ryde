<?php 

$handler = fopen("text.js", "a+");

fwrite($handler, "alert('hello world')");

exec("mkdir group");