@extends('admin.admin_layout')

@section('admin')
    <div class="page-content">

        <!--Menu Add/Edit-->
        <form class="row g-3" method="POST" action="{{ route('marital_status.update') }}">

            <x-menu-edit>
                <x-slot:saveBtn>Salvar</x-slot>
                <x-slot:resetBtn>Reset</x-slot>
                <x-slot:backBtn>Voltar</x-slot>
            </x-menu-edit>

            <div class="col-xl-6 mx-auto">
                @csrf

                <input type="hidden" name="id" value="{{ $maritalStatus->id }}">

                <div class="card">
                    <div class="card-header mt-2">
                        <h5>Edit Estado Civil</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row mt-2 ml-0 mr-0 mb-0">
                            <div class="col-md-6">
                                <label for="male" class="form-label">Masculino</label>
                                <input type="text" id="male" name="male"
                                    value="{{ $maritalStatus->masculine_name }}" placeholder="Estado Civil no Masculino"
                                    class="form-control @error('male') is-invalid @enderror">
                                @error('male')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="female" class="form-label">Feminino</label>
                                <input type="text" class="form-control" id="female" name="female"
                                    value="{{ $maritalStatus->female_name }}" placeholder="Estado civil no feminino"
                                    class="form-control @error('female') is-invalid @enderror">
                                @error('female')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" checked value="" id="clearInputs">
                            <label class="form-check-label" for="flexCheckDefault">Limpar Campos</label>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
@endsection

@section('script')
    <script>
        document.getElementById("backBtn").addEventListener("click", function() {
            history.back();
        });
    </script>
@endsection
