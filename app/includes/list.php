<?php

$nextDisabled = $page + 1 > $totalPages;
$prevDisabled = $page - 1 === 0;

$pages = '';

for ($i = 0; $i < $totalPages; $i++) {
  $pages .= '<li class="page-item"><a class="page-link" href="?page=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
}

$message = '';

if (isset($_GET['status'])) {
  switch ($_GET['status']) {
    case 'success':
      $message = '<div class="alert alert-success">Ação executada com sucesso!</div>';
      break;
    case 'error':
      $message = '<div class="alert alert-danger">Ação não executada!</div>';
      break;
  }
}

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

$results = strlen($results) ? $results : '<tr>
  <td colspan="10" class="text-center">No momento, não existem automóveis cadastrados.</td>
</tr>'
?>

<main class="mt-3">
  <?= $message ?>
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
        <button type="submit" class="btn btn-primary" name="search">Pesquisar</button>
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
          <th>Preço FIPE</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $results ?>
      </tbody>
    </table>
  </section>

  <section class="d-flex flex-row-reverse mt-4">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item <?= $prevDisabled ? 'disabled' : ''  ?>">
          <a class="page-link" href="<?= "?page=" . ($page - '1')  ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?= $pages ?>
        <li class="page-item <?= $nextDisabled ? 'disabled' : ''  ?>">
          <a class="page-link" href="<?= "?page=" . ($page + '1')  ?>" aria-disabled="true" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </section>

</main>