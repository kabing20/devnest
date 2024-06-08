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

<div class="form-group">
    <label>Choose Category :</label>
    <select name="product_category_id" class="form-control{{ ($errors->has('product_category_id'))?' form-error':'' }}">
        <option value="">Choose Category</option>
        @if(isset($data['product-categories']) && count($data['product-categories'])>0)
            @foreach($data['product-categories'] as $category)
                <option {{ (isset($row) &&  $category->id == $row->product_category_id)?'selected':'' }} value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        @endif
    </select>

    @if($errors->has('product_category_id'))
        <div class="form-error-message">{{ $errors->first('product_category_id') }}</div>
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

<div class="form-group">
    <label>Short Description :</label>
    <textarea type="text" name="short_description"   placeholder="Enter Description"
              class="form-control{{ ($errors->has('short_description'))?' form-error':'' }}">{{ old('short_description') ?? $row->short_description ?? '' }}</textarea>
    @if($errors->has('description'))
        <div class="form-error-message">{{ $errors->first('short_description') }}</div>
    @endif
</div>



<div class="form-group">
    <label>Image :</label>
    <input type="file" name="image" id="image" class="form-control{{ ($errors->has('image'))?' form-error':'' }}" accept="image/*" />
    @if($errors->has('image'))
        <div class="form-error-message">{{ $errors->first('image') }}</div>
    @endif
    @if(isset($row->image))
</br>
<div class="row">
    <div class="col-md-2 col-sm-2 col-xs-6">
        <label>Old Image :</label>
        <img src="{{$row->image('50_50')}}" style="width: 120px;" alt="">
    </div>
</div>
@endif
</div>


<div class="form-group">
    <label>Detail Images :</label>
    <input type="file" name="images[]"  class="gallery_media" multiple="multiple">


    @if($errors->has('images.*'))
    @foreach($errors->get('images.*') as $errors)
           @foreach($errors as $error)
        <div class="form-error-message">{{ $error }}</div>
        @endforeach
        @endforeach
        @endif

        @if(isset($row->images))

        <label>Old Detail Image :</label>
        <div class="row">
        @foreach ($row->images as $key => $photo)
        <div class="col-md-2 col-sm-2 col-xs-6 image-{{$photo->id}}">
            <a href="{{asset('storage/'.$photo->image)}}" target="__blank">
                <img src="{{$photo->image('50_50')}}" style="width: 120px;" alt="">
            </a>


        <button type="button" class="btn btn-danger close-btn deleteRecord" data-id="{{ $photo->id }}"><i class="fa fa-times"></i></button>
        </div>
        @endforeach
    </div>

@endif

</div>



<div class="form-group">
    <label>File :</label>
    <input type="file" name="file" class="form-control{{ ($errors->has('file'))?' form-error':'' }}">
    @if($errors->has('file'))
        <div class="form-error-message">{{ $errors->first('file') }}</div>
    @endif

    @if(isset($row->file))
</br>
    <div class="form-group">
        <label>Old file :</label>
        <a href="{{  asset(str_replace('public','storage',$row->file)) }}" target="_blank">View</a>

    </div>
@endif
</div>


