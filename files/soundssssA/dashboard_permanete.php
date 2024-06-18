<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<style>
    <?php include "connection_bd.php";
    session_start();
    ?>

    @font-face {
        font-family: 'Base Neue';
        src: url('Poppins_1/Poppins-Medium.ttf') format('truetype');

    }

    .material-symbols-outlined {
        font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 10,
            'opsz' 24;

        font-size: 40px;

        ;
    }

    .apagar {

        color: red;
        /* Cor do texto */
        text-decoration: none;
        /* Remove o sublinhado dos links */
        font-weight: bold;
        /* Deixa o texto em negrito */
    }


    .alterar {
        color: blue;
        /* Cor do texto */
        text-decoration: none;
        /* Remove o sublinhado dos links */
        font-weight: bold;
        /* Deixa o texto em negrito */
    }

    body {
        font-family: 'Base Neue', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-color: #f4f4f4;
    }

    header {
        background-color: #4CAF50;
        color: white;
        padding: 1em;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 1.5em;
        font-weight: bold;
        color: white;
        text-decoration: none;
    }

    .header-right a {
        color: #fff;
        text-decoration: none;
        margin-left: 20px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        /* Permite que os elementos se ajustem conforme o tamanho da tela */
    }

    .left-nav {
        background-color: #333;
        color: white;
        width: 200px;
        flex-shrink: 0;
        /* Evita que a barra lateral encolha */
        min-height: calc(100vh - 60px);
        height: 100%;
    }

    .left-nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .left-nav li {
        border-bottom: 1px solid #777;
        transition: background-color 0.3s;
    }

    .left-nav li:hover {
        background-color: #666;
    }

    .left-nav a {
        padding: 1em;
        text-decoration: none;
        color: #fff;
        display: block;
    }

    .content {
        flex-grow: 1;
        padding: 2em;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        background-color: #ffffff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    @media screen and (max-width: 600px) {
        .left-nav {
            width: 100%;
            /* Faz a barra lateral ocupar a largura total em telas pequenas */
        }

        .content {
            margin-left: 0;
            /* Remove a margem esquerda em telas pequenas */
        }




    }
</style>

