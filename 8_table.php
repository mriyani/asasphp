<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>

    <table border="1" cellpadding="10" cellspacing="1" bgcolor="salmon">
        <tr>
            <th>Nama</th>
            <th>No.NDP</th>
            <th>No.IC</th>
        </tr>
        <tr>
            <td>Aiman</td>
            <td>8080</td>
            <td>1234</td>
        </tr>
    </table>
    <br>
    <table border="1" cellpadding="10" cellspacing="0" bgcolor="salmon">
        <?php 
            for ($i=1; $i<=3; $i++) {
                echo "<tr>";
                for ($j=1; $j<=5; $j++) {
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>