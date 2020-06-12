     <style>@import url("../public/css/liste_joueurs.css");</style>
     
<div class="modal text-center" id="myModal">
      <div class="modal-dialog">
          <div class="modal-content">


              <div class="modal-header">
                  <h4 class="modal-title">Modify</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>


              <div class="modal-body">
                  <form>
                      <div class="form-group">
                          <input type="hidden" class="form-control" id="idU" name="idu">
                      </div>
                      <div class="form-group">
                          <label for="fn">Firstname</label>
                          <input type="text" class="form-control" id="firstname" name="firstname">
                      </div>
                      <div class="form-group">
                          <label for="ln">Lastname</label>
                          <input type="text" class="form-control" id="lastname" name="lastname">
                      </div>
                      <div class="form-group">
                          <label for="ln">Numero</label>
                          <input type="text" class="form-control" id="numero" name="numero">
                      </div>
                  </form>
              </div>


              <div class="modal-footer">
                  <button type="button"  class="btn btn-info" id="modif">Modify</button>

              </div>

          </div>
      </div>
  </div>



<div id="scrollzone" class="col">
    <table class="table table-bordered text-center">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Id</th>
            <th>Modification</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody id="tbody">

        </tbody>
    </table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="../public/js/liste_joueurs.js"></script>
