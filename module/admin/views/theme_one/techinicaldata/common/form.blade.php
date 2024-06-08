<div class="form-group">
    <label>Description :</label>
    <textarea type="text" name="description" id = "description" placeholder="Enter Description"
              class="form-control{{ ($errors->has('description'))?' form-error':'' }}">{{ old('description') ?? $row->description ?? '' }}</textarea>
    @if($errors->has('description'))
        <div class="ckeditor form-error-message">{{ $errors->first('description') }}</div>
    @endif
</div>

@if(isset($row->image))
    <div class="form-group">
        <img src="{{$row->image('50_50') }}" style="width: 120px;" alt="">
    </div>
@endif

<div class="form-group">
    <label>Image :</label>
    <input type="file" name="image" id = "image" class="{{ ($errors->has('image'))?' form-error':'' }}">
    @if($errors->has('image'))
        <div class="form-error-message">{{ $errors->first('image') }}</div>
    @endif
</div>

{{-- <div class="form-group">
    <label>Slug :</label>
    <input type="text" name="slug" placeholder="Enter Slug" value="{{ old('slug') ?? $row->slug ?? '' }}"
           class="form-control{{ ($errors->has('slug'))?' form-error':'' }}">
    @if($errors->has('slug'))
        <div class="form-error-message">{{ $errors->first('slug') }}</div>
    @endif
</div> --}}
