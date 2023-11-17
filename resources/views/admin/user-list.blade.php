@extends('admin.layouts.app')

@section('content')
<!-- Content of User List Page -->

      <!----- User List Body Content Section Start ----->
      <div class="dashboardBody_Box">
        <div class="mainWrapper_Sec">
          <div class="container-fluid">
            <div class="Wrapper_Box">
              <div class="sectionHeadingBox d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">User List</h2>

                <div class="tab_ButtonBox">
                  <a href="{{ url('/admin/user-add') }}" class="editBtn"><i class="fa-solid fa-plus me-1"></i>
                    Add User</a>
                </div>
              </div>

              <div class="tableWrapper">
                <table id="example" class="table display nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th>First name</th>
                      <th>Last name</th>
                      <th>Age</th>
                      <th>Phone Number</th>
                      <th>Email Id</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>61</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit" data-bs-toggle="modal"
                          data-bs-target="#exampleModal">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>6</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>7</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>8</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>9</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>10</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>11</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0)" class="deleteBTN" title="Delete">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>12</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>58</td>
                      <td>989-8989-898</td>
                      <td>abc@loremIpsum.com</td>
                      <td>10-23-2023</td>
                      <td>
                        <a href="javascript:void(0)" class="editBTN" title="Edit">
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
      <!----- Modal Popup For Edit Record ----->
       <!-- Modal -->
  <div class="modal fade editUserModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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

            <div class="col-md-8">
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
              <div class="customForm_groupBox">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="5" placeholder="Enter Description"></textarea>
              </div>
            </div>
          </div>


        </div>
      </div>
      <div class="modal-footer">
        <div class="tab_ButtonBox formBTN_Box border-0 p-0">
          <a href="javascript:void(0)" class="viewBtn cancelBTN" data-bs-dismiss="modal">Cancel</a>
          <a href="javascript:void(0)" class="editBtn">Update</a>
        </div>
      </div>
    </div>
  </div>
</div>
      <!----- Modal Popup For Edit Record ----->

@endsection