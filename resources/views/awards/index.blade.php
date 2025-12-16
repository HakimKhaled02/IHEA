@extends('layouts.app')

@section('title', 'Awards')

@section('content')
<div class="awards-page">
    <div class="page-header">
        <h2>Our Awards</h2>
        <p class="subtitle">Recognizing excellence and achievement</p>
    </div>

    @if($awards->count() > 0)
        <div class="awards-grid">
            @foreach($awards as $award)
                <div class="award-card">
                    <div class="award-card-header">
                        @if($award->image)
                            <img src="{{ $award->image }}" alt="{{ $award->title }}" class="award-image">
                        @else
                            <div class="award-icon">🏆</div>
                        @endif
                        <span class="award-category">{{ $award->category }}</span>
                    </div>
                    <div class="award-card-body">
                        <h3 class="award-title">{{ $award->title }}</h3>
                        <p class="award-description">{{ Str::limit($award->description, 150) }}</p>
                        <div class="award-meta">
                            <div class="award-recipient">
                                <span class="label">Recipient:</span>
                                <span class="value">{{ $award->recipient }}</span>
                            </div>
                            <div class="award-date">
                                <span class="label">Date:</span>
                                <span class="value">{{ $award->date->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="award-card-footer">
                        <a href="{{ route('awards.show', $award) }}" class="btn btn-view">View Details</a>
                        <a href="{{ route('awards.edit', $award) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('awards.destroy', $award) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-state">
            <div class="empty-icon">🏆</div>
            <h3>No Awards Yet</h3>
            <p>Get started by adding your first award!</p>
            <a href="{{ route('awards.create') }}" class="btn btn-primary">Add First Award</a>
        </div>
    @endif
</div>
@endsection

