
  <div class="top_offer py-5">
    <div class="container-custom">
      <div class="head">
        <h4>Top Offers</h4>
      </div>

      <div class="offer_container">
        <div class="row g-3">
          @foreach($coupons as $coupon)
          @if($coupon->best_offer = 1)
          <div class="col-md-3">
            <div class="offer_box">
              <div class="offer_image">
                @if ($coupon->image)
                <img src="{{ asset('storage/app/public/'.$coupon->image) }}" alt="adobe">
                @else
                
                <img src="{{ asset('public/front/assets/image/amazon2.jpg') }}" alt="adobe">
                @endif
              </div>
              <div class="offer_content">
                <h6>sale</h6>
                <p>{{ Str::words($coupon->title,'8','..') }}</p>
                <span>Sponsored</span>
              </div>
            </div>
          </div>

          @endif
            
          @endforeach

        </div>
      </div>
    </div>
  </div>