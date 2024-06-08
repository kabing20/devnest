@extends($theme_path.'.layouts.master_layout')

@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card customer-list">
                    <div class="card-header">
                        <div class="header-top">
                            <h5>{{ $title }} List</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                    <th>Email</th>


                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data['rows']) && count($data['rows'])>0)
                                    @foreach($data['rows'] as $key => $row)
                                        <tr>

                                            <td>{{ $row->subscribe_email }}</td>

                                            <td style="display: flex">
                                                <form action="{{ route($base_route.'destroy',$row->id) }}"
                                                      method="post">
                                                    @csrf @method('delete')
                                                    <button class="btn btn-xs btn-danger" type="submit"><i
                                                            class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {{ $data['rows']->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
