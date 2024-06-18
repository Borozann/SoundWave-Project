<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rating {
            --rating: 0;
            font-size: 30px;
            color: #666;
        }

        .rating::before {
            content: '★★★★★';
            letter-spacing: 3px;
            background: linear-gradient(90deg, #ffa723 calc(var(--rating) * 20%), #666 calc(var(--rating) * 20%));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Regras para diferentes classificações */
        .rating[data-rating="0"] {
            --rating: 0;
        }

        .rating[data-rating="1"] {
            --rating: 1;
        }

        .rating[data-rating="2"] {
            --rating: 2;
        }

        .rating[data-rating="3"] {
            --rating: 3;
        }

        .rating[data-rating="4"] {
            --rating: 4;
        }

        .rating[data-rating="5"] {
            --rating: 5;
        }





        button2 {
            width: 50px;
            outline: none;
            cursor: pointer;
            border: none;
            padding: 5px;
            margin-top: 5px;
            margin-bottom: 5px;
            font-family: inherit;
            font-size: inherit;
            position: relative;
            display: inline-block;
            letter-spacing: 0.05rem;
            font-weight: bold;
            font-size: 17px;
            border-radius: 500px;
            overflow: hidden;
            background: green;
            color: ghostwhite;
        }

        button2 span {
            position: relative;
            z-index: 10;
            transition: color 0.4s;
        }

        button2:hover span {
            color: black;
        }

        button2::before,
        button2::after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        button2::before {
            content: "";
            background: #222;
            width: 120%;
            left: -10%;
            transform: skew(30deg);
            transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
        }

        button2:hover::before {
            transform: translate3d(100%, 0, 0);
        }





        .card {
            width: 210px;
            height: 315px;
            border-radius: 5px;
            background: #f5f5f5;
            position: relative;
            padding: 5px;
            border: 2px solid #c3c6ce;
            transition: 0.5s ease-out;
            overflow: visible;
            margin: 20px;
            margin-left: 20px;
        }

        .card-details {
            color: black;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card-button2 {
            transform: translate(-50%, 125%);
            width: 60%;
            border-radius: 1rem;
            border: none;
            background-color: #008bf8;
            color: #fff;
            font-size: 10px;
            padding: .5rem 1rem;
            position: absolute;
            left: 50%;
            bottom: 0;
            opacity: 0;
            transition: 0.3s ease-out;
        }

        .text-body {
            color: rgb(134, 134, 134);
            margin-bottom: 10px;
        }

        .text-title {
            font-size: 1.5em;
            font-weight: bold;
        }


        .price-container {
            position: relative;
            width: 180px;
            max-height: 100px;
            overflow: hidden;
            /* Oculta qualquer conteúdo que ultrapasse a altura da .price-container */
            word-wrap: break-word;
            margin-top: 5px;


        }

        .name-container {
            position: relative;
            width: 180px;
            height: 100px;
            overflow: hidden;
            /* Oculta qualquer conteúdo que ultrapasse a altura da .price-container */
            word-wrap: break-word;
            margin-top: 5px;
        }

        .name-container p {
            overflow: hidden;
            margin-top: 0px;
        }

        .price {
            font-size: 1.2em;
            font-weight: bold;
            color: #008bf8;
            /* Cor do preço pode ser ajustada conforme necessário */
            margin-top: 15px;
            /* Adicionado para espaçamento entre o nome e o preço */
            margin-left: 50px;
        }

        .card:hover {
            border-color: #ffab04;
            box-shadow: 0 4px 1px 0 rgba(0, 0, 0, 0.25);
        }

        .custom-container {
            display: flex;
            align-items: center;
        }

        .custom-green-ball {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .custom-text {
            font-size: 16px;
            font-family: Arial, sans-serif;
            font-weight: bolder;
        }

        /*
        .card:hover .card-button {
            transform: translate(-50%, 50%);
            opacity: 1;
        } */


        /* ul {
    list-style-type: none;
}
        
li::marker {
    content: '\2022';  Código Unicode para o marcador de bola (pode variar) 
    color: #4CAF50;  Cor verde para a bola 
    font-size: 1.5em;  Ajuste o tamanho conforme necessário 
    margin-right: 10px;  Espaçamento entre a bola e o conteúdo da lista
    vertical-align: middle; Alinha verticalmente a bola com o conteúdo do item da lista 
} * */
    </style>
</head>

<body>
    <?php
    include "connection_bd.php";
    $products_query = "SELECT * FROM products";
    $result_product = $conn->query($products_query);

    $clients_query = "SELECT ID_CLIENT FROM clientes";
    $result_clients = $conn->query($clients_query);

    if ($result_product->num_rows > 0) {
        $counter = 0;
        while ($row_cart = $result_product->fetch_assoc()) {
            // Colocar id do produto em variavel
            $id_product = $row_cart['ID_PRODUCT'];
            // Your PHP code to check stock and set $has_stock
            // ...
    
            // HTML structure for displaying product details in a card
            // echo $row['ID_PRODUCT'];
            echo '<div class="card">';
            echo '<div class="card-details">';

            echo '<a href="product_page.php?id=' . $row_cart['ID_PRODUCT'] . '"><img style="width:100%; height:auto; max-height:120px; object-fit: contain; background-color:black;" src="products/' . $row_cart['IMAGE'] . '" alt="' . $row_cart['NAME'] . '"></a>';

            echo '<div class="name-container" style="background-color:light-grey">';
            echo '<p class="custom-text">' . $row_cart['NAME'] . '</p>';
            echo '</div>';






            echo '<div class="price-container" >';
            echo '<a class="custom-text">' . $row_cart['PRICE'] . "€" . '</a>';
            echo '</div>';


            // echo '<div class="price-container" style="background-color:green">';
            // echo '<a class="text-body">' . $row['PRICE'] . '</a>';
            // echo '</div>'; 
    



            if ($row_cart['STOCK'] > 0) {
                echo '<div class="custom-container price-container">';
                echo '<div class="custom-green-ball" style="background-color:green;"></div>';
                echo '<div class="custom-text">Em stock';
                echo '</div>';
                echo '</div>';
                $has_stock = True;
            } else {
                echo ' <div class="custom-container price-container">';
                echo '<div class="custom-green-ball" style="background-color:red;"></div>';
                echo '<div class="custom-text">Sem stock';
                echo '</div>';
                echo '</div>';
                $has_stock = False;
            }

            echo '</div>';


            echo '<div style="display: flex; align-items: center;">';

            if (isset($_SESSION['id_client'])) {
                echo "<form action='carts/add_cart_bd.php' method='post'>";
                echo "<input type='hidden' name='id_product' value='" . $row_cart['ID_PRODUCT'] . "'>";
                echo "<input type='hidden' name='id_client' value='" . $_SESSION['id_client'] . "'>";
            } else {
                echo "<form action='sing_up.php'>";
            }
            if ($has_stock) {
                echo '<button class="button2" style="margin-right: 10px; background-color: green;">';
                echo '<span>';

                echo '<svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                      </svg></span></button>';
            } else {
                echo '<button class="button2" disabled style="margin-right: 10px; background-color: red;">';

                echo '<span>';
                echo '<svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                      </svg></span></button>';

            }



            echo "</form>";

            $query_rating = "SELECT ROUND(AVG(rating_stars.RATING),0) AS media 
                 FROM products 
                 LEFT JOIN comments ON comments.ID_PRODUCT = products.ID_PRODUCT 
                 LEFT JOIN rating_stars ON comments.ID_RATING = rating_stars.ID_RATING 
                 WHERE products.ID_PRODUCT = '$id_product'";

            $result_rating = $conn->query($query_rating);

            if ($result_rating && $result_rating->num_rows > 0) {
                $row_rating = $result_rating->fetch_assoc();
                $rating = $row_rating["media"];  // Use $row_rating, not $row
            }
            echo "<div class='rating' data-rating='$rating'></div>";



            echo '</div>';



            echo '</div>';
            // echo '<p>';
            // if ($row['STOCK'] > 0) {
            //     echo "Em Stock";
            //     $has_stock = True;
            // } else {
            //     echo "Sem Stock";
            //     $has_stock = False;
            // }
            // echo '</p>';
    


            // Verificar se há estoque
    

            echo "</form>";
            // Fechar as tags HTML do cartão
    
            // Adicionar uma quebra de linha entre cada cartão de produto
        }
    } else {
        echo 'Nenhum produto encontrado.';
    }
    ?>

</body>

</html>