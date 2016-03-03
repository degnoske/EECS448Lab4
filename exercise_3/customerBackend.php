<html>
<head>
    <title>This Store Sucks</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php

        $total = 0;
        $q_glac = $_GET['glacier'];
        $q_sew = $_GET['sewage'];
        $q_bath = $_GET['bath'];
        $q_ship = $_GET['ship'];
    ?>

<table>
    <tr>
        <td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td>
    </tr>
    <tr>
        <td>Item 1</td><td><?= $q_glac; ?></td><td>$20.00</td><td>$<?= $q_glac * 20.00; ?></td>
    </tr>
    <tr>
        <td>Item 2</td><td><?= $q_sew; ?></td><td>$5.00</td><td>$<?= $q_sew * 5.00; ?></td>
    </tr>
    <tr>
        <td>Item 3</td><td><?= $q_bath; ?></td><td>$10.00</td><td>$<?= $q_bath * 10.00; ?></td>
    </tr>
    <tr>
        <td>Shipping</td>
        <td>
            <?php
                switch($q_ship) {
                    case 0:
                        echo 'Free';
                        break;
                    case 5:
                        echo '3 Day';
                        break;
                    case 50:
                        echo 'Overnight';
                        break;
                }

            ?>
        </td>
    </tr>
    <tr>
        <td>Total Cost</td><td>$<?= $q_ship + $q_glac * 20.00 + $q_sew * 5.00 + $q_bath * 10.00; ?></td>
    </tr>
</table>
</body>
</html>

