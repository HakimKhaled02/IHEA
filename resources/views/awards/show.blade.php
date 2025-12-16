@extends('layouts.app')

@section('title', $award->title)

@section('content')
<div class="award-detail-page py-8">
    <a href="{{ route('awards.index') }}" class="inline-block text-primary font-medium mb-8 transition-all duration-300 hover:text-primary-dark hover:-translate-x-1">← Back to Awards</a>
    
    <div class="bg-bg-primary rounded-xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-primary to-secondary p-12 text-center">
            @if($award->image)
                <img src="{{ $award->image }}" alt="{{ $award->title }}" class="w-full max-w-md h-[300px] object-cover rounded-lg mb-6 shadow-xl mx-auto">
            @else
                <div class="text-6xl mb-6">🏆</div>
            @endif
            <div class="award-detail-info">
                <span class="inline-block bg-white bg-opacity-20 px-6 py-2 rounded-md text-sm font-semibold uppercase tracking-wide mb-4">{{ $award->category }}</span>
                <h1 class="text-4xl font-bold m-0">{{ $award->title }}</h1>
            </div>
        </div>
        
        <div class="p-12">
            <div class="mb-8">
                <h3 class="text-2xl font-semibold text-text-primary mb-4">Description</h3>
                <p class="text-text-secondary leading-relaxed text-lg">{{ $award->description }}</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 pt-8 border-t-2 border-border-color">
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-medium text-text-secondary uppercase tracking-wide">Recipient</span>
                    <span class="text-xl font-semibold text-text-primary">{{ $award->recipient }}</span>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-medium text-text-secondary uppercase tracking-wide">Date</span>
                    <span class="text-xl font-semibold text-text-primary">{{ $award->date->format('F d, Y') }}</span>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-medium text-text-secondary uppercase tracking-wide">Status</span>
                    <span class="inline-block px-3 py-1.5 rounded-md text-sm font-semibold uppercase {{ $award->status == 'active' ? 'bg-green-50 text-green-800' : 'bg-red-50 text-red-800' }}">{{ ucfirst($award->status) }}</span>
                </div>
            </div>
        </div>
        
        <div class="p-8 bg-bg-tertiary flex gap-4 flex-wrap">
            <a href="{{ route('awards.edit', $award) }}" class="px-5 py-2.5 rounded-md font-medium text-white bg-primary hover:bg-primary-dark transition-all duration-300 text-sm no-underline inline-block">Edit Award</a>
            <form action="{{ route('awards.destroy', $award) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-5 py-2.5 rounded-md font-medium text-white bg-danger hover:bg-red-600 transition-all duration-300 text-sm border-none cursor-pointer font-inherit" onclick="return confirm('Are you sure you want to delete this award?')">Delete Award</button>
            </form>
        </div>
    </div>
</div>
@endsection

