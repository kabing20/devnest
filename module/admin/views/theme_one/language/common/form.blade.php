<div class="form-group">
    <label>Name :</label>
    <input type="text" name="name" placeholder="Enter Name" value="{{ old('name') ?? $row->name ?? '' }}"
           class="form-control{{ ($errors->has('name'))?' form-error':'' }}">
    @if($errors->has('name'))
        <div class="form-error-message">{{ $errors->first('name') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Short Name :</label>
    <input type="text" name="short_name" placeholder="Enter Short Name" value="{{ old('short_name') ?? $row->short_name ?? '' }}"
           class="form-control{{ ($errors->has('short_name'))?' form-error':'' }}">
    @if($errors->has('short_name'))
        <div class="form-error-message">{{ $errors->first('short_name') }}</div>
    @endif
</div>

@if(isset($row->flag))
    <div class="form-group">
        <label>Old Flag :</label>
        {!! $row->flag_path !!}
    </div>
@endif

<div class="form-group">
    <label>Flag :</label>
    <input type="file" name="flag" class="form-control{{ ($errors->has('flag'))?' form-error':'' }}">
    @if($errors->has('flag'))
        <div class="form-error-message">{{ $errors->first('flag') }}</div>
    @endif
</div>
