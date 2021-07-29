@extends('layouts.app')

@section('content')

<div class="container">

<h3>Edit Data Photos</h3>
<form action="{{ url('/photos/' . $row->photos_id) }}" method="POST">
    <input name="method" type="hidden" value="PATCH">
    @csrf
    <div class="form-group">
        <label for="">DATE</label>
        <input type="text" name="photos_date" class="form-control" value="{{ $row->photos_date}}">
    </div>

    <div class="form-group">
        <label for="">TITLE</label>
        <input type="text" name="photos_title" class="form-control" value="{{ $row->photos_title}}">
    </div>

    <div class="form-group">
        <label for="">TEXT</label>
        <input type="text" name="photos_text" class="form-control" value="{{ $row->photos_text}}">
    </div>
    
    <div class="form-group">
        <input type="submit" value="UPDATE" class="btn btn-primary">

    </div>
</form>
</div>

@endsection