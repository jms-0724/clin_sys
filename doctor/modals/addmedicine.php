<!-- Modal -->
<div class="modal fade" id="addMed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Medicines</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="formMedicine">
  <label for="medname" class="form-label">Medicine Name</label>
  <input type="text" name="medname" id="medname" class="form-control" required>
  <label for="mclass"  class="form-label">Medicine Type</label>
  <select name="mclass" id="mclass" class="form-select">
    <option value="Antipyretic">Antipyretic</option>
    <option value="Analgesic">Analgesic</option>
    <option value="Antibiotic">Antibiotic</option>
    <option value="Antacid">Antacid</option>
    <option value="Antihistamine">Antihistamine</option>
    <option value="NSAID">NSAID</option>
    <option value="Antihelmenthic">Antihelmenthic</option>
    <option value="Antifungal">Antifungal</option>
  </select>
  <label for="quantity"  class="form-label">Quantity</label>
  <input type="number" name="quantity" id="quantity" class="form-control" required>

  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Medicines</button>
        <button type="reset" class="btn btn-danger">Clear</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>