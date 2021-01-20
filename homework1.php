<!DOCTYPE html>
<?php
$today = date("F j, Y, g:i a");
$year = date("Y");
$h1 = "Домашнее задание к 1 уроку";
$title = "Курс PHP level 1";
$a = 5;
$b = '05';
$c = 1;
$d = 2;
?>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
    <div class="header">
            <nav class="nav">
                <?php
                $menuArr = [
                    "1 урок" => "homework1.php",
                    "2 урок" => "homework2.php",
                    "3 урок" => "index.php",
                    "Дополнительные материалы" => [
                        "Geekbrains" => "https://geekbrains.ru/",
                        "Мой профиль" => "https://geekbrains.ru/users/2009677",
                        "Документация PHP" => "https://www.php.net/manual/ru/index.php",
                    ],
                ];
                function menuRenderer($arr,$cls)
                {
                    $renderArr[] = "<ul class='$cls'>";
                    foreach ($arr as $key => $value) {
                        if (is_array($value)) {
                            $renderArr[] = "<li><a href='#'>$key<i class='fa fa-angle-down'></i></a>" . menuRenderer($value,"submenu") . "</li>";
                        } else {
                            $renderArr[] = "<li><a href='$value'>$key</a></li>";
                        }
                    }
                    $renderArr[] = "</ul>";
                    return implode("", $renderArr);
                }
                echo menuRenderer($menuArr,"topmenu");
                ?>
            </nav>
        </div>
        <div class="content">
            <div class='outer'>
                <div class='middle'>
                    <div class='inner'>
                        <h1><?php echo $h1 ?></h1>
                        <p class="today"><?php echo $today ?></p>
                        <p class="today">сейчас <?php echo $year ?> год</p>
                        <h2>Задание 1</h2>
                        <p>Выполнила с использованием Open Server 5.3.7</p>
                        <h2>Задание 2</h2>
                        <p>Выполнила</p>
                        <h2>Задание 3</h2>
                        <p><b>$a = 5;<br>$b = '05';</b></p>
                        <ol>
                            <li><b>var_dump($a == $b)</b> даст результат <b><?php var_dump($a == $b); ?></b>,<br>потому что здесь используется нестрогое сравнение с приведением типов, сначала привели строку к целочисленному типу, затем сравнили и получилось 5=5;</li>
                            <li><b>var_dump((int)'012345')</b> даст результат <b><?php var_dump((int)'012345'); ?></b>,<br>потому что мы привели строку к целочисленному типу, а целое число не может начинаться с 0;</li>
                            <li><b>var_dump((float)123.0 === (int)123.0)</b> даст результат <b><?php var_dump((float)123.0 === (int)123.0); ?></b>,<br>потому что здесь используется строгое сравнение, при котором сравниваются не только значения, но и типы. Также можно сказать, что в первом операнде получится число с плавающей точкой (123.0), а во втором целое число (123);</li>
                            <li><b>var_dump((int)0 === (int)'hello, world')</b> даст результат <b><?php var_dump((int)0 === (int)'hello, world'); ?></b>,<br>потому что при приведении строки, в которой в начале не содержится чисел, к челочисленному типу, мы получим 0, а 0=0.</li>
                        </ol>
                        <h2>Задание 4</h2>
                        <p>Выполнила с использованием функции date()</p>
                        <h2>Задание 5</h2>
                        <p>Имеются переменные <br><b>$c = <?php echo $c ?>;<br>$d = <?php echo $d ?>;</b></p>
                        <p>Для того, чтобы поменять их местами, не используя третью переменную, нужно выполнить такие операции:</p>
                        <p><b>$c = $c + $d;<br>
                                $d = $c - $d;<br>
                                $c = $c - $d;</b></p>
                        <?php
                        $c = $c + $d;
                        $d = $c - $d;
                        $c = $c - $d; ?>
                        <p>Теперь <b>$c = <?php echo $c ?></b>, а <b>$d = <?php echo $d ?></b></p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <?php
            echo date("Y");
            ?>
        </footer>
    </div>

</body>

</html>