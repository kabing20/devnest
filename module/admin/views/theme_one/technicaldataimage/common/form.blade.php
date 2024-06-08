


@if(isset($row->image))
    <div class="form-group">
        <label>Old Image :</label>
        <img src="{{$row->image('50_50')}}" style="width: 120px;" alt="">
    </div>
@endif

<div class="form-group">
    <label>Image :</label>
    <input type="file" name="image" id="image" class="{{ ($errors->has('image'))?' form-error':'' }}">
    @if($errors->has('image'))
        <div class="form-error-message">{{ $errors->first('image') }}</div>
    @endif
</div>