<body>
    <header>
        <a href="index.php" class="logo"> SoundWave-DashBoard</a>
        <div class="header-right">
            <!-- <a style="margin-right: 0;"><span class="material-symbols-outlined">person</span> <?php echo $_SESSION['user']; ?></a> -->

        </div>
    </header>

    <div class="container">
        <nav class="left-nav">
            <ul>
                <li><a href="#" onclick="loadContent('content-1', 'clients/dashboard_clients.php')">Utilizadores</a>
                </li>
                <li><a href="#" onclick="loadContent('content-2', 'products/dashboard_products.php')">Produtos</a></li>
                <li><a href="#" onclick="showContent('content-3')">Opção 3</a></li>
                <!-- Adicione mais opções conforme necessário -->
            </ul>
        </nav>

        <div class="content" id="content-1">
            <!-- O conteúdo da opção 1 será carregado aqui -->
        </div>

        <div class="content" id="content-2" style="display: none;">
            <h1>Conteúdo da Opção 2</h1>
            <p>Texto explicativo para a Opção 2.</p>
        </div>

        <div class="content" id="content-3" style="display: none;">
            <h1>Conteúdo da Opção 3</h1>
            <p>Texto explicativo para a Opção 3.</p>
        </div>
    </div>

    <script>
        function loadContent(contentId, phpFile) {
            // Oculta todos os conteúdos
            document.querySelectorAll('.content').forEach(function (content) {
                content.style.display = 'none';
            });

            // Exibe o conteúdo correspondente à opção selecionada
            document.getElementById(contentId).style.display = 'block';

            // Faz uma requisição AJAX para carregar o conteúdo do arquivo PHP
            fetch(phpFile)
                .then(response => response.text())
                .then(data => {
                    // Insere o conteúdo no elemento de conteúdo
                    document.getElementById(contentId).innerHTML = data;
                    // Se o conteúdo carregado é o de produtos, adiciona o listener de busca
                    if (phpFile === 'products/dashboard_products.php') {
                        addSearchListener();
                        if (typeof initializeTableInteractions === 'function') {
                            initializeTableInteractions();
                        }
                    }
                })
                .catch(error => console.error('Erro ao carregar conteúdo:', error));
        }

        function editProduct(id) {
            // Certifique-se de que os IDs aqui correspondem aos IDs dos seus elementos
            document.getElementById('name_' + id).style.display = 'none';
            document.getElementById('name_input_' + id).style.display = '';

            document.getElementById('price_' + id).style.display = 'none';
            document.getElementById('price_input_' + id).style.display = '';

            document.getElementById('stock_' + id).style.display = 'none';
            document.getElementById('stock_input_' + id).style.display = '';

            document.getElementById('categoria_' + id).style.display = 'none';
            document.getElementById('categoria_input_' + id).style.display = '';

            document.getElementById('fornecedor_' + id).style.display = 'none';
            document.getElementById('fornecedor_input_' + id).style.display = '';

            // Aqui você precisa ter certeza que os IDs estão corretos
            var editBtn = document.getElementById('edit_btn_' + id);
            var saveBtn = document.getElementById('save_btn_' + id);

            if (editBtn && saveBtn) {
                editBtn.style.display = 'none';
                saveBtn.style.display = '';
            } else {
                console.error('Botões de edição não encontrados para o produto com ID:', id);
            }
        }
        // Função para salvar produto
        function saveProduct(id) {
            var newName = document.getElementById('name_input_' + id).value;
            var newPrice = document.getElementById('price_input_' + id).value;
            var newStock = document.getElementById('stock_input_' + id).value;
            var newCategoria = document.getElementById('categoria_input_' + id).value;
            var newFornecedor = document.getElementById('fornecedor_input_' + id).value;

            // Preparando os dados para serem enviados
            var formData = new FormData();
            formData.append('id', id);
            formData.append('name', newName);
            formData.append('price', newPrice);
            formData.append('stock', newStock);
            formData.append('categoria', newCategoria);
            formData.append('fornecedor', newFornecedor);

            // AJAX request
            fetch('products/products_alter_bd.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    console.log(data);

                    // Obter os textos selecionados dos dropdowns para atualizar a visualização
                    var categoriaSelectedText = document.querySelector('#categoria_input_' + id + ' option:checked').text;
                    var fornecedorSelectedText = document.querySelector('#fornecedor_input_' + id + ' option:checked').text;

                    // Atualiza a exibição da tabela com os novos valores
                    document.getElementById('name_' + id).innerText = newName;
                    document.getElementById('price_' + id).innerText = newPrice;
                    document.getElementById('stock_' + id).innerText = newStock;
                    document.getElementById('categoria_' + id).innerText = categoriaSelectedText;
                    document.getElementById('fornecedor_' + id).innerText = fornecedorSelectedText;

                    // Esconde os campos de input e mostra os spans
                    document.getElementById('name_' + id).style.display = '';
                    document.getElementById('name_input_' + id).style.display = 'none';
                    document.getElementById('price_' + id).style.display = '';
                    document.getElementById('price_input_' + id).style.display = 'none';
                    document.getElementById('stock_' + id).style.display = '';
                    document.getElementById('stock_input_' + id).style.display = 'none';
                    document.getElementById('categoria_' + id).style.display = '';
                    document.getElementById('categoria_input_' + id).style.display = 'none';
                    document.getElementById('fornecedor_' + id).style.display = '';
                    document.getElementById('fornecedor_input_' + id).style.display = 'none';
                })
                .catch(error => console.error('Erro:', error));

            // Trocando os botões de volta
            var editBtn = document.getElementById('edit_btn_' + id);
            var saveBtn = document.getElementById('save_btn_' + id);
            editBtn.style.display = '';
            saveBtn.style.display = 'none';
        }

        function addSearchListener() {
            var searchInput = document.getElementById('searchQuery');
            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    var query = this.value;
                    fetch('products/dashboard_products.php', {
                        method: 'POST',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        body: new URLSearchParams('query=' + query)
                    })
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('productsTable').innerHTML = data;
                        })
                        .catch(error => console.error('Erro:', error));
                });
            }
        }
    </script>
</body>

</html>