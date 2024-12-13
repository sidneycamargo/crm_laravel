@extends('admin.admin_layout')

@section('admin')
    <div class="page-content">
        <!--breadcrumb-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center ms-auto">

                            <div class="col-lg-5 col-xl-4">
                                <form action="{{ route('marital_status.create') }}" method="post">
                                    @csrf
                                    <div class="col">
                                        <button type="submit" class="btn btn-success mb-3 mb-lg-0">
                                            <i class='bx bxs-plus-square'></i>Add</button>
                                        <!--
                                                                                                                                                                                                                                                                                                                                                                            <div class="btn-group">
                                                                                                                                                                                                                                                                                                                                                                                <button type="button" class="btn btn-primary">Settings</button>
                                                                                                                                                                                                                                                                                                                                                                                <button type="button"
                                                                                                                                                                                                                                                                                                                                                                                    class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                                                                                                                                                                                                                                                                                                                                                                    data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle
                                                                                                                                                                                                                                                                                                                                                                                        Dropdown</span>
                                                                                                                                                                                                                                                                                                                                                                                </button>
                                                                                                                                                                                                                                                                                                                                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a
                                                                                                                                                                                                                                                                                                                                                                                        class="dropdown-item" href="javascript:;">Action</a>
                                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                                                                                                                                                                                                                                                                                                                                                                    <div class="dropdown-divider"></div> <a class="dropdown-item"
                                                                                                                                                                                                                                                                                                                                                                                        href="javascript:;">Separated
                                                                                                                                                                                                                                                                                                                                                                                        link</a>
                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                        -->

                                    </div>

                                </form>
                            </div>

                            <div class="col-lg-7 col-xl-8">
                                <div>
                                    <form class="float-lg-end">
                                        <div class="row row-cols-lg-2 row-cols-xl-auto g-2">
                                            <div class="position-relative">
                                                <input type="text" class="form-control ps-5"
                                                    placeholder="Search Product...">
                                                <span class="position-absolute top-50 product-show translate-middle-y"><i
                                                        class="bx bx-search"></i></span>
                                            </div>

                                            <div class="col">
                                                <div class="btn-group" role="group"
                                                    aria-label="Button group with nested dropdown">
                                                    <button type="button" class="btn btn-white">Sort By</button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button"
                                                            class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class='bx bx-chevron-down'></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- COLLECTION TYPE
                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                            <div class="col">
                                                                                                                                                                                                                                                                                                                                                                                <div class="btn-group" role="group"
                                                                                                                                                                                                                                                                                                                                                                                    aria-label="Button group with nested dropdown">
                                                                                                                                                                                                                                                                                                                                                                                    <button type="button" class="btn btn-white">Collection Type</button>
                                                                                                                                                                                                                                                                                                                                                                                    <div class="btn-group" role="group">
                                                                                                                                                                                                                                                                                                                                                                                        <button id="btnGroupDrop1" type="button"
                                                                                                                                                                                                                                                                                                                                                                                            class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                                                                                                                                                                                                                                                                                                                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                                                                                                                                                                                                                                                                                                            <i class='bx bxs-category'></i>
                                                                                                                                                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                                                                                                                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                                                                                                                                                                                                                                                                                                                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                                                                                                                                                                                                                                                                                                                                                                            </li>
                                                                                                                                                                                                                                                                                                                                                                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                                                                                                                                                                                                                                                                                                                                                                            </li>
                                                                                                                                                                                                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                                                                                                        -->
                                            <!-- PRICE RANGE

                                                                                                                                                                                                                                                                                                                                                                            <div class="col">
                                                                                                                                                                                                                                                                                                                                                                                <div class="btn-group" role="group">
                                                                                                                                                                                                                                                                                                                                                                                    <button type="button" class="btn btn-white">Price Range</button>
                                                                                                                                                                                                                                                                                                                                                                                    <div class="btn-group" role="group">
                                                                                                                                                                                                                                                                                                                                                                                        <button id="btnGroupDrop1" type="button"
                                                                                                                                                                                                                                                                                                                                                                                            class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                                                                                                                                                                                                                                                                                                                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                                                                                                                                                                                                                                                                                                            <i class='bx bx-slider'></i>
                                                                                                                                                                                                                                                                                                                                                                                        </button>
                                                                                                                                                                                                                                                                                                                                                                                        <ul class="dropdown-menu dropdown-menu-start"
                                                                                                                                                                                                                                                                                                                                                                                            aria-labelledby="btnGroupDrop1">
                                                                                                                                                                                                                                                                                                                                                                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                                                                                                                                                                                                                                                                                                                                                                            </li>
                                                                                                                                                                                                                                                                                                                                                                                            <li><a class="dropdown-item" href="#">Dropdown link</a>
                                                                                                                                                                                                                                                                                                                                                                                            </li>
                                                                                                                                                                                                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                        -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--end breadcrumb-->
        <div class="col-xl-6 mx-auto">
            <h6 class="mb-0 text-uppercase">Marital Status</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Operações</th>
                                    <th>Masculino</th>
                                    <th>Feminino</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($maritalStatus as $item)
                                    <tr>
                                        <td class="d-flex">
                                            <a href="{{ route('marital_status.edit', $item->id) }}"
                                                class="btn btn-warning rounded-pill waves-effect waves-light lni lni-pencil-alt">
                                                Edit</a>
                                            <a href="#"
                                                class="btn btn-danger rounded-pill waves-effect waves-light lni lni-trash">
                                                Delete</a>
                                            <form action="javascript:confirmDelete( {{ $item->id }} )">
                                                <button class="ms-2 btn btn-danger lni lni-trash"></button>
                                            </form>
                                        </td>
                                        <td>{{ $item->masculine_name }}</td>
                                        <td>{{ $item->female_name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Operações</th>
                                    <th>Masculino</th>
                                    <th>Feminino</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
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
        });


        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });

        function confirmDelete(id) {
            var txt
            if (confirm('Confirma exclusão do registro?')) {
                let url = "{{ route('marital_status.delete', 'recordId') }}"
                console.log(url)
                url = url.replace('recordId', id)
                console.log(url)

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $.post(url, function() {
                    toastr.success(" {{ Session::get('message') }} ");
                    console.log('executou a exclusão')
                })

                toastr.success('Executou a exclusão com sucesso');;

                window.location.reload(true)


                console.log('exclusão confirmada')
            } else {
                console.log('não houve confirmação')
            }
        }
    </script>
@endsection
