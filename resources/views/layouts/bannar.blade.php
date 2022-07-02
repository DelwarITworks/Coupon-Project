    <!-- canvas color starts  -->

@php
  $websites = App\Models\Admin\Coupon\Website::where('status',1)->get();
@endphp
    <canvas></canvas>
    <!-- canvas color ends -->

      
    <!-- banner sedtion starts  -->

    <div class="banner">
        <div class="circle1"></div>
        <div class="container-custom">
          <div class="row">
            <div class="col-md-6">
              <div class="banner_content">
                <h1>Never miss out on coupons or cashback</h1>
              </div>
            </div>
            <div class="col-md-6">
              <div class="banner_coupon ms-auto">
                <div class="row g-3">
                  @foreach($websites as $website)
                  <div class="col-6">
                    <div class="coupon_box">
                      <div class="coupon_img">
                        @if ($website->image)
                        <img src="{{ asset('storage/app/public/'.$website->image) }}" alt="adobe">
                        @else
                        
                        <img src="{{ asset('public/front/assets/image/amazon2.jpg') }}" alt="adobe">
                        @endif
                      </div>
                      <div class="coupon_content text-center">
                        <a href="{{ route('website.coupons',$website->slug) }}">{{ $website->name }}</a>
                      </div>
                    </div>
                  </div>
                    
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      
      <!-- banner sedtion ends -->