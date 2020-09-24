@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" id="vert-manual">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Academic Email') }}</label>
                                {{-- Extra validation on email is required --}}
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="academic-year" class="col-md-4 col-form-label text-md-right">{{ __('Academic year') }}</label>
                                <div class="col-md-4">
                                    <select class="custom-select" name="year-select" id="year-select">
                                        <option selected disabled>Choose Year</option>
                                        <option value="year1">year 1</option>
                                        <option value="year2">year 2</option>
                                        <option value="year3">year 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="major" class="col-md-4 col-form-label text-md-right">{{ __('Major') }}</label>
                                <div class="col-md-4 dropdown">
                                    <select class="custom-select" name="major-select" id="major-select">
                                        <option selected disabled>Choose Major</option>
                                        <option value="major">Major 1</option>
                                        <option value="major">Major 2</option>
                                        <option value="major">Major 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
