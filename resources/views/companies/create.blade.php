@extends('layouts.admin')

@section('title','Add Company')

@section('content')
<div class="card">
    <div class="card-header">Create Company</div>
    <div class="card-body">
        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Website</label>
                <input type="text" name="website" class="form-control">
            </div>
            <div class="form-group">
                <label>Logo</label>
                <input type="file" name="logo" class="form-control">
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection
