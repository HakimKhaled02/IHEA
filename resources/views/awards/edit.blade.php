@extends('layouts.app')

@section('title', 'Edit Award')

@section('content')
<div class="form-page">
    <div class="form-header">
        <h2>Edit Award</h2>
        <a href="{{ route('awards.index') }}" class="back-link">← Back to Awards</a>
    </div>

    <div class="form-card">
        <form action="{{ route('awards.update', $award) }}" method="POST" class="award-form">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title">Award Title *</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $award->title) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description *</label>
                <textarea id="description" name="description" class="form-control" rows="5" required>{{ old('description', $award->description) }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="category">Category *</label>
                    <input type="text" id="category" name="category" class="form-control" value="{{ old('category', $award->category) }}" required>
                </div>

                <div class="form-group">
                    <label for="recipient">Recipient *</label>
                    <input type="text" id="recipient" name="recipient" class="form-control" value="{{ old('recipient', $award->recipient) }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="date">Date *</label>
                    <input type="date" id="date" name="date" class="form-control" value="{{ old('date', $award->date->format('Y-m-d')) }}" required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control">
                        <option value="active" {{ old('status', $award->status) == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status', $award->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="image">Image URL (Optional)</label>
                <input type="url" id="image" name="image" class="form-control" value="{{ old('image', $award->image) }}" placeholder="https://example.com/image.jpg">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Award</button>
                <a href="{{ route('awards.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

