<?php
if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
  echo "Login successful!";
} else {
  echo "Invalid credentials.";
}
?>
