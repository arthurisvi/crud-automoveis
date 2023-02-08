<?php
$results = '';

foreach ($automobiles as $automobile) {
  $results .= '<tr>
                  <td>' . $automobile->descricao . '</td>
                  <td>' . $automobile->placa . '</td>
                  <td>' . $automobile->ano_modelo . '</td>
                  <td>' . $automobile->ano_fabricacao . '</td>
                  <td>' . $automobile->cor . '</td>
                  <td>' . $automobile->km . '</td>
                  <td>' . $automobile->marca . '</td>
                  <td>' . $automobile->preco . '</td>
                  <td>' . $automobile->preco_fipe . '</td>
                  <td>
                    <a href = "edit.php?id=' . $automobile->id . '">
                      <button type ="button" class="btn btn-primary">Editar</button>
                    </a>
                    </td>
                  <td>
                    <a href = "excluir.php?id=' . $automobile->id . '">
                      <button type ="button" class="btn btn-danger">Excluir</button>
                    </a>  
                  </td>
                </tr>';
}
?>

<main class="mt-3">
  <section>
    <a href="register.php">
      <button class="btn btn-primary">Nova vaga</button>
    </a>
  </section>

  <section>
    <table class="table mt-3">
      <thead>
        <tr>
          <th>Descrição</th>
          <th>Placa</th>
          <th>Ano Modelo</th>
          <th>Ano Fabricação</th>
          <th>Cor</th>
          <th>Km</th>
          <th>Marca</th>
          <th>Preço</th>
          <th>Preço Fipe</th>
          <th>Ações</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $results ?>
      </tbody>
    </table>
  </section>

</main>