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
                            <div class="card-header-right">
                                <a href="{{ route($base_route.'create') }}" title="" class="btn btn-primary">Add
                                    {{ $title }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Url</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data['rows']) && count($data['rows'])>0)
                                    @foreach($data['rows'] as $key => $row)

                                        <tr>
                                            <td>{{ $row->Url }}</td>
                                            <td><img src="{{ $row->image('50_50') }}" alt=""></td>
                                            <td>
                                                <div style="display: flex">
                                                <a class="btn btn-xs btn-success mr-2"
                                                   href="{{ route($base_route.'edit',$row->id) }}"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <form action="{{ route($base_route.'destroy',$row->id) }}"
                                                      method="post">
                                                    @csrf @method('delete')
                                                    <button class="btn btn-xs btn-danger" type="submit"><i
                                                            class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
</div>
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
