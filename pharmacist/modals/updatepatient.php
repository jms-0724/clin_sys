<!-- UPDATE -->
<div class="modal fade" tabindex="-1" id="updatePatient">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Patient (#<i id="patID"></i>)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="upPatient">
      <label for="Lastname" class="form-label">Lastname:</label>
      <input type="text" name="up_lname" id="up_lname" class="form-control">
      <label for="" class="form-label">Firstname</label>
      <input type="text" name="up_fname" id="up_fname" class="form-control">
      <label for="" class="form-label">Middlename</label>
      <input type="text" name="up_mname" id="up_mname" class="form-control">
      <label for="" class="form-label">Gender</label>
      <select name="up_gender" id="up_gender" class="form-select">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      <label for="">Age</label>
      <input type="number" name="up_age" id="up_age" class="form-control">
      <div class="mb-3">
      <label for="" class="form-label">Municipality/City</label>
      <select class="form-select" name="up_town" id="up_town">
      <option style="display:none;"></option>
          <option value="Agoo">Agoo</option>
          <option value="Aringay">Aringay</option>
          <option value="Agoo">Agoo</option>
          <option value="Bacnotan">Bacnotan</option>
          <option value="Bagulin">Bagulin</option>
          <option value="Balaoan">Balaoan</option>
          <option value="Bangar">Bangar</option>
          <option value="Bauang">Banuang</option>
          <option value="Burgos">Burgos</option>
          <option value="Caba">Caba</option>
          <option value="Luna">Luna</option>
          <option value="Naguilian">Nagulian</option>
          <option value="Pugo">Pugo</option>
          <option value="City of San Fernando">City of San Fernando</option>
          <option value="San Gabriel">San Gabriel</option>
          <option value="San Juan">San Juan</option>
          <option value="Santo Tomas">Santo Tomas</option>
          <option value="Santol">Santol</option>
          <option value="Sudipen">Sudipen</option>
          <option value="Tubao">Tubao</option>
      </select>
      </div>
      <label for="" class="form-label">Barangay</label>
        <input type="text" name="up_brgy" id="up_brgy" class="form-control">
      <label for="" class="form-label">Contact Number</label>
      <input type="number" name="up_cpnum" id="up_cpnum" class="form-control">
      <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Update Patient</button>
                <button type="reset" class="btn btn-danger" >Clear</button>
</form>
      </div>
</div>
</div>
</div>
</div>