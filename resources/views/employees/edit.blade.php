@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group mb-2">
            <label>First Name</label>
            <input type="text" name="first_name" value="{{ $employee->first_name }}" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label>Last Name</label>
            <input type="text" name="last_name" value="{{ $employee->last_name }}" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label>Company</label>
            <select name="company_id" class="form-control" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-2">
            <label>Email</label>
            <input type="email" name="email" value="{{ $employee->email }}" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
