<!DOCTYPE html>
<?php
$h1 = "Домашнее задание ко 2 уроку";
$title = "Курс PHP level 1";
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
            <div class='inner'>
                <h1><?php echo $h1 ?></h1>
                <h2>Задание 1</h2>
                <?php
                $a = 4;
                $b = -6;
                ?>
                <p>
                    $a = <?php echo $a ?>;
                    $b = <?php echo $b ?>;
                </p>
                <p><?php
                    if ($a >= 0 && $b >= 0) {
                        echo 'Оба числа положительные, $a - $b = ' . ($a - $b);
                    } elseif ($a < 0 && $b < 0) {
                        echo "Оба числа отрицательные, их произведение составляет " . ($a * $b);
                    } else {
                        echo "Числа разных знаков, их сумма составляет " . ($a + $b);
                    }
                    ?></p>

                <h2>Задание 2</h2>
                <p>
                    $a = <?php echo $a ?>;
                </p>
                <?php
                switch ($a) {
                    case 0:
                        echo "0<br>";
                    case 1:
                        echo "1<br>";
                    case 2:
                        echo "2<br>";
                    case 3:
                        echo "3<br>";
                    case 4:
                        echo "4<br>";
                    case 5:
                        echo "5<br>";
                    case 6:
                        echo "6<br>";
                    case 7:
                        echo "7<br>";
                    case 8:
                        echo "8<br>";
                    case 9:
                        echo "9<br>";
                    case 10:
                        echo "10<br>";
                    case 11:
                        echo "11<br>";
                    case 12:
                        echo "12<br>";
                    case 13:
                        echo "13<br>";
                    case 14:
                        echo "14<br>";
                    case 15:
                        echo "15<br>";
                }
                ?>

                <h2>Задание 3</h2>
                <?php
                function addition($var1, $var2)
                {
                    # сложение
                    return $var1 + $var2;
                }
                function subtraction($var1, $var2)
                {
                    # вычитание
                    return $var1 - $var2;
                }
                function division($var1, $var2)
                {
                    # деление
                    return ($var2 === 0) ? "Второй аргумент функции равен 0, на ноль делить нельзя!" : $var1 / $var2;
                }
                function multiplication($var1, $var2)
                {
                    # умножение
                    return $var1 * $var2;
                }
                ?>
                <p>
                    $a = <?php echo $a ?>;
                    $b = <?php echo $b ?>;
                </p>
                <p>
                    Результат выполнения функции сложения: <?php echo addition($a, $b) ?>
                </p>
                <p>
                    Результат выполнения функции вычитания: <?php echo subtraction($a, $b) ?>
                </p>
                <p>
                    Результат выполнения функции деления: <?php echo division($a, $b) ?>
                </p>
                <p>
                    Результат выполнения функции умножения: <?php echo multiplication($a, $b) ?>
                </p>

                <h2>Задание 4</h2>
                <div class="grid">
                    <form action="" method="post">
                        Аргумент 1: <input type="number" name="arg1" /><br />
                        Аргумент 2: <input type="number" name="arg2" /><br />
                        Операция: <input type="text" name="operation" /><br />
                        <input type="submit" name="submit" value="Отправь меня!" />
                    </form>
                    <?php
                    $arg1 = (int)($_POST['arg1']);
                    $arg2 = (int)($_POST['arg2']);
                    $operation = $_POST['operation'];
                    function mathOperation($arg1, $arg2, $operation)
                    {
                        $operation = mb_strtolower($operation);
                        switch ($operation) {
                            case "сложение":
                                return Addition($arg1, $arg2);
                                break;
                            case "вычитание":
                                return Subtraction($arg1, $arg2);
                                break;
                            case "деление":
                                return Division($arg1, $arg2);
                                break;
                            case "умножение":
                                return Multiplication($arg1, $arg2);
                                break;
                            default:
                                echo "Нет такой операции, не введены значения";
                                break;
                        }
                    }
                    ?>
                    <p>Ваш результат: <?php echo mathOperation($arg1, $arg2, $operation); ?></p>
                </div>

                <h2>Задание 5</h2>
                <p>В футере</p>

                <h2>Задание 6</h2>
                <?php
                $val = 5;
                $pow = -3;
                function power($val, $pow)
                {
                    if ($pow == 0) {
                        return 1;
                    }
                    if ($pow > 0) {
                        return ($val * power($val, $pow - 1));
                    }
                    if ($pow < 0) {
                        return (1 / power($val, -$pow));
                    }
                }
                ?>
                <p>$val = <?php echo $val ?>;
                    $pow = <?php echo $pow ?>;</p>
                <p>$val в степени $pow равно <?php echo power($val, $pow) ?></p>

                <h2>Задание 7</h2>
                <?php

                function whatTimeIsIt($hours, $mins, $secs)
                {
                    $hours = (int) $hours;
                    $mins = (int) $mins;
                    $secs = (int) $secs;
                    $result = "Сейчас " . $hours . " ";
                    switch (($hours >= 20) ? $hours % 10 : $hours) {
                        case 1:
                            $result .= "час " . $mins;
                            break;
                        case 2:
                        case 3:
                        case 4:
                            $result .= "часа " . $mins;
                            break;
                        default:
                            $result .= "часов " . $mins;
                    }

                    switch (($mins >= 20) ? $mins % 10 : $mins) {
                        case 1:
                            $result .= " минута " . $secs;
                            break;
                        case 2:
                        case 3:
                        case 4:
                            $result .= " минуты " . $secs;
                            break;
                        default:
                            $result .= " минут " . $secs;
                    }

                    switch (($secs >= 20) ? $secs % 10 : $secs) {
                        case 1:
                            $result .= " секунда";
                            break;
                        case 2:
                        case 3:
                        case 4:
                            $result .= " секунды";
                            break;
                        default:
                            $result .= " секунд";
                    }


                    return $result;
                }
                echo whatTimeIsIt(date("H"), date("i"), date("s"));
                ?>
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