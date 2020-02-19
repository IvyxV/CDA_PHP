<html>

<head>

</head>

<body>

    <?php
    $i = -1;
    $j = -1;
    echo '<table>';
    echo '<tr>';
    while ($j++ < 13) {
        echo '<td>' . ($j - 1) . '</td>';
    }
    echo '</tr>';
    $j = -1;
    while ($i++ < 12) {
        echo '<tr>';
        echo '<td>' . $i . '</td>';
        while ($j++ < 12) {
            echo '<td>' . ($i * $j) . '</td>';
        }
        $j = -1;
        echo '</tr>';
    }
    echo '</table>';
    ?>
    <style>
        table,
        tr,
        td {
            border: solid black 1px;
        }
    </style>
</body>

</html>