@extends('admin.layouts.app')

@section('content')
<!-- Content of Dashboard Page -->

<!----- Dashboard Body Content Section Start ----->
<div class="dashboardBody_Box">
  <div class="mainWrapper_Sec">
    <div class="container-fluid">
      <div class="Wrapper_Box">
        <div class="sectionHeadingBox d-flex align-items-center justify-content-between mb-4">
          <h2 class="mb-0">Multi Shop</h2>

          <div class="tab_ButtonBox">
            <a href="javascript:void(0)" class="editBtn"><i class="fa-solid fa-pen me-1"></i> Edit</a>
            <a href="javascript:void(0)" class="viewBtn"><i class="fa-solid fa-eye me-1"></i> View</a>
          </div>
        </div>

        <div class="paragraph_Box">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec odio est. Donec blandit risus
            egestas purus laoreet scelerisque. Pellentesque malesuada molestie leo sed volutpat. Proin tempus quam
            arcu, id dictum dolor dapibus at. Sed congue congue ipsum in fringilla. Curabitur ullamcorper, nulla
            eget hendrerit volutpat, tellus eros scelerisque elit, venenatis congue ipsum tortor a turpis.
            Phasellus hendrerit urna a tincidunt luctus. Mauris cursus felis non ullamcorper pretium. Duis ut enim
            ipsum. Quisque gravida enim risus, nec fringilla enim interdum in. Suspendisse feugiat venenatis neque
            sit amet luctus.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec odio est. Donec blandit risus
            egestas purus laoreet scelerisque. Pellentesque malesuada molestie leo sed volutpat. Proin tempus quam
            arcu, id dictum dolor dapibus at. Sed congue congue ipsum in fringilla. Curabitur ullamcorper, nulla
            eget hendrerit volutpat, tellus eros scelerisque elit, venenatis congue ipsum tortor a turpis.
            Phasellus hendrerit urna a tincidunt luctus. Mauris cursus felis non ullamcorper pretium. Duis ut enim
            ipsum. Quisque gravida enim risus, nec fringilla enim interdum in. Suspendisse feugiat venenatis neque
            sit amet luctus.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec odio est. Donec blandit risus
            egestas purus laoreet scelerisque. Pellentesque malesuada molestie leo sed volutpat. Proin tempus quam
            arcu, id dictum dolor dapibus at. Sed congue congue ipsum in fringilla. Curabitur ullamcorper, nulla
            eget hendrerit volutpat, tellus eros scelerisque elit, venenatis congue ipsum tortor a turpis.
            Phasellus hendrerit urna a tincidunt luctus. Mauris cursus felis non ullamcorper pretium. Duis ut enim
            ipsum. Quisque gravida enim risus, nec fringilla enim interdum in. Suspendisse feugiat venenatis neque
            sit amet luctus.</p>
        </div>
      </div>

      <div class="Wrapper_Box">
        <div class="sectionHeadingBox">
          <h2>Our Brands</h2>
        </div>

        <div class="row align-items-center columnGap">
          <div class="col-md">
            <div class="branding_Box">
              <img src="{{asset('assets/admin/images/champion.png') }}" class="img-fluid" />
            </div>
          </div>

          <div class="col-md">
            <div class="branding_Box">
              <img src="{{asset('assets/admin/images/puma.jpg') }}" class="img-fluid" />
            </div>
          </div>

          <div class="col-md">
            <div class="branding_Box">
              <img src="{{asset('assets/admin/images/zara.png') }}" class="img-fluid" />
            </div>
          </div>

          <div class="col-md">
            <div class="branding_Box">
              <img src="{{asset('assets/admin/images/champion.png') }}" class="img-fluid" />
            </div>
          </div>

          <div class="col-md">
            <div class="branding_Box">
              <img src="{{asset('assets/admin/images/puma.jpg') }}" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection