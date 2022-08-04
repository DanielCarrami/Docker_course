<?php

  $db = mysqli_connect('db','root', 'secret', 'testdb');

  $result = mysqli_query($db, 'SELECT * FROM users');

  while($row = mysqli_fetch_array($result)) {
    echo "Nombre: " . $row['name'] . "<br>";
  }
?>
