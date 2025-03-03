@extends('admin.layout.app')
@section('contentt')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Clients</h4>
                    <a class="nav-link btn btn-success create-new-button" href="{{ route('clients.details') }}">+ Create New Client</a>

                    <div class="table-responsive">
                        <table id="clientsTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Image </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Age </th>
                                    <th> Gender </th>
                                    <th> City </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                <tr>
                                    <td class="py-1">
                                        <img src="{{ $client->image ? asset('storage/' . $client->image) : asset('assets/images/default-user.png') }}" alt="image" width="50"/>
                                    </td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->age }}</td>
                                    <td>{{ ucfirst($client->gender) }}</td>
                                    <td>{{ $client->city }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Succès',
        text: '{{ session('success') }}'
    });
</script>
@endif

<!-- DataTables script -->
@section('scripts')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#clientsTable').DataTable();
    });
</script>
@endsection
@endsection
