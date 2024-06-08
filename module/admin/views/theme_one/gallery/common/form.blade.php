<div class="form-group">
    <label>Title :</label>
    <input type="text" name="title" placeholder="Enter Title" value="{{ old('title') ?? $row->title ?? '' }}"
           class="form-control{{ ($errors->has('title'))?' form-error':'' }}">
    @if($errors->has('title'))
        <div class="form-error-message">{{ $errors->first('title') }}</div>
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
    <input type="file" name="image" id = "image" class="form-control{{ ($errors->has('image'))?' form-error':'' }}" accept="image/*">
    @if($errors->has('image'))
        <div class="form-error-message">{{ $errors->first('image') }}</div>
    @endif
</div>

