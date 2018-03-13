@extends('layouts.master')

@section('title', 'NDRMS - All Orders')

@section('content')

      <div class="card border-light">
        <div class="card-header bg-light">
            <strong>REGIONS IN UGANDA ({{ count($regions) }})</strong>
            <div class="float-right">
              <a href="{{ route('regions.create') }}" class="btn btn-primary btn-sm"> <i class="icon icon-plus"></i> Create New </a>
              <a href="{{ URL::current() }}" class="btn btn-info btn-sm"> <i class="icon icon-refresh"></i> Refresh </a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr class="text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Health Sub-Districts</th>
                        <th>Health Failities</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($regions as $key => $region)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td class="text-nowrap"> <strong>{{ $region->name }}</strong> </td>
                            <td>{{ $key+5 }}</td>
                            <td>{{ $key+5 }}</td>
                            <td>{{ 'UGANDA' }}</td>
                            <td>
                              <a href="#" class="btn btn-success btn-sm"> View </a>
                              <a href="#" class="btn btn-primary btn-sm"> Edit</a>
                              <a href="#" class="btn btn-danger btn-sm"> Delete</a>
                            </td>
                        </tr>
                      @endforeach

                      @unless($regions)
                        <tr>
                          <td colspan="5"> <h3 class="text-danger">No Regions have been Recorded</h3> </td>
                        </tr>
                      @endunless
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
