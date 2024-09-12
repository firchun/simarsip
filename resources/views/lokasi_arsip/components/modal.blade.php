<!-- Modal for Create and Edit -->
<div class="modal fade" id="customersModal" tabindex="-1" aria-labelledby="customersModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for Create and Edit -->
                <form id="userForm">
                    <input type="hidden" id="formDataId" name="id">
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Kode Lokasi</label>
                        <input type="text" class="form-control" id="formCustomerKdLokasi" name="kd_lokasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Lokasi Arsip</label>
                        <input type="text" class="form-control" id="formCustomerLokasi" name="lokasi" required>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveCustomerBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="customersModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for Create and Edit -->
                <form id="createUserForm">

                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Kode Lokasi</label>
                        <input type="text" class="form-control" name="kd_lokasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Lokasi Arsip</label>
                        <input type="text" class="form-control" name="lokasi" required>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="createCustomerBtn">Save</button>
            </div>
        </div>
    </div>
</div>
