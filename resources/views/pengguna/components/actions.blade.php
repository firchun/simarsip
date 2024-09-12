<div class="btn-group">
    <button class="btn btn-sm btn-primary" onclick="editCustomer({{ $pengguna->id }})">Edit</button>
    @if ($pengguna->id != Auth::id())
        <button class="btn btn-sm btn-danger " onclick="deleteCustomers({{ $pengguna->id }})">Delete</button>
    @endif
</div>
