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
                        <label for="formCustomerName" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="formCustomerNip" name="nip" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="formCustomerNama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" id="formCustomerJenisKelamin" name="jenis_kelamin" required>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="formCustomerAlamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="formCustomerKota" name="kota" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="formCustomerTempatLahir" name="tempat_lahir"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="formCustomerTanggalLahir" name="tanggal_lahir"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formCustomerEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="formCustomerJabatan" name="jabatan" required>
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
                        <label for="formCustomerName" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="formCustomerName" name="nip" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="formCustomerName" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" id="" name="jenis_kelamin" required>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="formCustomerName" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="formCustomerName" name="kota" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="formCustomerName" name="tempat_lahir"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="formCustomerName" name="tanggal_lahir"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formCustomerName" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="formCustomerName" name="jabatan" required>
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
