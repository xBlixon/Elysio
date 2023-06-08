<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dummy Registration</title>
    <?php require "_styling.php"?>
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        main {
            text-align: center;
            height: 500px;
            width: 420px;
            border: 1px solid #DDDDDD;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.15);
        }
        form {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: auto;
        }
        form input {
            margin-bottom: 30px;
        }
        h1 {
            margin: 20px 0;
        }
        .message {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 0, 0, 0.5);
            color: white;
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <main>
        <h1>Dummy Registration</h1>
        <form method="post">
            <label>Name:
                <input type="text" name="name">
            </label>

            <label>Password:
                <input type="text" name="password">
            </label>
            <input type="submit" value="Sign-up">
        </form>
        <?php
        if(isset($flash))
        {
            echo <<<MESSAGE
            <p class="message">$flash</p>
            MESSAGE;
        }
        ?>
    </main>
</body>
</html>
