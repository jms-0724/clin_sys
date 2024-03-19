<!-- Modal -->
<div class="modal fade" id="addPat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Patients</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="formPatient">
      <label for="lname" class="form-label">Lastname</label>
        <input type="text" name="lname" id="lname" class="form-control" required>
        <label for="fname" class="form-label">Firstname</label>
        <input type="text" name="fname" id="fname" class="form-control" required>
        <label for="mname" class="form-label">Middlename</label>
        <input type="text" name="mname" id="mname" class="form-control" required>
        <label for="" class="form-label">Gender
          <div class="form-check">
        <label for="gender" class="form-check-label">
        <input type="radio" name="gender" id="gender" value="Male" class="form-check-input" required>
        Male
    </label>
</div>
<div class="form-check">
<label for="gender" class="form-check-label">
        <input type="radio" name="gender" id="gender" value="Female" class="form-check-input" required>
        Female
    </label>
</div>
<div class="form-check">
<label for="gender" class="form-check-label">
        <input type="radio" name="gender" id="gender" value="Others" class="form-check-input" required>
        Others
    </label>
</div>
        </label>
      <div class="md-3">
      <label for="age" class="form-label">Age</label>
        <input type="number" name="age" id="age" class="form-control" required>
      </div>
        <label for="town" class="form-label" class="form-control">Municipality/City</label>
        <select name="town" id="town" class="form-select">
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
        <label for="brgy" class="form-label">Barangay</label>
        <input type="text" name="brgy" id="brgy" class="form-control" required>
        <label for="cnumber" class="form-label">Contact Number</label>
        <input type="number" name="cnumber" id="cnumber" class="form-control" required>
        <p style="font-size:14px; color: red" id="cpnumalert"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Patients</button>
        <button type="reset" class="btn btn-danger">Clear</button>
        </form>
      </div>
    </div>
  </div>
</div>