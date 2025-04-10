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
                        <table id="ajaxTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Masculin</th>
                                    <th>Feminin</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Masculin</th>
                                    <th>Feminin</th>
                                    <th>Operation</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<?php
?>

@section('script')
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            var table = new DataTable('#ajaxTable', {
                //    language: {
                //        url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json',
                //    },
                ajax: '{{ route('marital_status.get_ajax_table_show') }}',
                columnDefs: [{
                    data: null,
                }]
            });

            table.on('click', 'button', function(e) {
                let data = table.row(e.target.closest('tr')).data();

                alert(data[0] + "'s salary is: " + data[2]);
            });

        });

        function confirmDelete(id) {
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
