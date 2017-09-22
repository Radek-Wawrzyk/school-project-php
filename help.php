
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="panel-tile">
            <div class="panel-header">
              <h3>Wyślij wiadomość</h3>
            </div>
            <div class="panel-body">
              <form class="form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Temat"/>
                  <span></span>
                </div>
                <div class="form-group">
                  <textarea type="text" class="form-control" rows="4" placeholder="Treść wiadomości" ></textarea>
                  <span></span>
                </div>
                <div class="form-group text-center">
                  <button class="btn btn-accept" type="submit">Wyślij</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col-md-4">
          <div class="panel-tile">
            <div class="panel-header">
              <h3>Pomoc</h3>
            </div>
            <div class="panel-body">
              <p>
                Jeśli masz jakiś problem odnośnie działania serwera, widziałeś kogoś kto oszukuję
                lub działania administracji - Napisz do nas!  Z pewnością odpiszemy na każdą
                wiadomość :)
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include "footer.php"; ?>
