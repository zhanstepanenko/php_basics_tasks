<?php
// variables $a, $b and $operator are defined somewhere above in the code
//$a = 15; $b = 20; $operator = '/';
switch ($operator) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        if ($b == 0) {
            echo 'Cannot divide by zero';
            exit;
        }
        echo $a / $b;
        break;
    case '%':
        if ($b == 0) {
            echo 'Cannot divide by zero';
            exit;
        }
        echo $a % $b;
}
