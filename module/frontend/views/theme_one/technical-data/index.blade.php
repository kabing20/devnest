@extends($theme_path.'.layouts.master_layout')

@section('content')
    <section class="technical">
        <div class="container">
            <div class="row first">
                <div class="col-md-7 wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms">
                    <h5>TECHNICAL DATA</h5>
                    <p>
                        {!! $data['description']->description ?? '' !!}
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="row technical-slide mb-4">

                        @if(isset($data['image']) && count($data['image'])>3)
                            @foreach($data['image'] as $image)
                                <div class="slide-item"><img src="{{ $image->image('300_300') }}"  alt=""></div>
                            @endforeach
                        @endif
                </div>
            </div>
            </div>
            <div class="row second">
                <div class="col-md-7">
                    @php($fileArray = [])
                    @if(isset($data['file']) && count($data['file'])>0)
                        @foreach($data['file'] as $file)
                    <div class="download-div wow fadeInUp animated" data-wow-offset="0" data-wow-delay="200ms">
                        <div class="row">
                            <div class="col-md-2"><img
                                    src="{{ $file->image('50_50') }}" alt="">
                            </div>
                            <div class="col-md-9">
                                <h5>{{ $file->title ?? '' }}</h5>
                                <p>{!! $file->short_description ?? '' !!}</p>

                            </div>
                            @php(array_push($fileArray,asset(str_replace('public','storage',$file->file))))
                            <div class="col-md-1">
                                <a href="{{ asset(str_replace('public','storage',$file->file)) }}" target="_blank" download class="download"><img
                                        src="{{ asset('static_asset/frontend/theme_one/images/technical/download.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-5 ad-section fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms">
                    @if(isset($data['description']))
                    <div><img src="{{ $data['description']->image('700_700') }}" alt=""></div>
                    @endif
                    <div class="blue-div wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                        <h4>Download All At Once</h4>
                        <span>in a combined pdf</span>
                        <a class="dw-btn" href="{{ route('frontend.zip-download',['download'=>'zip']) }}"><i class="fas fa-cloud-download-alt"></i> Download</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>

        function allDownload(){

            alert('test');

            var jsonData = jJSON.parse("{{ json_encode($fileArray) }}");


            console.log(jsonData);

            var urls = [
                'http://example.com/file1',
                'http://example.com/file2',
                'http://example.com/file3'
            ]

            // var interval = setInterval(download, 300, urls);
        }

        function download(urls) {
            var url = urls.pop();

            var a = document.createElement("a");
            a.setAttribute('href', url);
            a.setAttribute('download', '');
            a.setAttribute('target', '_blank');
            a.click();

            if (urls.length == 0) {
                clearInterval(interval);
            }
        }
    </script>
@endpush
