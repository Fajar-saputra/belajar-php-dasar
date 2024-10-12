<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buat table</title>
    <style>
        table, td, tr{
        border-collapse: collapse;
        border: 1px solid black;
        padding: 10px;
        }

        .warna{
            background-color: hotpink;
        }
    </style>
</head>
<body>
    <h1>Cara buat table dengan for</h1>
    <table>
        <!-- Pengulangan -->
        <?php for ($i=0; $i < 5; $i++) : ?> 
            <?php if ($i % 2 == 0)  : ?>
                <tr class="warna">
            <?php endif; ?>
                <?php for ($j=0; $j < 10; $j++) : ?> 
                    <td> <?php echo "$i,$j" ?></td>
                <?php endfor;?>    
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>