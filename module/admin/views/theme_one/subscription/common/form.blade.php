<div class="form-group row">
    <div class="col-md-2">
        <label>Description :</label>
    </div>
    <div class="col-md-8">

        <textarea type="text" name="description" placeholder="Enter Description"
                  class="form-control{{ ($errors->has('description'))?' form-error':'' }}">{{ old('description') ?? $row->description ?? '' }}</textarea>
        @if($errors->has('description'))
            <div class="ckeditor form-error-message">{{ $errors->first('description') }}</div>
        @endif
    </div>
</div>


<div class="form-group row">
    <div class="col-md-2">
        <label>Best Choice :</label>
    </div>
    <div class="col-md-8">
        <label>Title :</label>
        <input type="text" name="best_choice_title" placeholder="Enter Title" value="{{ old('best_choice_title') ?? $row->best_choice_title ?? '' }}"
               class="form-control{{ ($errors->has('best_choice_title'))?' form-error':'' }}">
        @if($errors->has('best_choice_title'))
            <div class="form-error-message">{{ $errors->first('best_choice_title') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Best Choice :</label>
    </div>
    <div class="col-md-8">
        <label>Short Description :</label>
        <textarea type="text" name="best_choice_description"  placeholder="Enter Description"
                  class="form-control{{ ($errors->has('best_choice_description'))?' form-error':'' }}">{{ old('best_choice_description') ?? $row->best_choice_description ?? '' }}</textarea>
        @if($errors->has('best_choice_description'))
            <div class="ckeditor form-error-message">{{ $errors->first('best_choice_description') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Best Choice Image:</label>
    </div>
    <div class="col-md-8">

        @if(isset($row->best_choice_image))
            <div class="form-group">
                <img src="{{$row->bestChoiceImage('50_50')}}" style="width: 120px;" alt="">
            </div>
        @endif
        <input type="file" name="best_choice_image" class="{{ ($errors->has('best_choice_image'))?' form-error':'' }}">
        @if($errors->has('best_choice_image'))
            <div class="form-error-message">{{ $errors->first('best_choice_image') }}</div>
        @endif</div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Our Vision :</label>
    </div>
    <div class="col-md-8">
        <label>Motto :</label>
        <textarea type="text" name="motto" placeholder="Enter Motto"
                  class="form-control{{ ($errors->has('motto'))?' form-error':'' }}">{{ old('motto') ?? $row->motto ?? '' }}</textarea>
        @if($errors->has('motto'))
            <div class="ckeditor form-error-message">{{ $errors->first('motto') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Our Vision :</label>
    </div>
    <div class="col-md-8">
        <label>Short Description :</label>
        <textarea type="text" name="vision_description" placeholder="Enter Description"
                  class="form-control{{ ($errors->has('vision_descriptions'))?' form-error':'' }}">{{ old('vision_description') ?? $row->vision_description ?? '' }}</textarea>
        @if($errors->has('vision_description'))
            <div class="ckeditor form-error-message">{{ $errors->first('vision_description') }}</div>
        @endif
    </div>
</div>


<div class="form-group row">
    <div class="col-md-2">
        <label>Our Mission :</label>
    </div>
    <div class="col-md-8">
        <label> Description :</label>
        <textarea type="text" name="mission_description"  placeholder="Enter Description"
                  class="form-control{{ ($errors->has('mission_description'))?' form-error':'' }}">{{ old('mission_description') ?? $row->mission_description ?? '' }}</textarea>
        @if($errors->has('mission_description'))
            <div class="ckeditor form-error-message">{{ $errors->first('mission_description') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Our Goals :</label>
    </div>
    <div class="col-md-8">
        <label> Description :</label>
        <textarea type="text" name="goal_description" placeholder="Enter Description"
                  class="form-control{{ ($errors->has('goal_description'))?' form-error':'' }}">{{ old('goal_description') ?? $row->goal_description ?? '' }}</textarea>
        @if($errors->has('goal_description'))
            <div class="ckeditor form-error-message">{{ $errors->first('goal_description') }}</div>
        @endif
    </div>
</div>





<div class="form-group row">
    <div class="col-md-2">
        <label>Video Banner:</label>
    </div>
    <div class="col-md-8">

        @if(isset($row->video_banner_thumb))
            <div class="form-group">
                <img src="{{ $row->video_banner_thumb }}" style="width: 120px;" alt="">
            </div>
        @endif
        <input type="file" name="footer_logo" class="{{ ($errors->has('video_banner_thumb'))?' form-error':'' }}">
        @if($errors->has('video_banner_thumb'))
            <div class="form-error-message">{{ $errors->first('video_banner_thumb') }}</div>
        @endif</div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Video Banner:</label>
    </div>
    <div class="col-md-8">
        <label> Url :</label>
        @if(isset($row->video_banner_url))
            <div class="form-group">
                <img src="{{ $row->video_banner_url }}" style="width: 120px;" alt="">
            </div>
        @endif
        <input type="text" name="video_banner_url" placeholder="Enter Title" value="{{ old('video_banner_url') ?? $row->video_banner_url ?? '' }}"
               class="form-control{{ ($errors->has('best_choice_title'))?' form-error':'' }}">
        @if($errors->has('video_banner_url'))
            <div class="form-error-message">{{ $errors->first('video_banner_url') }}</div>
        @endif</div>
</div>

