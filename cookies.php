<?php

setcookie('username', 'devjet04', time() + 86400 * 30);

if (isset($_COOKIE['username'])) {
  echo $_COOKIE['username'];
}