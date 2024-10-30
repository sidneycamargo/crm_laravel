@extends('admin.admin_layout')

@section('admin')
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Components</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Navs & Tabs</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
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
            <div class="card ">
                <form class="row g-3" action="{{ route('contacts.store') }}" method="post">
                    @csrf
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
                        <div class="row p-0 m-0">
                            <div class="col-md-3">
                                <label for="name" class="form-label">CPF/CNPJ</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-user'></i></span>
                                    <input type="text" class="form-control" id="itin" name="itin"
                                        placeholder="CPF/CNPJ">
                                </div>
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
                        </div>
                        <div class="row mt-2 ml-0 mr-0 mb-0">
                            <div class="col-md-4">
                                <label for="input26" class="form-label">Last Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-user'></i></span>
                                    <input type="text" class="form-control" id="input26" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="input15" class="form-label">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-microphone'></i></span>
                                    <input type="text" class="input-group-text" id="input15" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="input16" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class='bx bx-envelope'></i></span>
                                    <input type="text" class="input-group-text" id="input16" placeholder="Email">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row ">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-success" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#successprofile"
                                                role="tab" aria-selected="true">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
                                                    </div>
                                                    <div class="tab-title">Profile</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#successaddress"
                                                role="tab" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                                                    </div>
                                                    <div class="tab-title">Address</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#successcontact"
                                                role="tab" aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
                                                    </div>
                                                    <div class="tab-title">Others Information</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content py-3">
                                        <div class="tab-pane fade show active" id="successprofile" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="input26" class="form-label">Last Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class='bx bx-user'></i></span>
                                                        <input type="text" class="form-control" id="input26"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="input26" class="form-label">Last Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class='bx bx-user'></i></span>
                                                        <input type="text" class="form-control" id="input26"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="input26" class="form-label">Last Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class='bx bx-user'></i></span>
                                                        <input type="text" class="form-control" id="input26"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="input29" class="form-label">DOB</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class='bx bx-calendar'></i></span>
                                                        <input type="text" class="form-control" id="input29"
                                                            placeholder="DOB">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="input30" class="form-label">Country</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class='bx bx-flag'></i></span>
                                                        <select class="form-select" id="input30">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="successaddress" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="input31" class="form-label">Zip</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class='bx bx-pin'></i></span>
                                                        <input type="text" class="form-control" id="input31"
                                                            placeholder="Zip">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="input32" class="form-label">City</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class='bx bx-buildings'></i></span>
                                                        <input type="text" class="form-control" id="input32"
                                                            placeholder="City">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="input33" class="form-label">State</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class='bx bxs-city'></i></span>
                                                    <select class="form-select" id="input33">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="successcontact" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="input31" class="form-label">Zip</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class='bx bx-pin'></i></span>
                                                        <input type="text" class="form-control" id="input31"
                                                            placeholder="Zip">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="input32" class="form-label">City</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class='bx bx-buildings'></i></span>
                                                        <input type="text" class="form-control" id="input32"
                                                            placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="input32" class="form-label">City</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class='bx bx-buildings'></i></span>
                                                        <input type="text" class="form-control" id="input32"
                                                            placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="name" placeholder="Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="input32" class="form-label">City</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i
                                                                class='bx bx-buildings'></i></span>
                                                        <input type="text" class="form-control" id="input32"
                                                            placeholder="City">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="input33" class="form-label">State</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class='bx bxs-city'></i></span>
                                                    <select class="form-select" id="input33">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="ms-auto">
                            @csrf
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <a href="{{ route('contacts.view') }}" class="btn btn-warning px-4">Voltar</a>
                            </div>
                        </div>

                    </div>
                </form>

            </div>


        </div>
    </div>
@endsection
