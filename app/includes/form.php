<main class="mt-3">
  <section>
    <div class="mt-3">
      <h3>Dados cadastrais</h3>
    </div>
    <div>
      <form method="post">

        <div class="d-flex">
          <div class="col-md-3">
            <label>Descrição</label>
            <input type="text" name="descricao" class="form-control" value="<?= $automobile->descricao ?>">
          </div>
          <div class="col-md-2 mx-2">
            <label>Placa</label>
            <input type="text" name="placa" class="form-control" value="<?= $automobile->placa ?>">
          </div>
          <div class="col-md-2">
            <label>Ano Modelo</label>
            <input type="number" name="ano_modelo" class="form-control" maxlength="4" value="<?= $automobile->ano_modelo ?>">
          </div>
          <div class="col-md-2 mx-2">
            <label>Ano Fabricação</label>
            <input type="number" name="ano_fabricacao" class="form-control" maxlength="4" value="<?= $automobile->ano_fabricacao ?>">
          </div>
          <div class="col-md-2">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control" value="<?= $automobile->cor ?>">
          </div>
        </div>

        <div class="d-flex mt-3">
          <div class="col-md-2">
            <label>KM</label>
            <input type="text" name="km" class="form-control" value="<?= $automobile->km ?>">
          </div>
          <div class="col-md-2 mx-2">
            <label>Marca</label>
            <select class="form-select" name="marca">
              <option selected value="fiat">Fiat</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-2">
            <label>Preço</label>
            <input type="text" name="preco" class="form-control" value="<?= $automobile->preco ?>">
          </div>
          <div class="col-md-2 mx-2">
            <label>Preço FIPE</label>
            <input type="text" name="preco_fipe" class="form-control" value="<?= $automobile->preco_fipe ?>">
          </div>
        </div>
    </div>
    <div class="mt-3">
      <h3>Componentes Adicionais</h3>
    </div>

    <div class="d-flex mt-5">
      <button type="submit" class="btn btn-success">Salvar</button>
      <a href="index.php">
        <button class="btn btn-danger mx-3">Cancelar</button>
      </a>
    </div>

    </form>

  </section>
</main>