<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  // Incluir BootStrap
  include "../bootstrap.php";
  ?>
  <title>DashBoard - Categories</title>
</head>

<body>
  <?php
  //Connect BD
  include '../connection_bd.php';
  //Show total Clients
  $sql = "SELECT count(*) as total FROM categories";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $total = $row['total'];
  ?>
  <h1 align=center><br><b>Categorias</b><br></h1>
  <h2>Total de Categorias:
    <?php echo $total ?>
  </h2>
  <!-- Show all Clients -->
  <table class="table table-hover table-striped" border=1px align=center>
    <thead>
      <tr>
        <th scope="col"><b>#</b></th>
        <th scope="col"><b>Nome</b></th>
        <th scope="col">
        </th>
        <th scope="col">
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM categories";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
              <th scope='row'>" . $row["ID_CATEGORY"] . "</th>
              <td>" . $row["NAME"] . "</td>
              <td>" . "<a href='category_alter.php?id=$row[ID_CATEGORY]'>Alterar</a>" . "</td>
              <td>" . "<a href='category_delete.php?id=$row[ID_CATEGORY]'>Apagar</a>" . "</td>" .
            "</tr>";
        }
      } else {
        echo "Não existem categorias...";
      }
      $conn->close();
      ?>
    </tbody>
  </table>
</body>

</html>