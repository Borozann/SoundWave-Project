<!DOCTYPE html>
<html lang="en">

<head>
  <title>DashBoard - C.Query</title>
</head>

<body>
  <?php
  //Connect BD
  include '../connection_bd.php';
  $pesquisa = $_POST['query'];

  //Get total Clients
  $sql = "SELECT count(*) as total FROM clientes WHERE ID_CLIENT = '$pesquisa' OR USERNAME = '$pesquisa' OR
    NAME = '$pesquisa' OR SURNAME = '$pesquisa' OR EMAIL = '$pesquisa' OR DATE_CREATION = '$pesquisa'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $total = $row['total'];
  ?>
  <h1 align=center>Pesquisar por "<?php echo $pesquisa ?>"<br><br></h1>
  <h2>Total de Registros:
    <?php echo $total ?>
  </h2>

  <!-- Show all Clients -->
  <table border=1px align=center>
    <tr>
      <td><b>ID</b></td>
      <td><b>Username</b></td>
      <td><b>Nome</b></td>
      <td><b>Sobrenome</b></td>
      <td><b>Email</b></td>
      <td><b>Password</b></td>
      <td><b>Data de Criação</b></td>
      <td></td>
      <td></td>
    </tr>
    <?php
    $sql = "SELECT * FROM clientes WHERE ID_CLIENT = '$pesquisa' OR USERNAME = '$pesquisa' OR
         NAME = '$pesquisa' OR SURNAME = '$pesquisa' OR EMAIL = '$pesquisa' OR DATE_CREATION = '$pesquisa'";
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
              <td>" . $row["PASSWORD"] . "</td>
              <td>" . $row["DATE_CREATION"] . "</td>
              <td>" . "<a href='Pag_Alterar.php'>Alterar</a>" . "</td>
              <td>" . "<a href='Delete.php'>Apagar</a>" . "</td>" .
          "</tr>";
      }
    } else {
      echo "Não há registros...";
    }
    $conn->close();
    ?>
  </table>
  <h3><a href="../dashboard_permanete.php">⟵Voltar para DashBoard Clientes<h3>
</body>

</html>