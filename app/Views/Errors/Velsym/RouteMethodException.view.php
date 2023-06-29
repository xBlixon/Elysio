<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap');
        * {margin: 0; padding: 0;}
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            background-color: #333333;
            font-family: 'Open Sans', sans-serif;
        }

        div
        {
            width: 100%;
            min-height: 200px;
            height: auto;
            background-color: rgba(255 0 0 / 75%);
            color: white;
            display: grid;
            place-content: center;
            font-size: 2rem;
            text-align: center;
            padding: 50px 20px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div>
<?= $output ?>
</div>
</body>
</html>
