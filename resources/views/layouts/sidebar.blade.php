
@php
$websites = App\Models\Admin\Coupon\Website::where('status',1)->get();
@endphp
        <div class="col-sm-3">
            <div class="coupon_category">
              <div class="retailers">
                <div class="retailers_heading">
                  <h4>Similar Coupons</h4>
                </div>
                <div class="retailers_content">
                  @foreach($coupons as $coupon)
                  <a href="">{{ Str::words($coupon->title,'3','..') }}</a>
                  @endforeach
                </div>
              </div>
            </div>
  
            <div class="coupon_category">
              <div class="retailers">
                <div class="retailers_heading">
                  <h4>Similar Coupons</h4>
                </div>
                <div class="retailers_content">
                  <div class="row g-3">
                    @foreach($websites as $website)
                    <div class="col-6">
                      <div class="sm_box"> 
                        @if ($website->image)
                        <img src="{{ asset('storage/app/public/'.$website->image) }}" alt="adobe">
                        @else
                        
                        <img src="{{ asset('public/front/assets/image/amazon2.jpg') }}" alt="adobe">
                        @endif
                        <p class="text-center text-muted mt-1 mb-0">{{ $website->name }}</p>
                      </div>
                    </div>
                      
                    @endforeach
                    
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>