<?php
    echo '<!DOCTYPE html>
        <html lang = "ru">
        <head>
            <meta charset = "utf-8">
            <title>Лабораторная работа</title>
            <link rel="stylesheet" href="reset.css">
            <link rel="stylesheet" href="style.css">
            <link rel="icon" href="icon.ico">
        </head>
        <body>';
    $isCorrectInput = true;
    foreach ($_POST as $key => $value) {
        if (is_numeric($_POST[$key]) != true)
        {
            echo '<p>Ошибка входных данных!</p><p>Есть мнение, что Вы ввели не цифры...</p>';
            $isCorrectInput = false;
            break;
        }
    }
    if ($isCorrectInput)
    {
        $inputArray = array(0,0,0,0,0,0,0,0,0);
        $i = 0;
        foreach ($_POST as $key => $value) {
            $inputArray[$i] = $value;
            $i++;
        }
        $result = $inputArray[0] * $inputArray[4] * $inputArray[8] + $inputArray[1] * $inputArray[5] * $inputArray[6] + $inputArray[3] * $inputArray[7] * $inputArray[2] - $inputArray[2] * $inputArray[4] * $inputArray[6] - $inputArray[1] * $inputArray[3] * $inputArray[8] - $inputArray[0] * $inputArray[5] * $inputArray[7];
        
        echo '<p>Определитель: '.$result.'</p>';
        $inputArraySize = count($inputArray);
        echo '<p>'.$inputArray[0].' '.$inputArray[3].' '.$inputArray[6].' </p>';
        echo '<p>'.$inputArray[1].' '.$inputArray[4].' '.$inputArray[7].' </p>';
        echo '<p>'.$inputArray[2].' '.$inputArray[5].' '.$inputArray[8].' </p>';
        echo '</body></html>';
    }
?> 
