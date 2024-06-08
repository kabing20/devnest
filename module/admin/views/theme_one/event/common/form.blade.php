<div class="form-group">
    <label>Title :</label>
    <input type="text" name="title" placeholder="Enter Title" value="{{ old('title') ?? $row->title ?? '' }}"
           class="form-control{{ ($errors->has('title'))?' form-error':'' }}">
    @if($errors->has('title'))
        <div class="form-error-message">{{ $errors->first('title') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Choose Category :</label>
    <select name="event_category_id" class="form-control{{ ($errors->has('event_category_id'))?' form-error':'' }}">
        <option value="">Choose Category</option>
        @if(isset($data['event-categories']) && count($data['event-categories'])>0)
            @foreach($data['event-categories'] as $category)

                <option {{ (isset($row) &&  $category->id == $row->event_category_id)?'selected':'' }} value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        @endif
    </select>

    @if($errors->has('event_category_id'))
        <div class="form-error-message">{{ $errors->first('event_category_id') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Inaguration :</label>
    <input type="text" name="inaguration" placeholder="Enter Inaguration" value="{{ old('inaguration') ?? $row->inaguration ?? '' }}"
           class="form-control{{ ($errors->has('inaguration'))?' form-error':'' }}" maxlength = '20'>
    @if($errors->has('inaguration'))
        <div class="form-error-message">{{ $errors->first('inaguration') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Location :</label>
    <input type="text" name="location" placeholder="Enter Location" value="{{ old('location') ?? $row->location ?? '' }}"
           class="form-control{{ ($errors->has('location'))?' form-error':'' }}" maxlength = '25'>
    @if($errors->has('location'))
        <div class="form-error-message">{{ $errors->first('location') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Date :</label>
    <input type="date" name="date" placeholder="Enter Date" value="{{ old('date') ?? $row->date ?? '' }}"
           class="form-control{{ ($errors->has('date'))?' form-error':'' }}">
    @if($errors->has('date'))
        <div class="form-error-message">{{ $errors->first('date') }}</div>
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
        <img src="{{$row->image('50_50')}}" style="width: 120px;" alt="">
    </div>
@endif

<div class="form-group">
    <label>Image :</label>
    <input type="file" name="image" id ="image" class="form-control{{ ($errors->has('image'))?' form-error':'' }}">
    @if($errors->has('image'))
        <div class="form-error-message">{{ $errors->first('image') }}</div>
    @endif
</div>
