<div class="form-group">
    <label>Title :</label>
    <input type="text" name="title" placeholder="Enter Title" value="{{ old('title') ?? $row->title ?? '' }}"
           class="form-control{{ ($errors->has('title'))?' form-error':'' }}">
    @if($errors->has('title'))
        <div class="form-error-message">{{ $errors->first('title') }}</div>
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
