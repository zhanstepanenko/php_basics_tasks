<?php
include '9.php';

switch ($day) {
    case ($day < 1 or $day > 7):
        echo "Неизвестный день";
}