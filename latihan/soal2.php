<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $usernames = ['admin', 'siswa'];
    $passwords = ['12345', '1111'];
    $message = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $inputUsername = $_POST['username'] ?? '';
        $inputPassword = $_POST['password'] ?? '';
        $errors = [];

        $userIndex = array_search($inputUsername, $usernames);
        if ($userIndex === false) {
            $errors[] = "usernamenya tidak di temukan";
        } elseif ($passwords[$userIndex] !== $inputPassword) {
            $errors[] = "password salah";
        }

        if (empty($errors)) {
            $message = "Login berhasil sebagai admin";
        } else {
            $message = implode(' dan ', $errors);
        }
    }
    ?>

    <form action="" method="post">
        username : <input type="text" value="" name="username">
        <br>
        <br>
        password : <input type="password" name="password" id="">
        <br>
        <br>
        <input type="submit" value="login">
    </form>
    <?php if ($message): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
</body>
</html>