<div class="headline">
    <div><h5>News & Blogs</h5></div>
    @if(isset($data['row']) && count($data['row'])>0)
    <div><a href="{{ route('frontend.blog.index') }}" class="hover-link">View All</a></div>
    @endif
</div>

@if(isset($data['row']) && count($data['row'])>0)
    @foreach($data['row'] as $row)

        <div class="items">
            <div class="row">
                <div class="col-md-4"><img
                        src="{{ $row->image('300_300') }}" alt=""></div>
                <div class="col-md-8">

                    <a href="{{ route('frontend.blog.detail',$row->slug) }}" class="news-cat">{{$row->category->title}}</a>
                    <a href="{{ route('frontend.blog.detail',$row->slug) }}"><h5>{{ $row->title }}</h5></a>

                    <p> {!! Str::words(strip_tags($row->description), $limit = 35, $end = '...') !!}</p>

                </div>
            </div>
        </div>
    @endforeach
@endif
