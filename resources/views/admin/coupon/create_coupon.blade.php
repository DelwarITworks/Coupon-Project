@extends('admin.layouts.app')


@section('title','Create Coupon')


@section('content')
<!-- Start Page content -->
<div class="content">
    <!-- Container-fluid starts-->
  <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <h4 class="header-title mb-4" style="float: left;">Add New coupon</h4>
                  {{-- <h4 class="header-title mb-4" style="float: right;"><a href="{{ route('index.coupon') }}" class="btn btn-outline-primary">All coupon List</a></h4> --}}
              </div>
          </div>
          @if(session('success'))
              <div class="alert alert-success">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> {{session('success')}}.
              </div>
          @endif
          @if(session('wrong'))
              <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> {{session('wrong')}}.
              </div>
          @endif
      </div>
  </div>
  <!-- Container-fluid Ends-->
<!-- Start Content -->
<div class="container-fluid">
  <div class="row">
      <!-- end col -->
      <div class="col-md-12">
          <div class="card-box">

              <br><br>
              <form method="post" action="{{ route('store.coupon') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                      <label for="name" class="col-3 col-form-label">Title <span class="text-danger">*</span></label>
                      <div class="col-9">
                          <input type="text" id="name" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                          @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="slug" class="col-3 col-form-label">Slug <span class="text-danger">*</span></label>
                      <div class="col-9">
                          <input type="text" id="slug" class="form-control @error('slug') is-invalid @enderror" name="slug"  value="{{ old('slug') }}">
                          @error('slug')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="discount" class="col-3 col-form-label">Discount <span class="text-danger">*</span></label>
                    <div class="col-9">
                        <input type="number" id="discount" class="form-control @error('discount') is-invalid @enderror" name="discount"  value="{{ old('discount') }}">
                        @error('discount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                  <div class="form-group row">
                      <label for="promo_code" class="col-3 col-form-label">Promo code <span class="text-danger">*</span></label>
                      <div class="col-9">
                          <input type="text" id="promo_code" class="form-control @error('promo_code') is-invalid @enderror" name="promo_code"  value="{{ old('promo_code') }}">
                          @error('promo_code')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
                  <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                  <div class="form-group row">
                      <label for="website_id" class="col-3 col-form-label">Website <span class="text-danger">*</span></label>
                      <div class="col-9">
                          <select id="website_id" class="form-control @error('website_id') is-invalid @enderror" name="website_id"  value="{{ old('website_id') }}">
                              <option value="">Select Website First</option>
                              @foreach ($websites as $website)
                                <option value="{{ $website->id }}">{{ $website->name }}</option>
                              @endforeach
                          </select>
                          @error('website_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="category_id" class="col-3 col-form-label">Category</label>
                      <div class="col-9">
                          <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id"  value="{{ old('category_id') }}">
                            @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                          </select>
                          @error('category_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="image" class="col-3 col-form-label">Image</label>
                      <div class="col-9">
                          <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image"  value="{{ old('image') }}">
                          @error('image')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="description" class="col-3 col-form-label"> </label>
                      <div class="col-9">
                          
                        <div class="row">
                            <div class=" col-md-4">
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0"> Trend </label>
                                    <input class="form-control" id="validationCustom05" type="checkbox" value="1" name="trend">
                                </div>
                                
                            </div>
                            <div class=" col-md-4">
                                <div class="form-group">
                                    <label for="validationCustom05" class="col-form-label pt-0"> Ads </label>
                                    <input class="form-control" id="validationCustom05" type="checkbox" value="" name="importent">
                                </div>
                                
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="description" class="col-3 col-form-label">Description </label>
                      <div class="col-9">
                          <textarea name="description" id="editor" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10">{{ old('description') }}</textarea>
                          @error('description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>

                  <hr>

                  <div class="form-group row">
                    <label for="image" class="col-3 col-form-label">Meta Tag</label>
                    <div class="col-9">
                        <input type="text" id="image" class="form-control @error('meta_tag') is-invalid @enderror" name="meta_tag"  value="{{ old('meta_tag') }}">
                        @error('meta_tag')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="meta_description" class="col-3 col-form-label">Meta Description </label>
                      <div class="col-9">
                          <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" cols="30" rows="10">{{ old('meta_description') }}</textarea>
                          @error('meta_description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group mb-0 justify-content-end row text-center">
                      <div class="col-12">
                          <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!-- end row -->
</div> <!-- end container-fluid -->
</div>
@endsection



@section('footer_js')

<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="website_id"]').on('change',function(){
            var website_id = $(this).val();
            $.ajax({
                method:'GET',
                dataType:'json',
                url:'{{ url("/fetch-district/") }}/'+website_id,
                success:function(data){
                     var d = $('select[name = "district_id"]').empty();
                     $('select[name = "district_id"]').append('<option>Select District</option>');
                   $.each(data, function(key, value){
                    $('select[name = "district_id"]').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                    
                },
            });
        })
    })
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor12'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    $('#name').keyup(function() {
        $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g, "-"));
    });
</script>
@endsection

@section('header_css')
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>


@endsection
