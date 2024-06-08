@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

                <h3>{{$products}}<sup style="font-size: 20px"></sup></h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                {{-- <i class="ion ion-person-add"></i> --}}
              </div>
              <a href="{{route('admin.product.index')}}" class="small-box-footer">view<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$blogs}}</h3>

                <p>Total Blog</p>
              </div>
              <div class="icon">
                  {{-- <i class="fas fa-empty-set"></i> --}}
              </div>
              <a href="{{route('admin.blog.index')}}" class="small-box-footer">View<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">

                <h3>{{$events }}</h3>

                <p>Total Event</p>
              </div>
              <div class="icon">
                {{-- <i class="ion ion-person-add"></i> --}}
              </div>
              <a href="{{route('admin.event.index')}}" class="small-box-footer">view<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->

            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$awards}}</h3>

                <p>Total Awards</p>
              </div>
              <div class="icon">
                  {{-- <i class="fas fa-calendar-times"></i> --}}
              </div>
              <a href="{{route('admin.award.index')}}" class="small-box-footer">view<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    </div>
    @endsection
