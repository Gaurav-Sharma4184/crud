@extends('layout.app')
<!-- Start Content-->
@section('content')
<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title font-weight-bold text-uppercase"> Add Party </h4>
        </div>
    </div>
</div>
<!-- end page title -->
<!-- Start Form  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('include.alert')
                <h4 class="header-title text-uppercase"> Basic Info</h4>
                <hr>
                <form class="needs-validation" method="post" action="{{ route('create-party') }}">
                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Party Type</label>
                                <select name="party_type" class="form-control border-bottom "
                                    id="validationCustom01" placeholder="Please select Type">
                                    <option value="">Please select</option>
                                    <option value="client">Client</option>
                                    <option value="vendor">Vendor</option>
                                    <option value="employee">Employee</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Full Name</label>
                                <input type="text" name="full_name" class="form-control border-bottom "
                                    id="validationCustom01" placeholder="Enter client's full name">
                                <div class="invalid-feedback">
                                    Please provide a Full name.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="validationCustom02">Phone/Mobile Number</label>
                                <input type="text" name= "phone_no" class="form-control border-bottom "
                                    id="validationCustom02" placeholder="Enter phone/mobile number">
                                <div class="invalid-feedback">
                                    Please provide a Number.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="validationCustom03">Address</label>
                                <input type="text" name="address" class="form-control border-bottom "
                                    id="validationCustom02" placeholder="Enter Address">
                                <div class="invalid-feedback">
                                    Please provide a valid Address.
                                </div>
                            </div>
                        </div>
                    </div>


                    <h4 class="header-title text-uppercase">Bank Details</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="validationCustom04">Account Holder Name</label>
                                <input type="text" name="account_holder_name" class="form-control border-bottom "
                                    id="validationCustom04" placeholder="Enter Accoumt Holder name">
                                <div class="invalid-feedback">
                                    Please provide a valid Account holder name.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="validationCustom05">Account Number</label>
                                <input type="text" name="account_no" class="form-control border-bottom "
                                    id="validationCustom05" placeholder="Enter Account Number">
                                <div class="invalid-feedback">
                                    Please provide a valid Account number.
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="validationCustom02">Bank Name</label>
                                <input type="text" name="bank_name" class="form-control border-bottom "
                                    id="validationCustom02" placeholder="Enter Bank Name">
                                <div class="invalid-feedback">
                                    Please provide a Bank name.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="validationCustom02">IFSC Code</label>
                                <input type="text" name="ifsc_code" class="form-control border-bottom "
                                    id="validationCustom02" placeholder="Enter IFSC Code">
                                <div class="invalid-feedback">
                                    Please provide a IFSC CODE.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="validationCustom02">Branch</label>
                            <input type="text" name="branch_address" class="form-control border-bottom "
                                id="validationCustom02" placeholder="Enter Branch">
                            <div class="invalid-feedback">
                                Please provide a Branch Name.
                            </div>
                        </div>
                    </div>
                    <br>

                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
@endsection