<!DOCTYPE html>
<html lang="en">

<head>
  <title>DashBoard - Products</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<style>
.add-product {
  border-radius: 50%; /* Define a borda como um círculo perfeito */
  background-color: #4CAF50;
  width: 50px; /* Largura do círculo */
  height: 50px; /* Altura do círculo */
  text-align: center; /* Centraliza o conteúdo horizontalmente */
  line-height: 50px; /* Centraliza o conteúdo verticalmente */
  text-decoration: none;
  color: white;
  display: inline-block; /* Para garantir que o círculo não quebre a linha */
  font-size: 24px; /* Tamanho da fonte do "+" */
}


</style>

<body>
  <?php
  include '../connection_bd.php';

  ?>

  <?php
  function getCategorias($conn)
  {
    $categorias = array();
    $sql = "SELECT ID_CATEGORY, NAME FROM categories";
    $result = $conn->query($sql);
    if ($result) {
      while ($row = $result->fetch_assoc()) {
        $categorias[] = $row;
      }
    }
    return $categorias;
  }

  // Função para buscar os fornecedores do banco de dados
  function getFornecedores($conn)
  {
    $fornecedores = array();
    $sql = "SELECT ID_SUPPLIER, NAME FROM suppliers";
    $result = $conn->query($sql);
    if ($result) {
      while ($row = $result->fetch_assoc()) {
        $fornecedores[] = $row;
      }
    }
    return $fornecedores;
  }

  session_start();

  function getProducts($conn, $search = null)
  {
    $queryCondition = "";
    if ($search) {
      $queryCondition = " WHERE products.ID_PRODUCT LIKE '%$search%' OR 
                              products.NAME LIKE '%$search%' OR 
                              products.PRICE LIKE '%$search%' OR 
                              products.STOCK LIKE '%$search%' OR 
                              categories.NAME LIKE '%$search%' OR 
                              suppliers.NAME LIKE '%$search%'";
    }

    $sql = "SELECT products.ID_PRODUCT, products.NAME AS produto_name, products.PRICE AS preco, products.STOCK AS stock, 
              categories.NAME AS categoria, suppliers.NAME AS fornecedor, COUNT(comments.ID_COMMENT) AS comentarios, 
              ROUND(AVG(rating_stars.RATING),1) AS media FROM products 
              INNER JOIN categories ON products.ID_CATEGORY = categories.ID_CATEGORY 
              INNER JOIN suppliers ON products.ID_SUPPLIER = suppliers.ID_SUPPLIER
              LEFT JOIN comments ON comments.ID_PRODUCT = products.ID_PRODUCT 
              LEFT JOIN rating_stars ON comments.ID_RATING = rating_stars.ID_RATING 
              $queryCondition
              GROUP BY products.ID_PRODUCT";
    $result = $conn->query($sql);
    return $result;
  }

  $categorias = getCategorias($conn); // Chama a função para obter categorias
  $fornecedores = getFornecedores($conn); // Chama a função para obter fornecedores
  $result = getProducts($conn);

  // Verifica se é uma requisição AJAX
  if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $searchQuery = $_POST['query'] ?? '';
    $result = getProducts($conn, $searchQuery);
    ?>
    <table>
      <!-- Cabeçalho da tabela -->
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Stock</th>
        <th>Categoria</th>
        <th>Fornecedor</th>
        <!-- <th>Comentários</th> -->
        <th>Rating</th>
        <th></th>
        <th></th>
        <!-- Outros cabeçalhos de coluna -->
      </tr>
      <!-- Dados da tabela -->
      <?php while ($row_cart = $result->fetch_assoc()): ?>
        <tr id="row_<?php echo $row_cart['ID_PRODUCT']; ?>">
          <td>
            <?php echo $row_cart['ID_PRODUCT']; ?>
          </td>
          <td>
            <span id="name_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['produto_name']; ?>
            </span>
            <input type="text" id="name_input_<?php echo $row_cart['ID_PRODUCT']; ?>"
              value="<?php echo $row_cart['produto_name']; ?>" style="display:none;">
          </td>
          <td>
            <span id="price_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['preco']; ?>
            </span>
            <input type="text" id="price_input_<?php echo $row_cart['ID_PRODUCT']; ?>"
              value="<?php echo $row_cart['preco']; ?>" style="display:none;">
          </td>
          <td>
            <span id="stock_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['stock']; ?>
            </span>
            <input type="text" id="stock_input_<?php echo $row_cart['ID_PRODUCT']; ?>"
              value="<?php echo $row_cart['stock']; ?>" style="display:none;">
          </td>
          <td>
            <span id="categoria_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['categoria']; ?>
            </span>
            <select id="categoria_input_<?php echo $row_cart['ID_PRODUCT']; ?>" style="display:none;">
              <?php
              // Aqui você deve buscar todas as categorias e marcar a atual como selected
              // Supondo que você tenha uma função que retorne um array de categorias
              $categorias = getCategorias($conn);
              foreach ($categorias as $categoria) {
                $selected = ($categoria['ID_CATEGORY'] == $row_cart['ID_CATEGORY']) ? 'selected' : '';
                echo "<option value='{$categoria['ID_CATEGORY']}' {$selected}>{$categoria['NAME']}</option>";
              }
              ?>
            </select>
          </td>
          <td>
            <span id="fornecedor_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['fornecedor']; ?>
            </span>
            <select id="fornecedor_input_<?php echo $row_cart['ID_PRODUCT']; ?>" style="display:none;">
              <?php
              // Mesmo processo para os fornecedores
              $fornecedores = getFornecedores($conn);
              foreach ($fornecedores as $fornecedor) {
                $selected = ($fornecedor['ID_SUPPLIER'] == $row_cart['ID_SUPPLIER']) ? 'selected' : '';
                echo "<option value='{$fornecedor['ID_SUPPLIER']}' {$selected}>{$fornecedor['NAME']}</option>";
              }
              ?>
            </select>
          </td>
          <!-- <td>
            <?php echo $row_cart['comentarios']; ?>
          </td> -->
          <td>
            <?php echo $row_cart['media']; ?>
          </td>
          <td>
            <button class="alterar" id="edit_btn_<?php echo $row_cart['ID_PRODUCT']; ?>"
              onclick="editProduct('<?php echo $row_cart['ID_PRODUCT']; ?>')">Editar</button>
            <button class="salvar" id="save_btn_<?php echo $row_cart['ID_PRODUCT']; ?>"
              onclick="saveProduct('<?php echo $row_cart['ID_PRODUCT']; ?>')" style="display:none;">Salvar</button>
          </td>
          <td>
            <a class="apagar" href="products/products_delete.php?id=<?php echo $row_cart['ID_PRODUCT']; ?>"
              role="button">Apagar</a>
          </td>
          <!-- Outras células da linha -->
        </tr>
      <?php endwhile; ?>
    </table>
    <?php
    $conn->close();
    exit;
  }

  // Para carregamento normal da página
  $result = getProducts($conn);
  ?>

  <h1 align=center><br><b>Produtos</b><br></h1><a class="add-product" href="products/products_create.php">+</a>

  <!-- Campo de Busca -->
  <input class="" type='text' placeholder='Procurar Produto' id='searchQuery'>

  <!-- Tabela de Produtos -->
  <div id="productsTable">
    <table>
      <!-- Cabeçalho da tabela -->
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Stock</th>
        <th>Categoria</th>
        <th>Fornecedor</th>
        <!-- <th>Comentários</th> -->
        <th>Rating</th>
        <th></th>
        <th></th>
        <!-- Outros cabeçalhos de coluna -->
      </tr>
      <!-- Dados da tabela -->
      <?php while ($row_cart = $result->fetch_assoc()): ?>
        <tr id="row_<?php echo $row_cart['ID_PRODUCT']; ?>">
          <td>
            <?php echo $row_cart['ID_PRODUCT']; ?>
          </td>
          <td>
            <span id="name_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['produto_name']; ?>
            </span>
            <input type="text" id="name_input_<?php echo $row_cart['ID_PRODUCT']; ?>"
              value="<?php echo $row_cart['produto_name']; ?>" style="display:none;">
          </td>
          <td>
            <span id="price_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['preco']; ?>
            </span>
            <input type="text" id="price_input_<?php echo $row_cart['ID_PRODUCT']; ?>"
              value="<?php echo $row_cart['preco']; ?>" style="display:none;">
          </td>
          <td>
            <span id="stock_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['stock']; ?>
            </span>
            <input type="text" id="stock_input_<?php echo $row_cart['ID_PRODUCT']; ?>"
              value="<?php echo $row_cart['stock']; ?>" style="display:none;">
          </td>
          <td>
            <span id="categoria_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['categoria']; ?>
            </span>
            <select id="categoria_input_<?php echo $row_cart['ID_PRODUCT']; ?>" style="display:none;">
              <?php
              // Aqui você deve buscar todas as categorias e marcar a atual como selected
              // Supondo que você tenha uma função que retorne um array de categorias
              $categorias = getCategorias($conn);
              foreach ($categorias as $categoria) {
                $selected = ($categoria['ID_CATEGORY'] == $row_cart['ID_CATEGORY']) ? 'selected' : '';
                echo "<option value='{$categoria['ID_CATEGORY']}' {$selected}>{$categoria['NAME']}</option>";
              }
              ?>
            </select>
          </td>
          <td>
            <span id="fornecedor_<?php echo $row_cart['ID_PRODUCT']; ?>">
              <?php echo $row_cart['fornecedor']; ?>
            </span>
            <select id="fornecedor_input_<?php echo $row_cart['ID_PRODUCT']; ?>" style="display:none;">
              <?php
              // Mesmo processo para os fornecedores
              $fornecedores = getFornecedores($conn);
              foreach ($fornecedores as $fornecedor) {
                $selected = ($fornecedor['ID_SUPPLIER'] == $row_cart['ID_SUPPLIER']) ? 'selected' : '';
                echo "<option value='{$fornecedor['ID_SUPPLIER']}' {$selected}>{$fornecedor['NAME']}</option>";
              }
              ?>
            </select>
          </td>
          <!-- <td>
            <?php echo $row_cart['comentarios']; ?>
          </td> -->
          <td>
            <?php echo $row_cart['media']; ?>
          </td>
          <td>
            <button class="alterar" id="edit_btn_<?php echo $row_cart['ID_PRODUCT']; ?>"
              onclick="editProduct('<?php echo $row_cart['ID_PRODUCT']; ?>')">Editar</button>
            <button class="salvar" id="save_btn_<?php echo $row_cart['ID_PRODUCT']; ?>"
              onclick="saveProduct('<?php echo $row_cart['ID_PRODUCT']; ?>')" style="display:none;">Salvar</button>
          </td>
          <td>
            <a class="apagar" href="products/products_delete.php?id=<?php echo $row_cart['ID_PRODUCT']; ?>"
              role="button">Apagar</a>
          </td>
          <!-- Outras células da linha -->
        </tr>
      <?php endwhile; ?>
    </table>
  </div>

  <script>
    document.addEventListener('input', function (e) {
      if (e.target && e.target.id === 'searchQuery') {
        var query = e.target.value;
        fetch('dashboard_products.php', {
          method: 'POST',
          headers: { 'X-Requested-With': 'XMLHttpRequest' },
          body: new URLSearchParams('query=' + query)
        })
          .then(response => response.text())
          .then(data => {
            document.getElementById('productsTable').innerHTML = data;
          })
          .catch(error => console.error('Erro:', error));
      }
    });
    // Função para editar produto
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
      fetch('products_alter_bd.php', {
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
  </script>

</body>

</html>