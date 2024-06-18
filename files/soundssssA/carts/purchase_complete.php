<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Compra Concluída</title>
</head>

<body>
    <?php

    include("../connection_bd.php");
    include("../header.php");
    $IVA = 0.23;
    ?>


    <?php


    // Recupere o id_client da sessão
    $id_client = $_SESSION['id_client'];

    $add_id_transaction = "INSERT INTO transactions() VALUES ()";
    $conn->query($add_id_transaction);
    $transaction_id = $conn->insert_id;
    echo $transaction_id;

    // Marque a compra como paga (isso pode variar dependendo da lógica da sua aplicação)
    $update_query = "UPDATE carts SET WAS_PAID='paid', ID_TRANSACTION = $transaction_id WHERE ID_CLIENT='$id_client' AND WAS_PAID='not paid'";
    $conn->query($update_query);

    // Use a consulta SQL para obter os produtos específicos da transação
    $sql = "SELECT products.NAME, products.IMAGE, carts.QUANTITY, products.PRICE FROM carts INNER JOIN products ON carts.ID_PRODUCT = products.ID_PRODUCT
           WHERE carts.ID_CLIENT='$id_client' AND carts.WAS_PAID = 'paid' AND carts.ID_TRANSACTION = $transaction_id";
    $result = $conn->query($sql);

    $get_total_price = "SELECT SUM(products.PRICE) as price, clientes.ID_CLIENT AS id_client, clientes.NAME as name FROM carts 
     INNER JOIN products ON carts.ID_PRODUCT = products.ID_PRODUCT 
     INNER JOIN clientes ON carts.ID_CLIENT = clientes.ID_CLIENT 
     WHERE carts.ID_CLIENT='$id_client' AND carts.ID_TRANSACTION = $transaction_id
     GROUP BY clientes.ID_CLIENT, clientes.NAME";
    $result_get_total = $conn->query($get_total_price);
    $row_get = $result_get_total->fetch_assoc();
    $total = $row_get['price'];
    $client_name = $row_get['name'];

    $update_purchase_history = "INSERT INTO purchase_history(PURCHASE_DATE, PURCHASE_TIME, ID_CLIENT, TOTAL_PAID, ID_TRANSACTION) VALUES (NOW(), NOW(), '$id_client', '$total', '$transaction_id')";
    $conn->query($update_purchase_history);

    ?>





    <style>
        .container-data-left {

            padding: 8px;
            text-align: left;
        }

        .container-data-end {

            padding: 8px;
            text-align: right;
        }

        .sub-title-container {
            background-color: #f2f2f2;
        }


        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #ffab04;
        }

        .container-fatura {
            background-color: white;
            border-radius: 10px;
            width: 100%;
            margin: 0 auto;
            max-width: 800px;
            padding: 40px;

        }

        .name-logo {
            font-size: 40px;
            font-weight: bold;
            color: #ffab04;
        }
    </style>




    <br><br><br><br><br>
    <div class="container-fatura">


        <div
            style="display: flex; align-items: center; justify-content: center; text-align: center; margin-bottom:40px">
            <div style="width: 100%;  text-align: left; ">
                <p class="name-logo" style="margin: 5px 0;">SoundWave</p>
                <p style="margin: 5px 0;">A melhor loja de equipamentos de som</p>
            </div>
            <div style="width: 100%;  text-align: right;">
                <p style="margin: 5px 0;">Endereço da Empresa</p>
                <p style="margin: 5px 0;">Telefone da Empresa</p>
                <p style="margin: 5px 0;">Email da Empresa</p>
            </div>
        </div>


        <div style="margin: 5px 0; font-weight: bold; font-size:25px">fatura
            <?php echo '#000' . $transaction_id ?>
        </div>
        <div style="border: 1px black solid " style="width: 100%"></div>

        <div style="display: flex; align-items: center; justify-content: center; text-align: center; "
            class="sub-title-container">
            <div style="width: 100%;">
                <p class="container-data-left " style="margin: 5px 0; font-weight: bold; font-size:20px">Produto</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-left "
                    style="margin: 5px 0; margin-left: 35px;font-weight: bold; font-size:20px">Quantidade</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end "
                    style="margin: 5px 0; font-weight: bold; margin-right: 35px;font-size:20px">Preço</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0; font-weight: bold; font-size:20px">Subtotal</p>
            </div>
        </div>
        <div style="border: 1px black solid;  "></div>
        <?php

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div style="display: flex; align-items: center; justify-content: center; text-align: center;">
                <div style="width: 100%;">
                    <p class="container-data-left" style="margin: 5px 0;">' . $row["NAME"] . '</p>
                </div>
                <div style="width: 100%;">
                    <p class="container-data-left" style="margin: 5px 0; margin-left: 45px;">01</p>
                </div>
                <div style="width: 100%;">
                    <p class="container-data-end" style="margin: 5px 0; margin-right: 35px;">' . $row["PRICE"] . '</p>
                </div>
                <div style="width: 100%;">
                    <p class="container-data-end" style="margin: 5px 0;">' . $row["PRICE"] . '</p>
                </div>
              </div>';
            }
        } else {
            echo "<p>Nenhum produto encontrado para esta transação.</p>";
        }
        ?>


        <div style="border: 1px black solid"></div>

        <div style="display: flex; align-items: center; justify-content: center; text-align: center; ">
            <div style="width: 100%;">
                <p class="container-data-left" style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-left" style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0; margin-right: 35px; font-weight: bold;">Subtotal</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;">
                    <?php echo $total ?>€
                </p>
            </div>
        </div>
        <div style="display: flex; align-items: center; justify-content: center; text-align: center; ">
            <div style="width: 100%;">
                <p class="container-data-left" style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-left" style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;margin-right: 35px;  font-weight: bold;">IVA:</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;">
                    <?php echo $IVA ?>%
                </p>
            </div>
        </div>

        <div style="display: flex; align-items: center; justify-content: center; text-align: center; ">
            <div style="width: 100%;">
                <p class="container-data-left" style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-left" style="margin: 5px 0;"></p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;margin-right: 35px;  font-weight: bold;">Total:</p>
            </div>
            <div style="width: 100%;">
                <p class="container-data-end" style="margin: 5px 0;">
                    <?php echo round($total + ($total * $IVA), 2) . "€" ?>
                </p>
            </div>
        </div>

        <br><br><br><br><br>
        <div class="container-end">
            <div style="width: 100%;  text-align: left; ">
                <p class="" style="margin: 5px 0;font-weight: bold; font-size:15px">Donos: Diogo Silva & Gabriel Borozan
                </p>
                <p style="margin: 5px 0;font-weight: bold; font-size:15px">Conta:
                    <?php echo $client_name ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>