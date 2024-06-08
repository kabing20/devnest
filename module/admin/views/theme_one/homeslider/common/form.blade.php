<div class="form-group">
    <label>Title :</label>
    <input type="text" name="title" placeholder="Enter Title" value="{{ old('title') ?? $row->title ?? '' }}"
           class="form-control{{ ($errors->has('title'))?' form-error':'' }}">
    @if($errors->has('title'))
        <div class="form-error-message">{{ $errors->first('title') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Sub Title :</label>
    <input type="text" name="sub_title" placeholder="Enter Title" value="{{ old('sub_title') ?? $row->sub_title ?? '' }}"
           class="form-control{{ ($errors->has('sub_title'))?' form-error':'' }}">
    @if($errors->has('sub_title'))
        <div class="form-error-message">{{ $errors->first('sub_title') }}</div>
    @endif
</div>


<div class="form-group">
    <label>Short Description :</label>
    <textarea type="text" name="short_description" placeholder="Enter Description"
              class="form-control{{ ($errors->has('short_description'))?' form-error':'' }}">{{ old('short_description') ?? $row->short_description ?? '' }}</textarea>
    @if($errors->has('short_description'))
        <div class="ckeditor form-error-message">{{ $errors->first('short_description') }}</div>
    @endif
</div>

@if(isset($row->background))
    <div class="form-group">
        <label>Old Image :</label>

        <img src="{{ $row->background('50_50') }}" style="width: 120px;" alt="">
    </div>
@endif



<div class="form-group">
    <label>Background :</label>
    <input type="file" name="background" id="images" class="form-control{{ ($errors->has('background'))?' form-error':'' }}">
    @if($errors->has('background'))
        <div class="form-error-message">{{ $errors->first('background') }}</div>
    @endif
</div>


@if(isset($row->image))
    <div class="form-group">
        <label>Old Image :</label>

        <img src="{{ $row->image('50_50') }}" style="width: 120px;" alt="">
    </div>
@endif



<div class="form-group">
    <label>Image :</label>
    <input type="file" name="image"  id = "image" class="form-control{{ ($errors->has('imaage'))?' form-error':'' }}">
    @if($errors->has('imaage'))
        <div class="form-error-message">{{ $errors->first('imaage') }}</div>
    @endif
</div>


<div class="form-group">
    <label>Url :</label>
    <input type="text" name="url" placeholder="Enter Title" value="{{ old('url') ?? $row->url ?? '' }}"
           class="form-control{{ ($errors->has('url'))?' form-error':'' }}">
    @if($errors->has('url'))
        <div class="form-error-message">{{ $errors->first('url') }}</div>
    @endif
</div>
