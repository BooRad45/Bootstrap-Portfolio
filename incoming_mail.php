<?php
  $from = $_POST['envelope']['from'];
  $to = $_POST['envelope']['to'];
  $plain_text = $_POST['plain'];

  header("Content-type: text/plain");

  if ($to == 'allowed@example.com'){
    header("HTTP/1.0 200 OK");
    echo('success');
  }else{
    header("HTTP/1.0 403 OK");
    echo('user not allowed here');
  }
  exit;
?>