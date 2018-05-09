@extends('tabler.layouts.master')

@section('content')

 <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                User List
              </h1>
            </div>               
              <div class="col-12">
                
                    <table class="table card-table table-vcenter text-nowrap" id="users-table">
                      <thead>
                        <tr>
                          <th class="w-1">No.</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>PH No.</th>
                          <th>Address</th>
                          <th>Region</th>
                          <th>Datetime</th>
                          <th></th>
                        </tr>
                      </thead>
                    </table>
              </div>
            </div>
          </div>

@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        ajax: '{!! route('admin.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phno', name: 'phno' },
            { data: 'address', name: 'address' },
            { data: 'region', name: 'region' },
            { data: 'created_at', name: 'created_at' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@endpush