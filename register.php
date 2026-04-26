<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form method="POST" action="">
  Email: <input type="text" name="email"><br>
  Password: <input type="password" name="password"><br>
  <button type="submit">Daftar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "User berhasil didaftarkan";
}
?>

</body>
</html>
