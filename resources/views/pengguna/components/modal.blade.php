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
                        <label for="formCustomerName" class="form-label">Level Pengguna</label>
                        <select class="form-control" id="formCustomerLevel" name="level" required>
                            <option value="Administrator">Administrator</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="User">Pegawai</option>
                        </select>
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
                        <label for="formCustomerName" class="form-label">Username</label>
                        <select class="form-control" id="formCustomerName" name="username" required>
                            @foreach (App\Models\Pegawai::all() as $item)
                                <option value="{{ $item->nip }}">{{ $item->nip }} - {{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Password</label>
                        <input type="password" class="form-control" id="formCustomerNip" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="formCustomerName" class="form-label">Level Pengguna</label>
                        <select class="form-control" id="formCustomerName" name="level" required>
                            <option value="Administrator">Administrator</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="User">Pegawai</option>
                        </select>
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
