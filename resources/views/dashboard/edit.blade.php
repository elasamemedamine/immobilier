@extends('dashboard.layout')
@section('content')
<div class="container">
<div class="row">
    <div class="my-5 px-5 justify-content-center">
        <div class="card card-body bg-light">
        <div class="h3">Edit Immobilier</div>
        <form action="{{ route('dashboard.update', $property->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $property->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $property->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="surface" class="form-label">Surface</label>
                <input type="number" class="form-control" id="surface" name="surface" value="{{ $property->surface }}" required>
            </div>
            <div class="mb-3">
                <label for="room_count" class="form-label">Number of Rooms</label>
                <input type="number" class="form-control" id="room_count" name="room_count" value="{{ $property->room_count }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $property->price }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $property->address }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $property->phone_number }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-primary text-decoration-none text-white" href="{{ route('dashboard.index') }}">Back</a>

        </form>
    </div>
</div>
</div>

</div>
@endsection
