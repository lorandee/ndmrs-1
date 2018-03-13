@extends('layouts.master')

@section('title', 'NDRMS - All Orders')

@section('content')

      <div class="card">
        <div class="card-header bg-light">
            Health Facilities ({{ count($referrals) }})
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>District</th>
                        <th>HSD</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($referrals as $key => $referral)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td class="text-nowrap">{{ $referral->name }}</td>
                            <td>{{ $referral->level }}</td>
                            <td>{{ $referral->health_sub_district }}</td>
                            <td>{{ $referral->id }}</td>
                        </tr>
                      @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
