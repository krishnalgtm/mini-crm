@csrf
<div class="mb-3">
    <label class="form-label">Name *</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $company->name ?? '') }}" required>
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $company->email ?? '') }}">
    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Logo</label>
    <input type="file" name="logo" class="form-control">
    @if(isset($company) && $company->logo)
        <img src="{{ asset('storage/' . $company->logo) }}" width="80" class="mt-2">
    @endif
    @error('logo') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Website</label>
    <input type="url" name="website" class="form-control" value="{{ old('website', $company->website ?? '') }}">
    @error('website') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<button type="submit" class="btn btn-success">Save</button>
<a href="{{ route('companies.index') }}" class="btn btn-secondary">Back</a>
