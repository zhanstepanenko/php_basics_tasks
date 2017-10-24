<?php
include "2.php";

if ($age >= 18 and $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
} elseif ($age >= 0 and $age <= 17) {
    echo "Вам еще рано работать";
} elseif ($age < 0 or !is_int($age)) {
    echo "Неизвестный возраст";
}