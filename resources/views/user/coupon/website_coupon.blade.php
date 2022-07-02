@extends('layouts.app')
@section('content')

<main class="my-5">

  <div class="coupon_container">
    <div class="container-custom">
      <div class="row">

        <div class="col-sm-9">
          <div class="coupons">
            <!-- <a class="popup-with-zoom-anim" href="#product">click</a> -->
            <div class="row g-4">
              @foreach($coupons as $coupon)
              <div class="col-sm-6">
                <a class="popup-with-zoom-anim" href="#{{ $coupon->id }}">
                  <div class="coupon_card">

                    <div class="card_left">
                      <div class="offer">
                        <div class="offer_top">
                          <span>{{ $coupon->discount }}%</span>
                          <span>OFF</span>
                        </div>
                        <div class="offer_bottom">
                          <span>coupon code</span>
                        </div>
                      </div>
                    </div>

                    <div class="card_right">
                      <div class="card_text">
                        <h4>Save {{ $coupon->discount }}% Off</h4>
                        <p>{{ Str::words($coupon->title,'8','..') }}</p>
                      </div>
                      <div class="card_btn">
                        <a href="#" class="btn">{{ $coupon->promo_code }}</a>
                      </div>
                    </div>

                  </div> 
                </a>
              </div>

              
              <!-- product popups starts -->
              <div class="popup zoom-anim-dialog fr mfp-hide" id="{{ $coupon->id }}">
                <div class="popup_circle circle_top"></div>
                <div class="popup_circle circle_bottom"></div>
                <div class="popup_content">
                  <div class="copy d-flex justify-content-center align-items-center">
                    <input class="coupon_text border-0" type="text" value="{{ $coupon->promo_code }}">
                    <button class="copy_btn border-0" href="#">Copy</button>
                  </div>
                  <div class="go_btn">
                    <a target="_blank" href="{{ $coupon->website->link }}" class="btn">Go to themeforest <i class="fa-solid fa-angle-right ms-2"></i></a>
                  </div>
                </div>
              </div>
                
              @endforeach
            </div>
          </div>

          <div class="coupons coupon_bottom">
            <h4>Popular Categories</h4>

            <div class="category_box mt-4">
              @foreach ($categories as $category)
              <div class="cat">
                <i class="fa-solid fa-check"></i>
                <a href="#">{{ $category->name }}</a>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        {{-- sidebar --}}

        @include('layouts.sidebar')

        {{-- sidebar end --}}

      </div>
    </div>
  </div>

  @include('layouts.top_offer')
  
</main>
@endsection


