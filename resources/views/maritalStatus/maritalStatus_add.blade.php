@extends('admin.admin_layout')

@section('admin')
    <div class="page-content">

        <!--Menu Add/Edit-->
        <x-menu-edit></x-menu-edit>

        <div class="col-xl-6 mx-auto">
            <form class="row g-3">
                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
                <div class="card">
                    <div class="card-header mt-2">
                        <h5>Estado Civil - Novo</h5>
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
                                <input type="text" class="form-control" id="female" name="female"
                                    placeholder="Estado civil no feminino">
                            </div>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" checked value="" id="clearInputs">
                            <label class="form-check-label" for="flexCheckDefault">Limpar Campos</label>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <x-menu-edit></x-menu-edit>

    </div>
@endsection

@push('scripts')
    <script>
        function success_noti(param_msg) {
            Lobibox.notify('success', {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: 'top right',
                icon: 'bx bx-check-circle',
                msg: param_msg
                // msg: 'Lorem ipsum dolor sit amet hears farmer indemnity inherent.'
            });
        }

        function warning_noti(param_msg) {
            Lobibox.notify('warning', {
                pauseDelayOnHover: true,
                continueDelayOnInactiveTab: false,
                position: 'top right',
                icon: 'bx bx-error',
                msg: param_msg
            });
        }

        function sendPost(url, body) {
            const request = new XMLHttpRequest()

            request.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        success_noti(JSON.parse(request.responseText).message);
                    } else {
                        warning_noti('Error: ' + this.status)
                    }
                }
                return
            }
            request.open("POST", url, true)
            request.setRequestHeader("Content-type", "application/json")
            request.send(JSON.stringify(body))


            if (document.getElementById("clearInputs").checked) {
                document.getElementById("male").value = ""
                document.getElementById("female").value = ""
            }
        }

        function saveData() {
            const url = "{{ route('marital_status.store') }}"
            const _token = document.getElementById("_token").value
            const male = document.getElementById("male").value
            const female = document.getElementById("female").value
            body = {
                "_token": _token,
                "male": male,
                "female": female
            }
            sendPost(url, body)

        }

        function cancelAdd() {

            resConfirmation = Lobibox.alert('warning', { //AVAILABLE TYPES: "error", "info", "success", "warning"
                    msg: 'Confirma cancelamento? Você pode perder as alterações.',
                    //buttons: ['ok', 'cancel', 'yes', 'no'],
                    //Or more powerfull way
                    buttons: {
                        ok: {
                            'class': 'btn btn-success',
                            closeOnClick: false
                        },
                        cancel: {
                            'class': 'btn btn-danger',
                            closeOnClick: false
                        },

                        /**
                                    const cancelConfirmation = warning_noti('Confirma que deseja voltar? Ao voltar, poderá perder os dados')

                                }
                        */

                    }
                },
                callback: function(lobibox, type) {
                    var btnType;
                    if (type === 'no') {
                        btnType = 'warning';
                    } else if (type === 'yes') {
                        btnType = 'success';
                    } else if (type === 'ok') {
                        btnType = 'info';
                    } else if (type === 'cancel') {
                        btnType = 'error';
                    }
                    Lobibox.notify(btnType, {
                            size: 'mini',
                            msg: 'This is ' + btnType + ' message'
                        }
                    }

                )
            }
    </script>
@endpush
