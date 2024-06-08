@extends($theme_path.'.layouts.master_layout')

<link rel="stylesheet" href="{{ callAdminStaticResources('dist/css/fileuploder/jquery.fileuploader.min.css') }}">
<link rel="stylesheet" href="{{ callAdminStaticResources('dist/css/fileuploder/font-fileuploader.css') }}">
<link rel="stylesheet" href="{{ callAdminStaticResources('dist/css/fileuploder/jquery.fileuploader-theme-gallery.css') }}">
@section('content')
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
                            <h5>Add {{ $title }}</h5>
                            {{-- <div class="card-header-right">
                                <a href="{{ route($base_route.'index') }}" title="" class="btn btn-primary">{{ $title }} List</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">


                                    @if(isset($images) && count($images) > 0)

                                    <label>Old Detail Image :</label>
                                    <div class="row">
                                    @foreach ($images as $key => $photo)
                                    <div class="col-md-2 col-sm-2 col-xs-6 image-{{$photo->id}}">
                                        <a href="{{asset('storage/'.$photo->image)}}" target="__blank">
                                            <img src="{{$photo->image('50_50')}}" style="width: 120px;" alt="">
                                        </a>


                                    <button type="button" class="btn btn-danger close-btn deleteRecord" data-id="{{ $photo->id }}"><i class="fa fa-times"></i></button>
                                    </div>
                                    @endforeach
                                  </div>
                                    @endif

                                    <form action="{{ route($base_route.'imagesupdate',$row->id) }}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf

                                        @includeIf($view_path.'common.images')
                                        <input type="hidden" name="gallery_id" value= {{$row->id}}>
                                        <div class="form-group">
                                            <button type="submit" name="save" value="save" title=""
                                                    class="btn btn-primary">Save
                                            </button>
                                            <button type="submit" title="" class="btn btn-primary">Save & Continue
                                            </button>
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

       $.post("{{ url('admin/ajax/gallery/images/delete') }}/"+id,{
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
