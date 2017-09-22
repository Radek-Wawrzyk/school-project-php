
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="panel-tile">
            <div class="panel-header">
              <h3 class="text-center">Ostatnie logi</h3>
            </div>
            <div class="panel-body">
              <p>Obok znajdują się najnowsze logi wykonywane na stronie </p>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>IP</th>
                  <th>Opis</th>
                  <th>Data</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>123.12.45.254</td>
                  <td>Dodał nowy numer</td>
                  <td>25.10.2017</td>
                </tr>
                <tr>
                  <td>192.168.1.10</td>
                  <td>Dodał komentarz</td>
                  <td>25.10.2017</td>
                </tr>
                <tr>
                  <td>182.143.24.156</td>
                  <td>Zalogował się do panelu</td>
                  <td>24.10.2017</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel-tile">
            <div class="panel-header">
              <h3 class="text-center">Aktualności</h3>
            </div>
            <div class="panel-body">
              <p>Dnia 26.08.2017 wyszła wersja afla 0.1v strony i panelu zarządzającego TeleNumer. Prace nad rozwojem wciąż trwają</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="panel-tile">
            <canvas class="panel-chart" id="log-chart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php"; ?>
