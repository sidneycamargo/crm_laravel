@extends('admin.admin_layout')

@section('admin')
    <div class="page-content">

        <x-menu-edit></x-menu-edit>

        <div class="col-xl-6 mx-auto">
            <div class="card ">
                <form class="row g-3" action="{{ route('contacts.store') }}" method="post">
                    @csrf
                    <div class="card-header mt-4">
                        <h5>Customer Add</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row p-0 ml-0 mr-0 mb-0">
                            <div class="col-md-3">
                                <label for="name" class="form-label">CPF/CNPJ</label>
                                <input type="text" class="form-control" id="itin" name="itin" maxlength="18"
                                    onkeypress="mascaraMutuario(this,cpfCnpj)" placeholder="CPF/CNPJ">
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
                                <input type="text" class="form-control" id="input26" placeholder="Last Name">
                            </div>
                            <div class="col-md-4">
                                <label for="input15" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="input15" placeholder="Phone">
                            </div>
                            <div class="col-md-4">
                                <label for="input16" class="form-label">Email</label>
                                <input type="text" class="form-control" id="input16" placeholder="Email">
                            </div>
                        </div>

                    </div>

                    <div class="row">
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
                                            <a class="nav-link" data-bs-toggle="tab" href="#successaddress" role="tab"
                                                aria-selected="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
                                                    </div>
                                                    <div class="tab-title">Address</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#successcontact" role="tab"
                                                aria-selected="false">
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


@push('scripts')
    <script>
        function mascaraMutuario(o, f) {
            v_obj = o
            v_fun = f
            setTimeout('execmascara()', 1)
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function cpfCnpj(v) {

            //Remove tudo o que não é dígito
            v = v.replace(/\D/g, "")

            if (v.length <= 11) { //CPF

                //Coloca um ponto entre o terceiro e o quarto dígitos
                v = v.replace(/(\d{3})(\d)/, "$1.$2")

                //Coloca um ponto entre o terceiro e o quarto dígitos
                //de novo (para o segundo bloco de números)
                v = v.replace(/(\d{3})(\d)/, "$1.$2")

                //Coloca um hífen entre o terceiro e o quarto dígitos
                v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2")

            } else { //CNPJ

                //Coloca ponto entre o segundo e o terceiro dígitos
                v = v.replace(/^(\d{2})(\d)/, "$1.$2")

                //Coloca ponto entre o quinto e o sexto dígitos
                v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")

                //Coloca uma barra entre o oitavo e o nono dígitos
                v = v.replace(/\.(\d{3})(\d)/, ".$1/$2")

                //Coloca um hífen depois do bloco de quatro dígitos
                v = v.replace(/(\d{4})(\d)/, "$1-$2")

            }

            return v
        }
    </script>
@endpush
