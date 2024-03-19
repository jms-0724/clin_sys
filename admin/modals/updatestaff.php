<div class="modal fade" tabindex="-1" id="updateStaff">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">UPDATE User #<i id="uID"></i></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="upStaff">
            <div class="form-group">
                <label for="u_uname" class="form-label">Username</label>
                <input type="text" name="u_uname" id="u_uname" class="form-control" required>
            </div>
                <div class="form-group">
                <label for="u_pword" class="form-label">Password</label>
                <input type="password" name="u_pword" id="u_pword" placeholder="Password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="u_ulevel" class="form-label">Userlevel</label>
                <select name="u_ulevel" id="u_ulevel" class="form-select">
                  <option style="display:none" disabled selected value> </option>
                  <option value="Doctor">Doctor</option>
                  <option value="Pharmacist">Pharmacist</option>
                </select>
              </div>
              <div class="form-group">
                <label for="u_lname" class="form-label">Lastname</label>
                <input type="text" name="u_lname" id="u_lname" placeholder="Lastname" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="u_fname" class="form-label">Firstname</label>
                <input type="text" name="u_fname" id="u_fname" placeholder="Firstname" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="u_mname"  class="form-label">Middlename</label>
                <input type="text" name="u_mname" id="u_mname" placeholder="Middlename" class="form-control" required>
              </div>
      </div>
      <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Update</button>
                <button type="reset" class="btn btn-danger" >Clear</button>
</form>
      </div>
    </div>
  </div>
</div>
</div>