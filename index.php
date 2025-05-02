<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>PHP Database</title>
</head>

<body>
    <main>
        <form action="includes/formhandler.inc.php" method="post">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" placeholder="Username...">

            <label for="password">Password</label>
            <input id="password" type="password" name="password" placeholder="Password...">

            <label for="email">Email</label>
            <input id="email" type="text" name="email" placeholder="Email...">

            <button type="submit">Signup</button>
        </form>
    </main>
</body>
</html>