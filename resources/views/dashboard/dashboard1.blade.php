@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row task_detail_screen">
           <h2>Task Detail</h2>
           <div class="col-md-5">
              <div class="white-box ui_ux_box">
                 <h4>UI/UX Designs</h4>
                 <p class="sub_heading">Lorem ipsum dolor sit amet</p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                 <h6>Progress</h6>
                 <div class="progress">
                    <div class="progress-bar progress-bar-danger" style="width: 60%;" role="progressbar">
                       <span class="sr-only">60% Complete</span>
                    </div>
                 </div>
              </div>
              <div class="white-box periority_box">
                 <table class="table">
                    <tbody>
                       <tr>
                          <th>Created</th>
                          <td>10 july, 2021</td>
                       </tr>
                       <tr>
                          <th>Deadline</th>
                          <td>25 Aug, 2021</td>
                       </tr>
                       <tr>
                          <th>Priority</th>
                          <td>Highest</td>
                       </tr>
                       <tr>
                          <th>Status</th>
                          <td>Working</td>
                       </tr>
                       <tr>
                          <th>Tags</th>
                          <td>#vp, #Q3</td>
                       </tr>
                    </tbody>
                 </table>
              </div>
              <div class="white-box Deliverables">
                 <h4>Deliverables</h4>
                 <table class="table">
                    <tbody>
                       <tr>
                          <td>
                             <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                          </td>
                          <td>
                             <h5>Jack Connor</h5>
                             <p>Yesterday</p>
                          </td>
                          <td>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                          </td>
                          <td>
                             <a href="#!">
                                <img src="">
                                <p>File name.pdf</p>
                             </a>
                          </td>
                       </tr>
                       <tr>
                          <td>
                             <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                          </td>
                          <td>
                             <h5>Jack Connor</h5>
                             <p>Yesterday</p>
                          </td>
                          <td>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                          </td>
                          <td>
                             <a href="#!">
                                <img src="">
                                <p>File name.pdf</p>
                             </a>
                          </td>
                       </tr>
                    </tbody>
                 </table>
              </div>
              <div class="white-box Assigned_Team">
                 <h4>Assigned Team</h4>
                 <div class="profile">
                    <div class="image">
                       <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                    </div>
                    <div class="desc">
                       <h5>Jack Connor</h5>
                       <a href="">info@jackconnor@gmail.com</a>
                       <p>project Lead</p>
                    </div>
                 </div>
                 <hr>
                 <div class="profiles row">
                    <div class="profile col-md-4">
                       <div class="image">
                          <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                       </div>
                       <div class="desc">
                          <h5>Jack Connor</h5>
                          <p>project Lead</p>
                       </div>
                    </div>
                    <div class="profile col-md-4">
                       <div class="image">
                          <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                       </div>
                       <div class="desc">
                          <h5>Jack Connor</h5>
                          <p>project Lead</p>
                       </div>
                    </div>
                    <div class="profile col-md-4">
                       <div class="image">
                          <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                       </div>
                       <div class="desc">
                          <h5>Jack Connor</h5>
                          <p>project Lead</p>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-md-7">
              <div class="white-box activity_box">
                 <div class="row">
                    <div class="col-md-6">
                       <h4>Activity  and status 1</h4>
                    </div>
                    <div class="col-md-6 search_form_col">
                       <form>
                          <div class="search_form">
                             <input type="text" placeholder="Search" name="">
                             <i class="fa fa-search" aria-hidden="true"></i>
                          </div>
                       </form>
                    </div>
                 </div>
                 <form>
                    <div class="form-group">
                       <input type="text" class="form-control" id="" placeholder="Activity Name">
                    </div>
                    <div class="radio-list status_btns">
                       <div class="radio_buttons">
                            <input type="radio" name="optionsRadios2" value="Preparation">
                            <label>Preparation </label>
                        </div>
                        <div class="radio_buttons">
                            <input type="radio" name="optionsRadios2" value="Preparation">
                            <label>Processing </label>
                        </div>
                        <div class="radio_buttons">
                            <input type="radio" name="optionsRadios2" value="Preparation">
                            <label>Check Point </label>
                        </div>
                        <div class="radio_buttons">
                            <input type="radio" name="optionsRadios2" value="Preparation">
                            <label>Delivering </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input class="form-check-input" type="checkbox" id="" value="">
                       <label class="form-check-label" for="">Data Collection</label>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input class="form-check-input" type="checkbox" id="" value="">
                       <label class="form-check-label" for="">Modeling</label>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input class="form-check-input" type="checkbox" id="" value="">
                       <label class="form-check-label" for="">Investigation</label>
                    </div>
                    <div class="form-group">
                       <textarea class="form-control" id="" rows="4" placeholder="Note"></textarea>
                    </div>
                    <div class="file_uploader form-inline">
                       <div class="custom-file_attachment">
                          <input type="file" class="custom-file-input" id="">
                          <i class="icon-paper-clip"></i>
                       </div>
                       <div class="custom-file_image">
                          <input type="file" class="custom-file-input" id="">
                          <i class="icon-camera"></i>
                       </div>
                       <button type="submit" class="btn ">Update</button>
                    </div>
                 </form>
              </div>

              <div class="white-box activity_box">
                 <div class="row">
                    <div class="col-md-6">
                       <h4>Activity  and status 1</h4>
                    </div>
                    <div class="col-md-6 search_form_col">
                       <form>
                          <div class="search_form">
                             <input type="text" placeholder="Search" name="">
                             <i class="fa fa-search" aria-hidden="true"></i>
                          </div>
                       </form>
                    </div>
                 </div>
                 <form>
                    <div class="form-group">
                       <input type="text" class="form-control" id="" placeholder="Activity Name">
                    </div>
                    <div class="radio-list status_btns">
                       <div class="radio_buttons">
                            <input type="radio" name="optionsRadios2" value="Preparation">
                            <label>Preparation </label>
                        </div>
                        <div class="radio_buttons">
                            <input type="radio" name="optionsRadios2" value="Preparation">
                            <label>Processing </label>
                        </div>
                        <div class="radio_buttons">
                            <input type="radio" name="optionsRadios2" value="Preparation">
                            <label>Check Point </label>
                        </div>
                        <div class="radio_buttons">
                            <input type="radio" name="optionsRadios2" value="Preparation">
                            <label>Delivering </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input class="form-check-input" type="checkbox" id="" value="">
                       <label class="form-check-label" for="">Data Collection</label>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input class="form-check-input" type="checkbox" id="" value="">
                       <label class="form-check-label" for="">Modeling</label>
                    </div>
                    <div class="form-check form-check-inline custom_checkbox">
                       <input class="form-check-input" type="checkbox" id="" value="">
                       <label class="form-check-label" for="">Investigation</label>
                    </div>
                    <div class="form-group">
                       <textarea class="form-control" id="" rows="4" placeholder="Note"></textarea>
                    </div>
                    <div class="file_uploader form-inline">
                       <div class="custom-file_attachment">
                          <input type="file" class="custom-file-input" id="">
                          <i class="icon-paper-clip"></i>
                       </div>
                       <div class="custom-file_image">
                          <input type="file" class="custom-file-input" id="">
                          <i class="icon-camera"></i>
                       </div>
                       <button type="submit" class="btn ">Update</button>
                    </div>
                 </form>
              </div>

           </div>
        </div>




    </div>
@endsection

