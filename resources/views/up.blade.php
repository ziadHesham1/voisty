@extends('layouts.app')
@section('content')
<div class="overlay">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="card" id="vert-manual">
                <div class="card-header">{{ __('Upload')}}</div>
                <div class="card-body">

                    <form action="up" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="major" class="col-md-2">{{ _('Major')}}</label>
                            <div class="col-md-4">
                                <select class="custom-select" name="major-select" id="major-select">
                                    <option selected disabled>Choose Major</option>
                                    <option value="major1">Major 1</option>
                                    <option value="major2">Major 2</option>
                                    <option value="major3">Major 3</option>
                                </select>
                            </div>

                            <label for="academic-year" class="col-md-2">{{ __('Academic year')}}</label>
                            <div class="col-md-4">
                                <select class="custom-select" name="year-select" id="year-select">
                                    <option selected disabled>Choose Year</option>
                                    <option value="year1"> 1</option>
                                    <option value="year2">Year 2</option>
                                    <option value="year3">Year 3</option>
                                </select>

                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-md-2">{{ __('Subject')}}</label>
                            <div class="col-md-4">
                                <select class="custom-select" name="subj-select" id="subj-select">
                                    <option selected disabled>Choose Subject</option>
                                    <option value="subj1">Subject 1</option>
                                    <option value="subj2">Subject 2</option>
                                    <option value="subj3">Subject 3</option>
                                </select>
                            </div>
                            <label for="type" class="col-md-2">{{ __('Type')}}</label>
                            <div class="col-md-4">
                                <select class="custom-select" name="type-select" id="type-select">
                                    <option selected disabled>Choose Type</option>
                                    <option value="type1">Lecture</option>
                                    <option value="type2">Tutorial</option>
                                    <option value="type3">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Week" class="col-md-2">{{ __('Week')}}</label>
                            <div class="col-md-4">
                                <select class="custom-select" name="week-select" id="week-select">
                                    <option selected disabled>Choose Week</option>
                                    <option value="week1">week 1</option>
                                    <option value="week2">week 2</option>
                                    <option value="week3">week 3</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="uploadedfile" id="custom-file-input" multiple>
                                      <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 offset-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        This data is gucci fam
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary" >Upload</button>
                                <a class="download-img" href="{{route('filesRoute')}}" class="btn btn-success"></a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
</div>
@endsection
