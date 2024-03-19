<!-- Modal -->
<div class="modal fade" id="addST" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Staff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form id="addStaff">
  <div class="md-3">

  </div>
  <div class="md-3">
  <label for="uname" class="form-label">Username</label>
    <input type="text" name="uname" id="uname" placeholder="Username" class="form-control" required>
    </div>
    <div class="md-3">
    <label for="uname" class="form-label">Password</label>
    <input type="password" name="pword" id="pword" class="form-control" placeholder="Password" required>
    </div>
    <div class="md-3">
    <label for="" class="form-label">UserLevel</label>
    <select name="ulevel" id="ulevel" class="form-select">
        <option style="display:none" disabled selected value> </option>
        <option value="Doctor">Doctor</option>
        <option value="Pharmacist">Pharmacist</option>
    </select>
    </div>
    <div class="md-3">
    <label for="lname" class="form-label">Lastname</label>
    <input type="text" name="lname" id="lname" class="form-control" placeholder="Lastname" required>
    </div>
    <div class="md-3">
    <label for="fname" class="form-label">Firstname</label>
    <input type="text" name="fname" id="fname" class="form-control" placeholder="Firstname" required>
    </div>
    <div class="md-3" class="form-label">
    <label for="mname">Middlename</label>
    <input type="text" name="mname" id="mname" class="form-control" placeholder="Middlema,e" required>
    </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ADD</button>
        <button type="reset" class="btn btn-danger">Clear</button> 
        </form>
      </div>
    </div>
  </div>
</div>