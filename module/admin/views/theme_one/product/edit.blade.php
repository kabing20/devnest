@extends($theme_path.'.layouts.master_layout')


@section('content')
<link rel="stylesheet" href="{{ callAdminStaticResources('dist/css/fileuploder/jquery.fileuploader.min.css') }}">
<link rel="stylesheet" href="{{ callAdminStaticResources('dist/css/fileuploder/font-fileuploader.css') }}">
<link rel="stylesheet" href="{{ callAdminStaticResources('dist/css/fileuploder/jquery.fileuploader-theme-gallery.css') }}">
<style>
    .fileuploader {

width:50% !important;
}


</style>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top">
                            <h5>Edit {{ $title }}</h5>
                            <div class="card-header-right">
                                <a href="{{ route($base_route.'index') }}" title="" class="btn btn-primary">{{ $title }} List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route($base_route.'update',$row->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf @method('put')
                                    @includeIf($view_path.'common.form')
                                    <div class="form-group">
                                        <button type="submit" name="save" value="save" title="" class="btn btn-primary">Save</button>
                                        <button type="submit" title="" class="btn btn-primary">Save & Continue</button>
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

@push('js')
<script src="{{ callAdminStaticResources('dist/js/fileuploder/jquery.fileuploader.min.js') }}"></script>
<script src="{{ callAdminStaticResources('dist/js/fileuploder/fileuploader.js') }}"></script>
<script>
    $(".deleteRecord").click(function(){

    var id = $(this).data("id");

            $.post("{{ url('admin/ajax/product/delete') }}/"+id,{
                        "_token": "{{ csrf_token() }}",
            },function(response){
                $(".image-"+id).remove();
            }).fail(function(error){
                alert('error');
                console.log(error);
            });


});
</script>
@endpush

