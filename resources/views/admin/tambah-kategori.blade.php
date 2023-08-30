@extends('layouts.app')

@section('content')
  <style>
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
    }
    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }
  </style>
  <div class="container-fluid bg-white px-4">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
    @endif
    @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ups!</strong> Sepertinya ada yang salah.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <form method="POST" action="{{ route('kategori.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label mt-4">Nama Kategori</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div>
          <button type="submit" class="btn btn-primary mt-4 mb-4">Submit</button>
        </div>
    </form>
  </div>
@endsection 