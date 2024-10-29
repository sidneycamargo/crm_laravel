@extends('admin.admin_layout')

@section('admin')
    <div class="page-content">
        <!-- breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-0">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Customers</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card mt-10 g-3 ms-auto">
            <form action="{{ route('contacts.store') }}" method="post">
            </form>
        </div>
        <!-- end breadcrumb -->
        <div class="col-xl-6 mx-auto">
            <form class="row g-3" action="{{ route('contacts.store') }}" method="post">
                @csrf
                <div class="card ">
                    <div class="card-header mt-2">
                        <h5>Customer Add</h5>
                        <div class="ms-auto">
                            @csrf
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <a href="{{ route('contacts.view') }}" class="btn btn-warning px-4">Voltar</a>
                            </div>

                        </div>
                    </div>
                    <div class="card-body p-4">

                        <div class="col-md-3">
                            <label for="name" class="form-label">CPF/CNPJ</label>
                            <input type="text" class="form-control" id="itin" name="itin" placeholder="CPF/CNPJ">
                        </div>
                        <div class="col-md-7">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-2">
                            <label for="sex" class="form-label">Sex</label>
                            <select id="sex" class="form-select" name="sex">
                                <option selected>Male</option>
                                <option>Femele</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="input3" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="input3" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-md-12">
                            <label for="input4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="input4" placeholder="Email" value="email">
                        </div>
                        <div class="col-md-12">
                            <label for="input6" class="form-label">DOB</label>
                            <input type="date" class="form-control" id="date" placeholder="Date of Birth"
                                value="date">
                        </div>
                        <div class="col-md-12">
                            <label for="input7" class="form-label">Country</label>
                            <select id="input7" class="form-select">
                                <option selected>Choose...</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="input8" class="form-label">City</label>
                            <input type="text" class="form-control" id="input8" placeholder="City">
                        </div>
                        <div class="col-md-4">
                            <label for="input9" class="form-label">State</label>
                            <select id="input9" class="form-select">
                                <option selected>Choose...</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="input10" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="input10" placeholder="Zip">
                        </div>
                        <div class="col-md-12">
                            <label for="input11" class="form-label">Address</label>
                            <textarea class="form-control" id="input11" placeholder="Address ..." rows="3">Adress</textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="input12">
                                <label class="form-check-label" for="input12">Check me out</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12 mt-0">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-success px-4">Salvar</button>
                                <a href="{{ route('contacts.view') }}" class="btn btn-warning px-4">Voltar</a>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end row-->

    <div class="w-full h-200 bg-gray-900 static text-center">
        <p class="bg-gray-900">Copyright © 2024. Teste 1</p>
    </div>
@endsection
