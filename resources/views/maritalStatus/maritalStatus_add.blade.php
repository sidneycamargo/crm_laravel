@extends('admin.admin_layout')

@section('admin')
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Marital Status</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Marital Status</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto gap-3">
                <button type="button" class="btn btn-success">Salvar</button>
                <button type="button" class="btn btn-warning">Voltar</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Filters</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="col-xl-6 mx-auto">
            <form class="row g-3" action="{{ route('marital_status.store') }}" method="post">
                @csrf
                <div class="card ">
                    <div class="card-header mt-2">
                        <h5>Marital Status Add</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row mt-2 ml-0 mr-0 mb-0">
                            <div class="col-md-6">
                                <label for="male" class="form-label">Masculino</label>
                                <input type="text" class="form-control" id="male" name="male"
                                    placeholder="Estado Civil no Feminino">
                            </div>
                            <div class="col-md-6">
                                <label for="female" class="form-label">No feminino</label>
                                <input type="text" class="form-control" id="name" name="female" placeholder="Estado civil no feminino">
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="ms-auto">
                            @csrf
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <a href="{{ route('marital_status.show') }}" class="btn btn-warning px-4">Voltar</a>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
