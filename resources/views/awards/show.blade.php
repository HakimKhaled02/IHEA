@extends('layouts.app')

@section('title', $award->title)

@section('content')
<div class="award-detail-page">
    <a href="{{ route('awards.index') }}" class="back-link">← Back to Awards</a>
    
    <div class="award-detail-card">
        <div class="award-detail-header">
            @if($award->image)
                <img src="{{ $award->image }}" alt="{{ $award->title }}" class="award-detail-image">
            @else
                <div class="award-detail-icon">🏆</div>
            @endif
            <div class="award-detail-info">
                <span class="award-detail-category">{{ $award->category }}</span>
                <h1 class="award-detail-title">{{ $award->title }}</h1>
            </div>
        </div>
        
        <div class="award-detail-body">
            <div class="award-detail-section">
                <h3>Description</h3>
                <p>{{ $award->description }}</p>
            </div>
            
            <div class="award-detail-meta">
                <div class="meta-item">
                    <span class="meta-label">Recipient</span>
                    <span class="meta-value">{{ $award->recipient }}</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label">Date</span>
                    <span class="meta-value">{{ $award->date->format('F d, Y') }}</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label">Status</span>
                    <span class="meta-value status-badge status-{{ $award->status }}">{{ ucfirst($award->status) }}</span>
                </div>
            </div>
        </div>
        
        <div class="award-detail-actions">
            <a href="{{ route('awards.edit', $award) }}" class="btn btn-primary">Edit Award</a>
            <form action="{{ route('awards.destroy', $award) }}" method="POST" class="inline-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this award?')">Delete Award</button>
            </form>
        </div>
    </div>
</div>
@endsection

