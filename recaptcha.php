<?php

  $secret = "6LdtJQkUAAAAADq6JgnKUOBsPXBUJFE3-Pal8LA6";
  $ip = $_SERVER['REMOTE_ADDR'];
  $captcha = $_POST['g-recaptcha-response'];
  $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
  $jsd = json_decode($rsp);


    foreach ($jsd as $key => $value) {
      echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
    }
  ?>
