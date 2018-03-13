@extends('layouts.master')

@section('title', 'NDRMS - General Settings')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                    <a href="#" class="list-group-item">Profile</a>
                    <a href="#" class="list-group-item active">Account Settings</a>
                    <a href="#" class="list-group-item">Notifications</a>
                    <a href="#" class="list-group-item">Subscription</a>
                </div>
            </div>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-light">
                        Account Settings
                    </div>

                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col-md-4 mb-4">
                                <div>Profile Information</div>
                                <div class="text-muted small">These information are visible to the public.</div>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Name</label>
                                            <input class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Username</label>
                                            <input class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email Address</label>
                                            <input class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Website Link</label>
                                            <input class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row mt-5">
                            <div class="col-md-4 mb-4">
                                <div>Access Credentials</div>
                                <div class="text-muted small">Leave credentials fields empty if you don't wish to change the password.</div>
                            </div>

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Password Confirmation</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-light text-right">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
