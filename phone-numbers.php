
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Imię</th>
                  <th>Nr telefonu</th>
                  <th>Opis</th>
                  <th>Edycja</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jan Paweł II</td>
                  <td>+48 666 666 666</td>
                  <td>Lubi małe dzieci z warkoczykami</td>
                  <td>
                    <i class="fa fa-pencil" data-toggle="modal" data-target=".modal" aria-hidden="true"></i>
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <td>Twój stary</td>
                  <td>+48 696 969 696</td>
                  <td>Żałuje, że nie urdziła mu się córka</td>
                  <td>
                    <i class="fa fa-pencil" data-toggle="modal" data-target=".modal" aria-hidden="true"></i>
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <td>Rusio to chuj xD</td>
                  <td>+48 322 456 135</td>
                  <td>Pies go jebał xD</td>
                  <td>
                    <i class="fa fa-pencil" data-toggle="modal" data-target=".modal" aria-hidden="true"></i>
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-5">
          <div class="panel-tile">
            <div class="panel-header">
              <h3 class="text-center">Numery telefonów</h3>
            </div>
            <div class="panel-body">
              <p>Znajduje się tu baza telefonów komórkowych oraz stacjonarnych wraz z nazwami użytkowników</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edycja</h4>
        </div>
        <div class="modal-body">
          <p>Wprowadź dane do edycji</p>
          <form>
            <div class="form-group">
              <input class="form-control" value="Jan Paweł II"/>
              <span></span>
            </div>
            <div class="form-group">
              <input class="form-control" value="+48 666 666 666"/>
              <span></span>
            </div>
            <div class="form-group">
              <textarea class="form-control">Lubi małe dzieci z warkoczykami</textarea>
              <span></span>
            </div>
            <div class="form-group text-center buttons-modal">
              <button class="btn btn-accept" type="submit">Akceptuj</button>
              <button class="btn btn-decline" data-dismiss="modal">Odrzuć</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Zamknij</button>
        </div>
      </div>

    </div>
  </div>


  <?php include "footer.php"; ?>
