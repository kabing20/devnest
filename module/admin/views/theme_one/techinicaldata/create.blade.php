@extends($theme_path.'.layouts.master_layout')

@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5>Add {{ $title }}</h5>
                            <div class="card-header-right">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route($base_route.'store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @includeIf($view_path.'common.form')
                                    <div class="form-group">

                                        <button type="submit" title="" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

