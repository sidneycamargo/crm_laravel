@extends('admin.admin_layout')

@section('admin')

<div class="row">
    <div class="col-xl-6 mx-auto">
        
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Customer Edit</h5>
                <form class="row g-3">
                    <div class="col-md-3">
                        <label for="name" class="form-label">CPF/CNPJ</label>
                        <input type="text" class="form-control" id="name" placeholder="First Name" value = {{ $contact->itin }}>
                    </div>
                    <div class="col-md-7">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" value = {{ $contact->name }}>
                    </div>
                    <div class="col-md-2">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Last Name" value = {{ $contact->title}}> 
                    </div>
                    data 
                    title  
                    sex 
                    document_type
                    document
                    <div class="col-md-12">
                        <label for="input3" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="input3" placeholder="Phone" value = {{ $contact->phone }}>
                    </div>
                    <div class="col-md-12">
                        <label for="input4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="input4" placeholder="Email" value = {{ $contact->email }}>
                    </div>
                    <div class="col-md-12">
                        <label for="input5" class="form-label">Password</label>
                        <input type="password" class="form-control" id="input5" placeholder="Password">
                    </div>
                    <div class="col-md-12">
                        <label for="input6" class="form-label">DOB</label>
                        <input type="date" class="form-control" id="input6" placeholder="Date of Birth">
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
                        <textarea class="form-control" id="input11" placeholder="Address ..." rows="3">{{ $contact->phone }}</textarea>
                    </div>
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="input12">
                            <label class="form-check-label" for="input12">Check me out</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="button" class="btn btn-primary px-4">Submit</button>
                            <button type="button" class="btn btn-light px-4">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

 


    </div>
</div>
<!--end row-->

@endsection

