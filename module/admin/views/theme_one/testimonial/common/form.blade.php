<div class="form-group">
    <label>Name :</label>
    <input type="text" name="name" placeholder="Enter Title" value="{{ old('name') ?? $row->name ?? '' }}"
           class="form-control{{ ($errors->has('name'))?' form-error':'' }}">
    @if($errors->has('name'))
        <div class="form-error-message">{{ $errors->first('name') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Position :</label>
    <input type="text" name="position" placeholder="Enter Title" value="{{ old('position') ?? $row->position ?? '' }}"
           class="form-control{{ ($errors->has('position'))?' form-error':'' }}">
    @if($errors->has('position'))
        <div class="form-error-message">{{ $errors->first('position') }}</div>
    @endif
</div>


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
        <label>Old Image :</label>

        <img src="{{ $row->image('50_50') }}" style="width: 120px;" alt="">
    </div>
@endif

<div class="form-group">
    <label>Image :</label>
    <input type="file" name="image" class="form-control{{ ($errors->has('image'))?' form-error':'' }}">
    @if($errors->has('image'))
        <div class="form-error-message">{{ $errors->first('image') }}</div>
    @endif
</div>
