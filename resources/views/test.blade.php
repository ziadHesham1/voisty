@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center mt-2">

        <div class="col-md-8">
            <div id="card-custom" class="card">
                <div class="card-header title">
                  Filters
                </div>
                <div class="card-body">
                  <div class="row d-flex">
                    <div class="col-md-3" >
                        <div class="dropdown">
                            <button class="btn btn-grey dropdown-toggle title-2 text-white" type="button" id="subjects-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Subject
                            </button>
                            <div class="dropdown-menu para" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Sunject 1</a>
                              <a class="dropdown-item" href="#">Subject 2</a>
                              <a class="dropdown-item" href="#">Subject 3 </a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dropdown">
                            <button class="btn btn-grey dropdown-toggle title-2 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Post Type
                            </button>
                            <div class="dropdown-menu para" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Type 1</a>
                              <a class="dropdown-item" href="#">Type 2</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="dropdown">
                            <button class="btn btn-grey dropdown-toggle title-2 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Instructer
                            </button>
                            <div class="dropdown-menu para " aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item " href="#">Name 1</a>
                              <a class="dropdown-item" href="#">Name 2</a>
                              <a class="dropdown-item" href="#">Name 3</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 ">
                      <button type="button" id="started-button" class="btn btn-info title-2 text-white">Apply Filters </button>
                    </div>
                  </div>




                </div>
              </div>


      </div>
    </div>
    <div class="row justify-content-center mt-2 d-flex ">

@foreach($retrievedpath as $data)
                <div class="file-element w-100 row para">
                <div class="col-md-11">

                    <div class="row big-headlines  m-0 p-1 ">
                        <div class="col-md-5 p-0"><p><strong>Subject:</strong> {{$data->name}}  </p></div>
                        <div class="col-md-3 p-0 "><p><strong>Week:</strong> 'week}}'  </p></div>
                        <div class="col-md-4 p-0 "><p><strong>Instructer:</strong> 'inst}}' </p></div>
                    </div>

                    <div class="row small-headlines m-0 p-1">
                        <div class="col-md-4"><p><strong>Type:</strong> "type"  </p></div>
                        <div class="col-md-4"><p><strong>uploader:</strong> 'upname}}'  </p></div>
                        <div class="col-md-4"><p><strong>Upload time:</strong> 'uptime}}'  </p></div>
                    </div>
                </div>
                 <div class="col-md-1 p-0">
                    <div class="">
                        <a class="btn btn-primary" href="{{route('downloadRoute',$data->id)}}" download="{{route('downloadRoute',$data->id)}}"><span class="fas fa-download fa-3x mt-4"></span></a>
                    </div>

                </div>
</div>
@endforeach

@endsection


