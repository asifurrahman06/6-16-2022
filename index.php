
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>"HELLO WORLD FORM HTML"</h1>
    <h1>
    <?php
        $msg= "Hello World from PHP";
        echo $msg;
    ?>
    </h1>

    <?php
        $str= "Hello World from MS";
        echo strlen($str).'<br />';
        echo str_word_count($str).'<br />';

        $students= [
            'Asif'=>01,
            'Aziz'=>02,
            'Araf'=>03
        ];
        foreach($students as $n=>$r)
        {
            echo "Name: ". $n .", Roll: ". $r. "<br/";
        }
    ?>
</body>
</html>