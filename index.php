<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);
$h1 = "Домашнее задание к 3 уроку";
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
                function menuRenderer($arr, $cls)
                {
                    $renderArr[] = "<ul class='$cls'>";
                    foreach ($arr as $key => $value) {
                        if (is_array($value)) {
                            $renderArr[] = "<li><a href='#'>$key<i class='fa fa-angle-down'></i></a>" . menuRenderer($value, "submenu") . "</li>";
                        } else {
                            $renderArr[] = "<li><a href='$value'>$key</a></li>";
                        }
                    }
                    $renderArr[] = "</ul>";
                    return implode("", $renderArr);
                }
                echo menuRenderer($menuArr, "topmenu");
                ?>
            </nav>
        </div>
        <div class="content">
            <div class='inner'>
                <h1><?php echo $h1 ?></h1>
                <h2>Задание 1</h2>
                <p>Числа, кратные 3:</p>
                <?php
                $a = 0;
                while ($a <= 100) {
                    if ($a % 3 == 0) {
                        echo "$a ";
                    }
                    $a++;
                }
                ?>

                <h2>Задание 2</h2>
                <?php
                $a = 0;
                do {
                    if ($a == 0) {
                        echo "$a - ноль.<br>";
                    } elseif ($a % 2 == 0) {
                        echo "$a - четное число.<br>";
                    } else {
                        echo "$a - нечетное число.<br>";
                    }
                    $a++;
                } while ($a <= 10);
                ?>

                <h2>Задание 3</h2>
                <?php
                $areaArr = [
                    "Московская область" => ["Москва", "Зеленоград", "Клин"],
                    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
                    "Рязанская область" => ["Рязань", "Касимов", "Сасово"],
                ];
                foreach ($areaArr as $key => $value) {
                    echo "<p>$key:</p><p>" . implode(", ", $value) . "</p><br>";
                }
                ?>

                <h2>Задание 4</h2>
                <div class="grid">
                    <form action="" method="post">
                        Аргумент 1: <input type="text" name="arg" /><br />
                        <input type="submit" name="submit" value="Транслит" />
                    </form>
                    <?php
                    $arg = $_POST['arg'];
                    function translit($arg)
                    {
                        $translitArr = [
                            "а" => "a",
                            "б" => "b",
                            "в" => "v",
                            "г" => "g",
                            "д" => "d",
                            "е" => "e",
                            "ё" => "e",
                            "ж" => "zh",
                            "з" => "z",
                            "и" => "i",
                            "й" => "y",
                            "к" => "k",
                            "л" => "l",
                            "м" => "m",
                            "н" => "n",
                            "о" => "o",
                            "п" => "p",
                            "р" => "r",
                            "с" => "s",
                            "т" => "t",
                            "у" => "u",
                            "ф" => "f",
                            "х" => "kh",
                            "ц" => "ts",
                            "ч" => "ch",
                            "ш" => "sh",
                            "щ" => "shch",
                            "ы" => "i",
                            "ъ" => "'",
                            "ь" => "'",
                            "э" => "e",
                            "ю" => "yu",
                            "я" => "ya",
                            "?" => "?",
                            "!" => "!",
                            "." => ".",
                            "," => ",",
                            "-" => "-",
                            ":" => ":",
                            " " => " ",
                            ";" => ";",
                        ];
                        $result = [];
                        $pieces = preg_split('//u', mb_strtolower($arg), -1, PREG_SPLIT_NO_EMPTY);
                        foreach ($pieces as $key) {
                            array_push($result, $translitArr[$key]);
                        }
                        return implode("", $result);
                    }
                    ?>
                    <p>Ваш результат: <?php echo translit($arg); ?></p>
                </div>
                <h2>Задание 5</h2>
                <?php
                $str1 = "съешь ещё этих мягких французских булок, да выпей чаю";
                function changeSpaces($var)
                {
                    $result = explode(" ", $var);
                    return implode("_", $result);
                }
                echo "$str1<br>";
                echo changeSpaces($str1);
                ?>

                <h2>Задание 6</h2>
                <p>В хедере</p>

                <h2>Задание 7</h2>
                <?php
                for ($i = 0; $i < 10; print $i++ . ' ') {
                    // здесь пусто
                }; ?>
                <h2>Задание 8</h2>
                <?php

                function searchCityName($char, $arr)
                {
                    foreach ($arr as $value) {
                        foreach ($value as $city) {
                            $pieces = preg_split('//u', mb_strtolower($city), -1, PREG_SPLIT_NO_EMPTY);
                            if ($pieces[0] == mb_strtolower($char)) {
                                echo "$city<br>";
                            }
                        }
                    }
                }
                echo searchCityName("К", $areaArr);
                ?>
                <h2>Задание 9</h2>
                <?php
                function urlConstructor($str)
                {
                    $result = translit($str);
                    $result = changeSpaces($result);
                    return $result;
                }
                echo urlConstructor($str1);
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