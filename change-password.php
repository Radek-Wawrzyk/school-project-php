
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel-tile">
            <div class="panel-header">
              <h3 class="text-center">Zmiana hasła</h3>
            </div>
            <div class="panel-body">
              <form>
                <label>Wprowadź dane do edycji</label>
                <div class="form-group">
                  <input class="form-control" placeholder="Stare hasło" type="password" />
                  <span></span>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Nowe hasło" type="password" />
                  <span></span>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Potwierdź hasło" type="password" />
                  <span></span>
                </div>
                <div class="form-group text-center buttons-modal">
                  <button class="btn btn-accept" type="submit">Akceptuj</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include "footer.php"; ?>
