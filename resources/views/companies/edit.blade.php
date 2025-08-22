@extends('layouts.app')

@section('content')
    <h2>Edit Company</h2>
    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('companies.form')
    </form>
@endsection
