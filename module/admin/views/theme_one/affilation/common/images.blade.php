<label>Image :</label>
<input type="file" name="images[]" class="form-control{{ ($errors->has('images'))?' form-error':'' }}"
       multiple="multiple">
@if($errors->has('images'))
    <div class="form-error-message">{{ $errors->first('images') }}</div>
    @endif
    </div>


