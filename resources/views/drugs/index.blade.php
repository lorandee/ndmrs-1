 @extends('layouts.master')
@section('content')
<div class="card">
                        <div class="card-header bg-light">
                            Drugs ({{ count( $drugs ) }})
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Dosage Form</th>
                                        <th>Level of care</th>
                                        <th>Strength</th>
                                        <th>Unit of Issue</th>
                                        <th>Cost Per Unit(Ushs)</th>
                                        <th>Package Size</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($drugs as $key => $drug)
                                      <tr>
                                          <td>{{ ++$key }}</td>
                                          <td class="text-nowrap">{{ $drug->id  }}</td>
                                          <td class="text-wrap">{{ $drug->name  }}</td>
                                          <td class="text-nowrap">{{ $drug->dosage_form }}</td>
                                          <td class="text-nowrap">{{ $drug->level_of_care }}</td>
                                          <td class="text-nowrap">{{ $drug->strength }}</td>
                                          <td class="text-nowrap">{{ $drug->unit_of_issue }}</td>
                                          <td class="text-nowrap">{{ $drug->cost_per_unit }}</td>
                                          <td class="text-nowrap">{{ $drug->package_size }}</td>
                                          <td class="text-nowrap">
                                            <a href='delete/{{ $drug->id }}' class="btn btn-rounded btn-primary btn-sm">
                                                <i class="fa fa-align-center"></i> &nbsp;View
                                            </a>
                                            <a href='delete/{{ $drug->id }}' class="btn btn-rounded btn-success btn-sm">
                                              <i class="fa fa-clipboard"></i> &nbsp;edit
                                            </a>
                                            <form class="" action="{{ route('drugs.destroy', $drug->id) }}" method="post">
                                              <input type="hidden" name="_method" value="DELETE">
                                              <button type="submit" name="delete" class="btn btn-rounded btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> &nbsp;Delete</button>

                                            </form>
                                          </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
