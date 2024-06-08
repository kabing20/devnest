<div class="headline">
    <div><h5 class="awards-title">Awards and Achievements</h5></div>
    @if(isset($data['row']))
    <div><a href="{{ route('frontend.award.index') }}" class="hover-link">View All</a></div>

</div>

<div class="row">
    <div class="col-md-4"><a href="{{ route('frontend.award.index') }}"><img
                src="{{ $data['row']->image('300_300') }}" alt=""></a>
    </div>
    <div class="col-md-8">
        <h5>{{ $data['row']->title ?? '' }}</h5>

        <p> {!! Str::words(strip_tags($data['row']->description), $limit = 35, $end = '...') !!}</p>
{{--        <a href="#" class="rd-more hover-btn">READ MORE</a>--}}
    </div>
</div>

@endif
