<?php
include "../connection_bd.php";
include "../bootstrap.php";

session_start();
$id_transaction = $_POST["transaction"];
$id_client = $_SESSION["id_client"];


$query_cart = "SELECT * FROM carts WHERE ID_CLIENT='$id_client' AND ID_TRANSACTION='$id_transaction'";
echo "<br><br><h1 align=center>Compra Nº #000$id_transaction</h1><br><br><br>";
$result_cart = $conn->query($query_cart);

echo "<h2><a href='../purchase_historys/see_purchase.php'>Voltar</a></h2>";

?>
<table class="table table-hover table-striped" border=1px align=center>
    <thead align=left>
        <tr>
            <th scope="col"><b>Nome</b></th>
            <th scope="col"><b>Imagem</b></th>
            <th scope="col"><b>Preço</b></th>
            <th scope="col"><b>Descrição</b></th>
        </tr>
    </thead>
    <tbody align=left>
        <?php
        if ($result_cart->num_rows > 0) {
            while ($row_cart = $result_cart->fetch_assoc()) {
                $what_product = $row_cart['ID_PRODUCT'];
                $query_product = "SELECT * FROM products WHERE ID_PRODUCT = '$what_product'";
                $result_product = $conn->query($query_product);
                $row_product = $result_product->fetch_assoc();
                echo "<tr>
                <td>" . $row_product['NAME'] . "</td>
                <td><img src='../products/" . $row_product['IMAGE'] . "'style='width:100px;'></td></td>
                <td>" . $row_product['PRICE'] . "€</td>
                <td>" . $row_product['DESCRIPTION'] . "</td>
                </tr>";
            }
        }
        ?>
    </tbody>
</table>