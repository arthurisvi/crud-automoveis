<main class="mt-3">
  <section>
    <div class="mt-3">
      <h3>Excluir automóvel</h3>
      <p>Deseja realmente excluir o automóvel <strong><?= $automobile->descricao ?></strong>?</p>
    </div>
    <div>
      <form method="post">
        <div class="d-flex mt-3">
          <a href="index.php">
            <button type="button" class="btn btn-success">Cancelar</button>
          </a>
          <button type="submit" name="delete_confirm" class="btn btn-danger mx-3">Excluir</button>
        </div>
      </form>

  </section>
</main>