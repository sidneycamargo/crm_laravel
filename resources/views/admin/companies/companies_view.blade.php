@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Companies</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <form action="{{ route('admin.companies.add') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-success">Add</button>
            </form>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Companies</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Operations</th>
                            <th>Name</th>
                            <th>Fantasy</th>
                            <th>CNPJ</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($companies as $item)
                        <tr>
                            <td class="d-flex">
                                <form action="{{ route('admin.companies.edit', $item->id)}}" method="get">
                                    @csrf
                                    <button class="btn btn-warning lni lni-pencil-alt"></button>
                                </form>
                                <form action="{{ route('admin.companies.delete', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="ms-2 btn btn-danger lni lni-trash"></button>
                                </form>
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->fantasy }}</td>
                            <td>{{ $item->CNPJ}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Operations</th>
                            <th>Name</th>
                            <th>Fantasy</th>
                            <th>CNPJ</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
 
</div>

@endsection

@section('script')
<!-- Data Table JS -->
<script src="{{ asset('backend') }}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>

@endsection


