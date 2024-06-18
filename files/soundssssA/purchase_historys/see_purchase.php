<?php
include "../connection_bd.php";
include "../bootstrap.php";

session_start();
$id_client = $_SESSION["id_client"];

echo "<br><br><h1 align=center>Histórico De Compras</h1><br><br><br>";

$query_cart = "SELECT * FROM purchase_history WHERE ID_CLIENT='$id_client'";
$result = $conn->query($query_cart);
?>

<h2><a href="../">Voltar</a></h2>

<table class="table table-hover table-striped" border=1px align=center>
    <thead>
        <tr>
            <th scope="col"><b>Data</b></th>
            <th scope="col"><b>Hora</b></th>
            <th scope="col"><b>Total Pago</b></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row_cart = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row_cart['PURCHASE_DATE'] . "</td>
                <td>" . $row_cart['PURCHASE_TIME'] . "</td>
                <td>" . $row_cart['TOTAL_PAID'] . "</td>
                <td>
                    <form action='items_purchase.php' method='post'>
                        <input type='hidden' name='transaction' value='" . $row_cart['ID_TRANSACTION'] . "'>
                        <input type='submit' value='Mostrar compra'>
                    </form>
                </td>                
                </tr>";
            }
        }
        ?>
    </tbody>
</table>