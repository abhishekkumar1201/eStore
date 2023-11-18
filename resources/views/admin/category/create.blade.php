@extends('admin.layouts.app')

@section('content')
<!-- Content of Category Add Page -->

      <!----- Add Category Form Content Section Start ----->
      <div class="dashboardBody_Box">
        <div class="mainWrapper_Sec">
          <div class="container-fluid">
            <div class="Wrapper_Box">
              <div class="sectionHeadingBox d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Add Category</h2>
              </div>

              <div class="formfield_Sec">
                <div class="row">
                  <div class="col-md-4">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Category Name</label>
                      <input type="text" class="form-control" placeholder="Enter Category Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Category Image</label>
                      <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Category Status</label>
                      <div class="d-flex gap-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Active
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            In-Active
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Category Description</label>
                      <textarea class="form-control" rows="5" placeholder="Enter Category Description"></textarea>
                    </div>
                  </div>
                </div>
                <div class="tab_ButtonBox formBTN_Box">
                  <a href="{{ route('category-list') }}" class="viewBtn cancelBTN">Cancel</a>
                  <a href="javascript:void(0)" class="editBtn">Submit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!----- Add Category Form Content Section End ----->

@endsection