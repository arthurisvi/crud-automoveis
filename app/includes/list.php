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
                    <a href = "delete.php?id=' . $automobile->id . '">
                      <button type ="button" class="btn btn-danger">Excluir</button>
                    </a>  
                  </td>
                </tr>';
}
?>

<main class="mt-3">
  <section class="d-flex justify-content-between mb-5">
    <form method="post">
      <div class="form-group d-flex align-items-center">
        <input type="text" class="form-control" name="descricao" placeholder="Descrição">
        <select class="form-select mx-3" name="marca">
          <option selected value="fiat">Fiat</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <button type="submit" class="btn btn-primary" name = "search">Pesquisar</button>
      </div>
    </form>
    <a href="register.php">
      <button class="btn btn-primary">Novo</button>
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
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $results ?>
      </tbody>
    </table>
  </section>

</main>