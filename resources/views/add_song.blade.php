@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item">Songs</li>
            <li class="breadcrumb-item active">Add Song</li>
        </ol>
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-music"></i> Add Song</div>
        <div class="card-body">
            @if($status == 'success')
            <div class="alert alert-success">{{ $msg }}</div>
            @endif
            <form method="POST" action="{{ route('save_song') }}">
                @csrf

                <div class="form-group">
                    <div class="form-row">

                        <div class="col-md-12">
                            <label for="title">{{ __('Title') }}</label>
                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="artist">{{ __('Artist') }}</label>
                            <input id="artist" type="text" class="form-control{{ $errors->has('artist') ? ' is-invalid' : '' }}" name="artist" value="{{ old('artist') }}" required>

                            @if ($errors->has('artist'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('artist') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="lyrics">{{ __('Lyrics') }}</label>
                            <textarea class="form-control" id="lyrics" type="text" class="form-control{{ $errors->has('artist') ? ' is-invalid' : '' }}" name="lyrics" value="{{ old('lyrics') }}" required></textarea>

                            @if ($errors->has('lyrics'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('lyrics') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Submit') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection