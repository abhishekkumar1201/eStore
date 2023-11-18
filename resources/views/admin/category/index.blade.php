@extends('admin.layouts.app')

@section('content')
<!-- Content of Category List Page -->

      <!----- Category List Body Content Section Start ----->
      <div class="dashboardBody_Box">
        <div class="mainWrapper_Sec">
          <div class="container-fluid">
            <div class="Wrapper_Box">
              <div class="sectionHeadingBox d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">Category List</h2>

                <div class="tab_ButtonBox">
                  <a href="{{ route('category-create') }}" class="editBtn"><i class="fa-solid fa-plus me-1"></i>
                    Add Category</a>
                </div>
              </div>

              <div class="tableWrapper">
                <table id="example" class="table display nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Men's Wear</td>
                      <td>Active</td>
                      <td>
                        <a href="{{url('/admin/category/edit')}}/{{1}}" class="editBTN" title="Edit">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Women's Wear</td>
                      <td>Active</td>
                      <td>
                        <a href="{{url('/admin/category/edit')}}/{{2}}" class="editBTN" title="Edit">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>  
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Kid's Wear</td>
                      <td>Active</td>
                      <td>
                        <a href="{{url('/admin/category/edit')}}/{{3}}" class="editBTN" title="Edit">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a> 
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!----- User List Content Section End ----->

@endsection