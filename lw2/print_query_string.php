<?php
  header('Content-Type: text\plain; charset=utf-8');

  $request = parse_url($_SERVER['REQUEST_URI']);
  $request_quary =  $request['query'];
  print "Query String='{$request_quary}'";
?>


