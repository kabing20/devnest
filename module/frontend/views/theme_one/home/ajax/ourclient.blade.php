<div class="container-fluid">
    <div class="row client-slide">
        @if(isset($data['row']) && count($data['row'])>0)
            @foreach($data['row'] as $row)
                <div class="col-md-3">
                    <div class="normal">
                        <img src="{{ $row->image('300_300') }}" alt="">
                        <h4>{{ $row->title ?? '' }}</h4>
                        <p>

                            {!! \Illuminate\Support\Str::limit($row->description,100) !!}
                        </p>
                    </div>


                    <div class="flipdiv">
                        <h4>OUR CLIENTS LOVE <br>
                            WORKING WITH US
                        </h4>

                        <p class="mt-4 mb-3">

                           {!! \Illuminate\Support\Str::limit($row->description,100) !!}

                        </p>

                        @if($row->view_more)
                            <a href="{{ $row->view_more }}" class="read-more-btn view-btn" target="__blank">VIEW MORE</a>
                        @else
                        <a href="{{ route('frontend.about_us.index') }}" class="read-more-btn view-btn">VIEW MORE</a>
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
