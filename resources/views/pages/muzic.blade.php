@extends('layouts.master')

@section('content')
<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="/muzic">Music</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
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
                <div class="card ">
                    <div class="card-header card-header-rose card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">attach_file</i>
                        </div>
                            <h4 class="card-title">Upload Music</h4>
                     </div>
                    <div class="card-body ">
                        <form method="post" action="{{url('/music/upload')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                            <div class="form-group">
                                <label class="bmd-label-floating">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Artist</label>
                                <input type="text" name="artist" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Genre</label>
                                <input type="text" name="genre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Released</label>
                                <input type="text" name="released" class="form-control" required>
                            </div> <br>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="../../assets/img/image_placeholder.jpg" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-round btn-rose btn-file">
                                        <span class="fileinput-new">Upload Cover Image</span>
                                        <span class="fileinput-exists">Change Cover Image</span>
                                        <input type="file" name="image" required>
                                        </span>
                                        <br />
                                        <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="../../assets/img/image_placeholder.jpg" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-round btn-rose btn-file">
                                        <span class="fileinput-new">Upload Audio File</span>
                                        <span class="fileinput-exists">Change Audio File</span>
                                        <input type="file" name="audio" required>
                                        </span>
                                        <br />
                                        <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>                            
                            </div>                                                          
                          <div class="card-footer ">
                            <button type="submit" class="btn btn-fill btn-rose">Save</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
       </div>
     </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-rose">
                  <h4 class="card-title ">Uploaded Music</h4>
                  <p class="card-category">Update records accordingly</p>
                </div>
              <div class="card-body">
                <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">

                  <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                      <tr>
                      <th>Title</th>
                      <th>Artist</th>
                      <th>Genre</th>
                      <th>Released</th>
                      <th  class="text-center">Cover Image</th>
                      <th  class="text-center">Audio file</th> 
                      <th  class="text-center">updated_at</th>                      
                      <th  class="disabled-sorting text-center">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>Title</th>
                      <th>Artist</th>
                      <th>Genre</th>
                      <th>Released &nbsp;</th>
                      <th>Cover Image</th>
                      <th>Audio file</th> 
                      <th>updated_at</th>                      
                      <th class="disabled-sorting text-right">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @if (count($songs)> 0)

                    @foreach ($songs as $song)
                    <tr>
                      <td>{{$song->title}}</td>
                      <td>{{$song->artist}}</td>
                      <td>{{$song->genre}}</td>
                      <td>{{$song->released}}</td>
                      <td><img src="images/{{$song->image}}" alt="" style="width:50px;height:50px;"></td>
                      <td><audio preload="auto" controls class="audio" style="width:150px;height:30px;">
                        <source src="songs/{{$song->audio}}">
                        </audio>
                      </td>
                      <td>{{$song->updated_at}}</td>                      
                      <td class="text-right">
                      <form method="post" action="/delete_song/{{$song->id}}" enctype="multipart/form-data" name="deleteForm">
                            {{ csrf_field() }}
                          <input type="submit"  class="btn btn-danger btn-sm" value="DELETE">
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
