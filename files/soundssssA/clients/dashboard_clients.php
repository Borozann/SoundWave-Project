<!DOCTYPE html>
<html lang="en">

<head>
  <title>DashBoard - Clients</title>
</head>

<body>
  <style>
    td {
      font-size: 12px;
    }

  </style>
  <?php
  //Connect BD
  // include 'bootstrap.php';
  include '../connection_bd.php';
  //Get total Clients
  $sql = "SELECT count(*) as total FROM clientes";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $total = $row['total'];
  ?>
  <h1 align=center><b>Clientes</b><br></h1>
  <h2>Total de Registros:
    <?php echo $total ?>
  </h2>
  <!-- Search Cliente -->
  <form action="clients/dashboard_clients_procurar.php" method="post">
    <input type='text' placeholder='Procurar Cliente' autocomplete="off" name='query'>
    <button>Procurar</button><br><br>
    <!-- Show all Clients -->
    <table border=1px align=center>
      <tr>
        <th><b>ID</b></th>
        <th><b>Username</b></th>
        <th><b>Nome</b></th>
        <th><b>Sobrenome</b></th>
        <th><b>Email</b></th>
        <th><b>IP</b></th>
        <th><b>Data de Criação</b></th>
        <th></th>
        <th></th>
      </tr>
      <?php
      $sql = "SELECT * FROM clientes";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
              <td>" . $row["ID_CLIENT"] . "</td>
              <td>" . $row["USERNAME"] . "</td>
              <td>" . $row["NAME"] . "</td>
              <td>" . $row["SURNAME"] . "</td>
              <td>" . $row["EMAIL"] . "</td>
              <td>" . $row["IP"] . "</td>
              <td>" . $row["DATE_CREATION"] . "</td>
              <td>" . "<a class='alterar' href='clients/client_alter.php?id=" . $row['ID_CLIENT'] . "'>Alterar</a>" . "</td>
              <td>" . "<a class='apagar' href='clients/client_delete.php?id=" . $row['ID_CLIENT'] . "'>Apagar</a>" . "</td>" .
            "</tr>";
        }
      } else {
        echo "Não há registros...";
      }
      $conn->close();
      ?>
    </table>
</body>

</html>