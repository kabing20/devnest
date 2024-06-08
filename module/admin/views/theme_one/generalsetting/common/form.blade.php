<div class="form-group row">
    <div class="col-md-2">
        <label>Logo :</label>
    </div>
    <div class="col-md-8">
        @if(isset($setting['logo']))
            <div class="form-group">
                <img src="{{ $setting['logo'] }}" style="width: 120px;" alt="">
            </div>
        @endif
        <input type="file" name="logo" class="{{ ($errors->has('logo'))?' form-error':'' }}">
        @if($errors->has('logo'))
            <div class="form-error-message">{{ $errors->first('logo') }}</div>
        @endif
    </div>
</div>
<div class="form-group row">
    <div class="col-md-2">
        <label>Footer Logo :</label>
    </div>
    <div class="col-md-8">
        @if(isset($setting['footer_logo']))
            <div class="form-group">
            <img src="{{ $setting['footer_logo'] }}" style="width: 120px;" alt="">
    </div>
    @endif
    <input type="file" name="footer_logo" class="{{ ($errors->has('footer_logo'))?' form-error':'' }}">
    @if($errors->has('footer_logo'))
        <div class="form-error-message">{{ $errors->first('footer_logo') }}</div>
    @endif
</div>
</div><div class="form-group row">
    <div class="col-md-2">
        <label>Meta Logo :</label>
    </div>
    <div class="col-md-8">
        @if(isset($setting['meta_logo']))
            <div class="form-group">
            <img src="{{ $setting['meta_logo'] }}" style="width: 120px;" alt="">
    </div>
    @endif
    <input type="file" name="meta_logo" class="{{ ($errors->has('meta_logo'))?' form-error':'' }}">
    @if($errors->has('meta_logo'))
        <div class="form-error-message">{{ $errors->first('meta_logo') }}</div>
    @endif
</div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Parent Company Logo :</label>
    </div>
    <div class="col-md-8">
        @if(isset($setting['parent_company_logo']))
            <div class="form-group">
                <img src="{{ $setting['parent_company_logo'] }}" style="width: 120px;" alt="">
            </div>
        @endif
        <input type="file" name="parent_company_logo" class="{{ ($errors->has('parent_company_logo'))?' form-error':'' }}">
        @if($errors->has('parent_company_logo'))
            <div class="form-error-message">{{ $errors->first('parent_company_logo') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Parent Company Logo Footer :</label>
    </div>
    <div class="col-md-8">

        @if(isset($setting['parent_company_logo_footer']))
            <div class="form-group">
                <img src="{{ $setting['parent_company_logo_footer'] }}" style="width: 120px;" alt="">
            </div>
        @endif
        <input type="file" name="parent_company_logo_footer" class="{{ ($errors->has('parent_company_logo_footer'))?' form-error':'' }}">
        @if($errors->has('parent_company_logo_footer'))
            <div class="form-error-message">{{ $errors->first('parent_company_logo_footer') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Email :</label>
    </div>
    <div class="col-md-8">
        <input type="text" name="email"  placeholder="Enter Email" value="{{ isset($setting['email'])?$setting['email']:"" }}"
               class="form-control{{ ($errors->has('email'))?' form-error':'' }}">
        @if($errors->has('email'))
            <div class="form-error-message">{{ $errors->first('email') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Location :</label>
    </div>
    <div class="col-md-8">
        <input type="text" name="location"  placeholder="Enter Location" value="{{ isset($setting['location'])?$setting['location']:"" }}"
               class="form-control{{ ($errors->has('location'))?' form-error':'' }}">
        @if($errors->has('location'))
            <div class="form-error-message">{{ $errors->first('location') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Phonenumber :</label>
    </div>
    <div class="col-md-8">
        <input type="text" name="phone_number"  placeholder="Enter Phonenumber" value="{{ isset($setting['phone_number'])?$setting['phone_number']:"" }}"
               class="form-control{{ ($errors->has('phone_number'))?' form-error':'' }}">
        @if($errors->has('phone_number'))
            <div class="form-error-message">{{ $errors->first('phone_number') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Googlemap enbuild :</label>
    </div>
    <div class="col-md-8">
        <textarea type="text" name="google_map"  placeholder="Enter Googlemap enbuild"
               class="form-control{{ ($errors->has('google_map'))?' form-error':'' }}">{{ isset($setting['google_map'])?$setting['google_map']:"" }}</textarea>
        @if($errors->has('google_map'))
            <div class="form-error-message">{{ $errors->first('google_map') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Facebook :</label>
    </div>
    <div class="col-md-8">
        <input type="text" name="facebook"  placeholder="place Facebook profile url" value="{{ isset($setting['facebook'])?$setting['facebook']:"" }}"
               class="form-control{{ ($errors->has('facebook'))?' form-error':'' }}">
               <small>https://www.facebook.com/...</small>
        @if($errors->has('facebook'))
            <div class="form-error-message">{{ $errors->first('facebook') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Twitter : </label>
    </div>
    <div class="col-md-8">
        <input type="text" name="twitter"  placeholder="place Twitter profile url" value="{{ isset($setting['twitter'])?$setting['twitter']:"" }}"
               class="form-control{{ ($errors->has('twitter'))?' form-error':'' }}">
               <small>https://www.twitter.com/...</small>
        @if($errors->has('twitter'))
            <div class="form-error-message">{{ $errors->first('twitter') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Linkedin :</label>
    </div>
    <div class="col-md-8">
        <input type="text" name="linkedin"  placeholder="place Linkedin url" value="{{ isset($setting['linkedin'])?$setting['linkedin']:"" }}"
               class="form-control{{ ($errors->has('linkedin'))?' form-error':'' }}">
               <small>https://www.linkedin.com/...</small>
        @if($errors->has('linkedin'))
            <div class="form-error-message">{{ $errors->first('linkedin') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Instagram: </label>
    </div>
    <div class="col-md-8">
        <input type="text" name="instagram"  placeholder="place Instagram url" value="{{ isset($setting['instagram'])?$setting['instagram']:"" }}"
               class="form-control{{ ($errors->has('instagram'))?' form-error':'' }}">
                <small>https://www.instagram.com/...</small>
        @if($errors->has('instagram'))
            <div class="form-error-message">{{ $errors->first('instagram') }}</div>
        @endif
    </div>
</div>

<div class="form-group row">
    <div class="col-md-2">
        <label>Get In Touch :</label>
    </div>
    <div class="col-md-8">
        <input type="text" name="get_in_touch"  placeholder="Enter Get In Touch" value="{{ isset($setting['get_in_touch'])?$setting['get_in_touch']:"" }}"
               class="form-control{{ ($errors->has('get_in_touch'))?' form-error':'' }}">
        @if($errors->has('get_in_touch'))
            <div class="form-error-message">{{ $errors->first('get_in_touch') }}</div>
        @endif
    </div>
</div>

