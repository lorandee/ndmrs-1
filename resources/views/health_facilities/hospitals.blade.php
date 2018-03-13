@extends('layouts.master')

@section('title', 'NDRMS - All Orders')

@section('content')

      <div class="card">
        <div class="card-header bg-light">
            Health Facilities ({{ count($hospitals) }})
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
                      @foreach ($hospitals as $key => $hospital)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td class="text-nowrap">{{ $hospital->name }}</td>
                            <td>{{ $hospital->level }}</td>
                            <td>{{ $hospital->health_sub_district }}</td>
                            <td>{{ $hospital->id }}</td>
                        </tr>
                      @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
