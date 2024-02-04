<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo git revert</title>
</head>

<body>
    <div style="margin:20x;">
        <h1 style="margin:0px;">demo git revert</h1>
        <hr>
        <?php
            // feature1
            function echoString1($str) {
                echo $str;
            }
            echoString1('hello, from feature1.');
            // feature2
            function echoString2($str) {
                echo $str;
            }
            echoString1('hello, from feature2.');
            // feature3
            function echoString3($str) {
                echo $str . '<br>';
            }
            echoString3('hello, from function3.');
        ?>
        <?php
            echo 'Hello world.';
        ?>
    </div>
</body>

</html>
