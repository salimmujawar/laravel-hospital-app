<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->      
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">          
          <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" data-dismiss="alert" class="close">X</button>
              {{session()->get('message')}}
            </div>
            @endif
            <form class="form-container" action="{{url('post_doctor')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Doctor Name</label>
                <input id="name" autofocus autocomplete="off" class="form-element" name="name"  required minlength="3" maxlength="32" type="text"/>
              </div>
              <div class="form-group">
                <label for="phone">Doctor Phone</label>
                <input id="phone" autocomplete="off" name="phone"  class="form-element" type="number" required/>
              </div>
              <div class="form-group">
                <label for="speciality">Doctor Speciality</label>
                <select id="speciality" name="speciality" class="form-element" required>
                  <option>Select...</option>
                  <option value="eyes">Eyes</option>
                  <option value="skin">Skin</option>
                  <option value="ortho">Ortho</option>
                </select>
              </div>
              <div class="form-group">
                <label for="room">Doctor Room</label>
                <input id="room" autocomplete="off" name="room" class="form-element" type="text" required/>
              </div>
              <div class="form-group">
                <label for="image">Doctor Image</label>
                <input id="image" autocomplete="off" name="image" class="form-element" type="file" accept="image/*"/>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success" value="Submit"/>
              </div>
            </form>
          </div>
        </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>