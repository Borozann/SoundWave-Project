<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .custom-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 400px;
      max-width: 100%;
      transition: transform 0.3s ease;
    }

    .custom-card:hover {
      transform: scale(1.05);
    }

    .card-header {
      background-color: #3498db;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .card-content {
      padding: 20px;
    }

    .card-content p {
      margin: 0;
      color: #555;
    }
  </style>
</head>
<body>

  <div class="card-container">
    <div class="custom-card">
      <div class="card-header">
        <h2>Título do Card 1</h2>
      </div>
      <div class="card-content">
        <p>Data: [Inserir Data]</p>
        <p>Local: [Inserir Local]</p>
        <p>Descrição: [Inserir Breve Descrição]</p>
        <p>Horário: [Inserir Horário]</p>
        <p>Contato: [Inserir Informações de Contato]</p>
        <p>Website: [Inserir Website, se aplicável]</p>
        <p>Notas Adicionais: [Inserir Notas Adicionais]</p>
      </div>
    </div>

    <div class="custom-card">
      <div class="card-header">
        <h2>Título do Card 2</h2>
      </div>
      <div class="card-content">
        <p>Data: [Inserir Data]</p>
        <p>Local: [Inserir Local]</p>
        <p>Descrição: [Inserir Breve Descrição]</p>
        <p>Horário: [Inserir Horário]</p>
        <p>Contato: [Inserir Informações de Contato]</p>
        <p>Website: [Inserir Website, se aplicável]</p>
        <p>Notas Adicionais: [Inserir Notas Adicionais]</p>
      </div>
    </div>
  </div>

</body>
</html>