
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel-tile">
            <div class="panel-header">
              <h3>Porfil użytkownika Radziu</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 panel-avatar">
                  <img class="img-responsive" src="https://mcapi.ca/avatar/MatisiekPL" alt="avatar">
                </div>
                <div class="col-md-9">
                  <div class="table-header">
                    <h3>Informacje podstawowe</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Nick</td>
                          <td>Radziu</td>
                        </tr>
                        <tr>
                          <td>Level</td>
                          <td>15</td>
                        </tr>
                        <tr>
                          <td>Gildia</td>
                          <td data-toggle="modal" data-target=".faction-modal"><span class="table-link">Fnatic</span></td>
                        </tr>
                        <tr>
                          <td>Kda</td>
                          <td><span class="table-kills">62</span>/<span class="table-deaths">43</span>/<span class="table-assists">15</span></td>
                        </tr>
                        <tr>
                          <td>Pierwsze dołączenie</td>
                          <td>21-09-2017</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="table-header">
                    <h3>Statystyka PvP</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Zabójstwa</td>
                          <td><span class="table-kills">124</span></td>
                        </tr>
                        <tr>
                          <td>Zgony</td>
                          <td><span class="table-deaths">68</span></td>
                        </tr>
                        <tr>
                          <td>Asysty</td>
                          <td><span class="table-assists">10</span></td>
                        </tr>
                        <tr>
                          <td>Ostatnie zabójstwa</td>
                          <td>Matisek98, Euastachy, Jhon Lenon, Iksde_23</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="table-header">
                    <h3 class="">Statystyka PvE</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>Przebyty dystans</td>
                          <td>124km</td>
                        </tr>
                        <tr>
                          <td>Czas online</td>
                          <td>15:24</td>
                        </tr>
                        <tr>
                          <td>Maksymalny poziom</td>
                          <td>68lvl</td>
                        </tr>
                        <tr>
                          <td>Wykopane bloki</td>
                          <td>23425</td>
                        </tr>
                        <tr>
                          <td>Położone bloki</td>
                          <td>63985</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- faction modal -->

  <div class="modal fade faction-modal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Statystyki gildi</h4>
        </div>
        <div class="modal-body">
          <div class="table-header">
            <h3>Fnatic</h3>
          </div>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>Nazwa gildi</td>
                  <td>Fnatic</td>
                </tr>
                <tr>
                  <td>Właściciel</td>
                  <td>Twój_stary</td>
                </tr>
                <tr>
                  <td>Członkowie</td>
                  <td>
                    simhead69, prokarasPL, polskiNeymar, komo1337, Ranger2137_, maksiu12345
                  </td>
                </tr>
                <tr>
                  <td>Moderatorzy</td>
                  <td>simhead69</td>
                </tr>
                <tr>
                  <td>Stworzona</td>
                  <td>26.09.2017</td>
                </tr>
                <tr>
                  <td>Zabójstwa</td>
                  <td><span class="table-kills">2654</span></td>
                </tr>
                <tr>
                  <td>Zgony</td>
                  <td><span class="table-deaths">1354</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
        </div>
      </div>
    </div>
  </div>


  <?php include "footer.php"; ?>
