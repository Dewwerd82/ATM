<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="main">
            <div class="menu">
                <h1>ATM</h1>
                <form action="./form.php" name="form" method="POST" >
                    <label for="nominal">Номинал в наличии</label>
                    <input type="text" class="nominal" name="nominal" disabled placeholder = "5, 10, 20, 50, 100, 200, 500">
                    <label for="sum">Ваша сумма</label>
                    <input type="number" class="sum" name="sum" value="0">
                    <button type="submit" class="btn" name="submit">SEND</button>
                </form>
            </div>
            <div class="content">
                <div class="answer">                  
                    <?php
                        include 'main.php';
                    ?>
                </div>
                <div class="root">

                </div>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>