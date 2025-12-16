@extends('layouts.app')

@section('title', 'Awards')

@section('content')
<div class="awards-page">
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-header-logo">
                <img src="{{ asset('assets/iheclogo1.png') }}" alt="IHEC Logo" class="header-logo">
            </div>
            <div class="page-header-text">
                <h2>Our Awards</h2>
                <p class="subtitle">Recognizing excellence and achievement</p>
            </div>
        </div>
    </div>

    <div class="flex justify-center mb-10">
        <a href="{{ route('winnerFAQsAwards.index') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-md font-medium text-white bg-primary hover:bg-primary-dark transition-all duration-300 text-sm no-underline shadow-md">
            <span>Winner Recognition, FAQs &amp; Prestige Packages</span>
        </a>
    </div>

    @if($awards->count() > 0)
        <div class="awards-grid">
            @foreach($awards as $award)
                <div class="award-card">
                    <div class="award-card-header">
                        <div class="award-icon">🏆</div>
                        <button class="award-category-badge">{{ $award->category }}</button>
                    </div>
                    <div class="award-card-body">
                        <h3 class="award-title">{{ $award->title }}</h3>
                        <p class="award-description">{{ Str::limit($award->description, 120) }}</p>
                        <div class="award-meta">
                            <div class="award-meta-item">
                                <span class="meta-label">Recipient</span>
                                <span class="meta-value">{{ $award->recipient }}</span>
                            </div>
                            <div class="award-meta-item">
                                <span class="meta-label">Date</span>
                                <span class="meta-value">{{ $award->date->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="award-card-actions">
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

