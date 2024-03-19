<!-- Modal -->
<div class="modal fade" id="addCheck" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Checkups</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- Body -->
      <form id="chk_form">
        <div class="mb-3">
        <label for="">Patient ID:</label>
        <input type="text" name="chkpat" id="chkpat" class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="">Checkup Number:</label>
        <input type="text" name="chknumber" id="chknumber" class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Months</label>
    <select name="chkmonth" id="chkmonth" class="form-select"  required>
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
    </select>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Day: </label>
    <select name="chkday" id="chkday" class="form-select">
    </select>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Year: </label>
        <input type="number" name="chkyear" id="chkyear" class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Temperature: </label>
    <input type="number" name="temp" id="temp" placeholder="In Celsius" class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Systole:</label>
    <input type="number" name="systole" id="systole" placeholder="in mmHg" class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Diastole:</label>
        <input type="number" name="diastole" id="diastole" placeholder="in mmHg" class="form-control" required>
        </div>
    <div class="mb-3">
    <span class="input-group-text">Symptoms</span>
    <textarea class="form-control" aria-label="With textarea" name="symptoms" id="symptoms" required></textarea>
    </div>
    <div class="mb-3">
    <span class="input-group-text">Remarks</span>
    <textarea class="form-control" aria-label="With textarea" name="ph_remarks" id="ph_remarks" required></textarea>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Checkups</button>
        <button type="reset" class="btn btn-danger">Clear</button>
</form>
      </div>
    </div>
  </div>
</div>