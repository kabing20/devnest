<div class="headline">
    <div><h5>Affiliations</h5></div>

</div>

<div class="row affiliate">
    @if(isset($data['row']) && count($data['row'])>0)
        @foreach($data['row'] as $row)
    <div class="col-md-4"><img
            src="{{ $row->image('50_50') }}" alt="">
    </div>
        @endforeach
    @endif
</div>

