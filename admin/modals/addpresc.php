<!-- Modal -->
<div class="modal fade" id="addPres" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Checkups</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- Body -->
      <form id="addPres" autocomplete="off">
        <div class="mb-3">
        <label for="" class="form-label">Checkup_ID</label>
        <input type="text" id="chk_id" name="chk_id"  class="form-control" required>  
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Prescription Medicine</label>
        <input type="text" id="pr_name" name="pr_name"  class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Precription Quantity</label>
        <input type="text" id="pr_quantity" name="pr_quantity"  class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Dosage Needed</label>
        <input type="text" id="pr_dosage" name="pr_dosage"  class="form-control" required>
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Medicine ID</label>
        <input type="text" id="medid" name="medid"  class="form-control" required>
        </div>
        <div>
            <button type="button" id="showMedicines" class="btn btn-secondary">Show Medicines</button>
            <button type="button" id="hideMedicines" class="btn btn-secondary">Hide Medicines</button>
        </div>
        <div id="medTable">
    <table class="table table-striped">
        <thead>
            <th>Medicine ID</th>
            <th>Medicine Name</th>
            <th>Medicine Class</th>
            <th>Quantity</th>
            <th>Actions</th>
        </thead>
        <tbody id="dispMed">

        </tbody>
    </table>
</div>
        <!-- END OF MODAL BODY -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Prescription</button>
        <button type="reset" class="btn btn-danger">Clear</button>
        </form>
      </div>
    </div>
  </div>
</div>