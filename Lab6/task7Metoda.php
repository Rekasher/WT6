<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>General</title>
    <style>
        .menu
        {
            display: block;
            padding: 5px;
            text-align: center;
            list-style-type: none;
            background: #000000;
        }
        .menu li
        {
            margin: 10px;
            background: #272727;
            padding: 5px;
            font-family: 'Noto Serif';
        }
        .menu li:hover
        {
            background: #CD214F;
        }
        .menu a
        {
            font-size: 32px;
            display: block;
            text-decoration: none;
            color: #ffffdd;
        }

        table{
            margin: 20px auto;
            border: 2px black solid;
            width: 1200px;
            text-align: left;
        }

        table tr{
            text-align: center;
        }

        table tr:first-child{
            background: #CD214F;
            color: #ffffdd;
            font-size: 18px;
        }
        table td {
            padding: 5px;
        }
    </style>
</head>
<body>
<ul class="menu">
    <li>
        <a href="../lab5/generalTask.php">Lab5 General</a>
    </li>
    <li>
        <a href="../lab5/task5Metoda.php">Lab5 Individual</a>
    </li>
    <li>
        <a href="../lab3/task1.php">task1</a>
    </li>
    <li>
        <a href="../lab3/task7.php">task7</a>
    </li>
</ul>
</body>
</html>



<?php

setcookie("visitedSites[1]", "http://192.168.159.129/labsVT/Lab6/task7Metoda.php");

echo "<table rules='all'>
        <tr>
            <td>Site link</td>
        </tr>";

if (isset($_COOKIE["visitedSites"])) {
    foreach ($_COOKIE["visitedSites"] as $name => $value) {
        echo "<tr>
                <td>".$value."</td>
              </tr>";
    }
}

echo "</table>";


