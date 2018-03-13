@extends('layouts.master')

@section('title', 'NDRMS - REFFERALS Reports')

@section('content')
<div class="card">
    <div class="card-header bg-light">
        Referral Hospitals
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>No. Staff</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td class="text-nowrap">Arua Referral Hospital</td>
                    <td>Arua</td>
                    <td>80</td>
                    <td>
                      <button class="btn btn-primary btn-sm">View</button>
                      <button class="btn btn-warning btn-sm">Edit</button>
                      <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="text-nowrap">Mulago Referral Hospital</td>
                    <td>Kampala</td>
                    <td>75</td>
                    <td>
                      <button class="btn btn-primary btn-sm">View</button>
                      <button class="btn btn-warning btn-sm">Edit</button>
                      <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>                
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
