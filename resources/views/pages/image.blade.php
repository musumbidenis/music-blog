@extends('layouts.master')

@section('content')
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="/image">Image</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="/logout">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">attach_file</i>
                    </div>
                      <h4 class="card-title">Upload Images</h4>
                  </div>
      <div class="card-body ">
        <form method="post" action="{{url('/image/upload')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
              <div class="fileinput-new thumbnail">
               <img src="../../assets/img/image_placeholder.jpg" alt="...">
              </div>
            <div class="fileinput-preview fileinput-exists thumbnail"></div>
              <div>
                <span class="btn btn-round btn-rose btn-file">
                <span class="fileinput-new">Upload Images</span>
                <span class="fileinput-exists">Change Image</span>
                <input type="file" name="photos[]" multiple required>
                </span>
                <br />
                <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
              </div>
            </div>                            
          </div>
          <div class="">
            <button type="submit" class="btn btn-fill btn-rose">Save</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
 </div>
 </div>
</div>    
</div>
 @endsection
