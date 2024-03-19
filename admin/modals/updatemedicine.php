<div class="modal fade" tabindex="-1" id="updateMed">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Medicine (#<i id="medID"></i>)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateMeds">
          <label for="" class="form-label">Medicine Name:</label>
            <input type="text" name="m_med" id="m_med" placeholder="mname" class="form-control">
            <label for="" class="form-label">Medicine Type</label>
            <select name="m_class" id="m_class" class="form-select">
                <option value="Antipyretic">Antipyretic</option>
                <option value="Analgesic">Analgesic</option>
                <option value="Antibiotic">Antibiotic</option>
                <option value="Antacid">Antacid</option>
                <option value="Antihistamine">Antihistamine</option>
                <option value="NSAID">NSAID</option>
                <option value="Antihelmenthic">Antihelmenthic</option>
                <option value="Antifungal">Antifungal</option>
            </select>
            <label for="" class="form-label">Quantity</label>
    <input type="text" name="m_quantity" id="m_quantity" placeholder="mquantity" class="form-control">
    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Update Medicines</button>
                <button type="reset" class="btn btn-danger" >Clear</button>
      </form>
      </div>
    </div>
  </div>
</div>