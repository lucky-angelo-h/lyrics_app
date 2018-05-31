@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Songs</li>
        </ol>
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-music"></i> Songs list</div>
        <div class="card-body">
            <div class="btn-group mb-4">
                <a href="{{ route('add_song') }}" class="btn btn-primary">Add Song</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($songs as $song)
                        <tr>
                            <td>{{ $song->title }}</td>
                            <td>{{ $song->artist }}</td>
                            <td>{{ $song->created_at }}</td>
                            <td>
                                <a href="{{ route('edit_song', ['id' => $song->id]) }}" class="btn btn-success">Edit</a>
                                <a href="# "data-toggle="modal" data-target="#delete{{$song->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="delete{{$song->id}}" tabindex="-1" role="dialog" aria-labelledby="delete{{$song->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Are you sure you want to delete {{ $song->title }}.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="{{ route('delete_song', ['id' => $song->id]) }}">Delete</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/sb-admin.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/sb-admin-datatables.js') }}"></script>
@endsection