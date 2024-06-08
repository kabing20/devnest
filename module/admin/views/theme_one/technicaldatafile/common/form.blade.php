<div class="form-group">
    <label>Title :</label>
    <input type="text" name="title" placeholder="Enter Title" value="{{ old('title') ?? $row->title ?? '' }}"
           class="form-control{{ ($errors->has('title'))?' form-error':'' }}">
    @if($errors->has('title'))
        <div class="form-error-message">{{ $errors->first('title') }}</div>
    @endif
</div>





<div class="form-group">
    <label>Short Description(150 character only) :</label>

    <textarea type="text" name="short_description" placeholder="Enter Description"
              class="form-control{{ ($errors->has('short_description'))?' form-error':'' }}" maxlength = '150'>{{ old('short_description') ?? $row->short_description ?? '' }}</textarea>
    @if($errors->has('short_description'))
        <div class="ckeditor form-error-message">{{ $errors->first('short_description') }}</div>
    @endif
</div>

@if(isset($row->image))
    <div class="form-group">
        <label>Old Image :</label>
        <img src="{{$row->image('50_50')}}" style="width: 120px;" alt="">
    </div>
@endif

<div class="form-group">
    <label>Image :</label>
    <input type="file" name="image" id = "image" class="form-control{{ ($errors->has('image'))?' form-error':'' }}">
    @if($errors->has('image'))
        <div class="form-error-message">{{ $errors->first('image') }}</div>
    @endif
</div>

@if(isset($row->file))

    <div class="form-group">
        <label>Old file :</label>
        <a href="{{  asset(str_replace('public','storage',$row->file)) }}" target="_blank">View</a>

    </div>
@endif

<div class="form-group">
    <label>File :</label>
    <input type="file" name="file" class="form-control{{ ($errors->has('file'))?' form-error':'' }}">
    @if($errors->has('file'))
        <div class="form-error-message">{{ $errors->first('file') }}</div>
    @endif
</div>



