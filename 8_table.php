<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
    <style>
        .warna-baris {
            background-color: salmon;
        }
    </style>
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
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i<=7; $i++) { ?>
            <?php if ($i % 2 == 1) { ?>
                <tr class="warna-baris">
            <?php } else { ?>
                <tr>
            <?php } ?>
                <?php for ($j=1; $j<=7; $j++) { ?>
                    <td><?= "$i,$j"; ?></td>
                <?php } ?>
                </tr>
        <?php } ?>
    </table>
</body>
</html>