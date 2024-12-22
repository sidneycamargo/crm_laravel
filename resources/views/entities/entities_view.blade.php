@extends('admin.admin_layout')

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
                        <li class="breadcrumb-item active" aria-current="page">Customers</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <form action="{{ route('entities.add') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-success">Add</button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                link</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Customers</h6>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="ajaxTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>operators</th>
                                <th>name</th>
                                <th>phone</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>operators</th>
                                <th>name</th>
                                <th>phone</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <!-- Data Table JS -->
    <script>
        $(document).ready(function() {
            var table = new DataTable('#ajaxTable', {
                layout: {
                    topStart: {
                        pageLength: {
                            menu: [5, 10, 25, 50, 100]
                        }
                    }
                },
                ajax: '{{ route('entities.get_ajax_table_show') }}',
                columnDefs: [{
                    data: null,
                }]
            });


        });
    </script>
@endsection
