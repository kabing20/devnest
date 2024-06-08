<label>Image :</label>

<input type="file" name="images[]"  class="gallery_media"
       multiple="multiple">
@if($errors->has('images'))
    <div class="form-error-message">{{ $errors->first('images') }}</div>
    @endif



    </div>


