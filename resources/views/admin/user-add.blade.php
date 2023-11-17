@extends('admin.layouts.app')

@section('content')
<!-- Content of User Add Page -->

      <!----- Add User Form Content Section Start ----->
      <div class="dashboardBody_Box">
        <div class="mainWrapper_Sec">
          <div class="container-fluid">
            <div class="Wrapper_Box">
              <div class="sectionHeadingBox d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Add User</h2>
              </div>

              <div class="formfield_Sec">
                <div class="row">
                  <div class="col-md-4">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Lorem Ipsum</label>
                      <input type="email" class="form-control" placeholder="Enter Lorem Ipsum">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Lorem Ipsum</label>
                      <input type="number" class="form-control" placeholder="Enter Lorem Ipsum">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Lorem Ipsum</label>
                      <input type="file" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Lorem Ipsum</label>
                      <select class="form-select" aria-label="Default select example">
                        <option hidden>Open this select menu</option>
                        <option value="Lorem Ipsum 1">Lorem Ipsum 1</option>
                        <option value="Lorem Ipsum 2">Lorem Ipsum 2</option>
                        <option value="Lorem Ipsum 3">Lorem Ipsum 3</option>
                        <option value="Lorem Ipsum 4">Lorem Ipsum 4</option>
                        <option value="Lorem Ipsum 5">Lorem Ipsum 5</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Lorem Ipsum</label>

                      <div class="d-flex gap-3">
                        <div class="form-check cstumForm_CheckBox">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Lorem Ipsum
                          </label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Lorem Ipsum
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="customForm_groupBox mb-3">
                      <label class="form-label">Description</label>
                      <textarea class="form-control" rows="5" placeholder="Enter Description"></textarea>
                    </div>
                  </div>
                </div>

                <div class="tab_ButtonBox formBTN_Box">
                  <a href="{{ url('/admin/user-list') }}" class="viewBtn cancelBTN">Cancel</a>
                  <a href="javascript:void(0)" class="editBtn">Submit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!----- Add User Form Content Section End ----->

@endsection