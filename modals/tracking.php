  <div class="modal-content">
    <div class="modal-header">
      <span class="closetracking">&times;</span>
      <h2>Tracking form</h2>
    </div>

    <div class="modal-body tracking">
      <div id="tablita">
      </div>
  </div>
<hr>
<p style="padding-left:20px;">Save Tracking in the selected Campain: "<span id="campanha"></span> "</p>

  <form class="forma2" action="modals/trackingadd.php" method="post">
    <input type='hidden' name='id_campanha' id="idcampanha" value=''>

    <div class='form-group2'>
    <label for='segdate'>Date Tracking / Fecha de seguimiento: </label>
    <input type='date' id='datepickertrack' class='form-control2' name ='segdate'></div>

    <div class='form-group2'>
    <label for='segcoment'>Comment / Comentario: </label>
    <textarea class='form-control2' id='segcoment' name='segcoment' rows='10'></textarea>
    </div>

    <div class='modal-footer'>

          <div class='botone'>
          <button type='submit'>SAVE</button>
          </div>
        </form>
    </div>
