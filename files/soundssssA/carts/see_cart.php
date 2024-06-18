  <?php
include "../connection_bd.php";
include "../header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Certifique-se de incluir o Bootstrap ou seu próprio CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;

    }

    .container {
      display: flex;
      justify-content: space-between;


    }

    .left-card {
      flex: 1;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table-container {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    .right-card {
      flex-basis: 300px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-bottom: 20px;
    }

    .payment-method {
      margin-bottom: 10px;
    }

    button {
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="left-card">
    <?php
    echo "<br><h1 align='center'> Carrinho</h1><br><br>";

    $id_client = $_SESSION['id_client'];

    echo $id_client;

    echo "<div class='table-container'>
            <table class='table table-hover table-striped' border='1' align='center'>
              <thead>
                <tr>
                  <th scope='col'><b>image</b></th>
                  <th scope='col'><b>Nome</b></th>
                  <th scope='col'><b>Estado</b></th>
                  <th scope='col'><b>Quantidade</b></th>
                  <th scope='col'><b>Preço</b></th>
                  <th scope='col'></th>
                </tr>
              </thead>
              <tbody>";

    $sql = "SELECT carts.ID_CART, products.NAME,products.IMAGE, carts.WAS_PAID, SUM(carts.QUANTITY) AS quantity, SUM(products.PRICE) as price FROM carts INNER JOIN products ON carts.ID_PRODUCT = products.ID_PRODUCT
            WHERE carts.ID_CLIENT='$id_client' AND carts.WAS_PAID = 'not paid'
            GROUP BY products.NAME, carts.WAS_PAID, products.NAME";
    $result = $conn->query($sql);

    $query_total = "SELECT SUM(products.PRICE) AS total FROM carts INNER JOIN products ON carts.ID_PRODUCT = products.ID_PRODUCT
                    WHERE carts.ID_CLIENT='$id_client' AND carts.WAS_PAID = 'not paid'";
    $result_total = $conn->query($query_total);
    $row_total = $result_total->fetch_assoc();
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><img src='" . $row["IMAGE"] . "' alt='" . $row["NAME"] . "' style='max-width: 50px; max-height: 50px;'></td>
                <td>" . $row["NAME"] . "</td>
                <td>" . $row["WAS_PAID"] . "</td>
                <td>" . $row["quantity"] . "</td>
                <td>" . $row["price"] . "€" . "</td>
                <td>" . "<a href='item_delete.php?id=$row[ID_CART]&id_client=$id_client'>Remover</a>" . "</td>" .
             "</tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "Não há itens no seu carrinho...";
    }
    ?>
  </div>
  </div>

  <div class="right-card">
    <h2>Métodos de Pagamento</h2>

    <div class="payment-method">
      <label for="credit-card">Cartão de Crédito</label>
      <input type="radio" id="credit-card" name="payment-method" value="credit-card">
    </div>

    <div class="payment-method">
      <label for="paypal">PayPal</label>
      <input type="radio" id="paypal" name="payment-method" value="paypal">
    </div>

    <!-- Adicione mais métodos de pagamento conforme necessário -->
    
    

   <h2>Total a pagar: <?php echo number_format($row_total['total'], 2, ',', ''); ?>€</h2>

    
   <form action='purchase_complete.php' method='post'>
    <input type='hidden' name='id_client' value='<?php echo $id_client; ?>'>
    <button type='submit'>PAGAR</button>
</form>

  </div>
</div>

</body>
</html>
