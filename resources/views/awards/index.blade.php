@extends('layouts.app')

@section('title', 'Awards')

@section('content')
<div class="awards-page py-8">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-text-primary mb-2">Our Awards</h2>
        <p class="text-lg text-text-secondary">Recognizing excellence and achievement</p>
    </div>

    @if($awards->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            @foreach($awards as $award)
                <div class="bg-bg-primary rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-xl flex flex-col">
                    <div class="relative bg-gradient-to-r from-primary to-secondary p-8 text-center min-h-[200px] flex flex-col items-center justify-center">
                        @if($award->image)
                            <img src="{{ $award->image }}" alt="{{ $award->title }}" class="w-full h-[200px] object-cover rounded-lg">
                        @else
                            <div class="text-6xl mb-4">🏆</div>
                        @endif
                        <span class="bg-white bg-opacity-20 text-white px-4 py-2 rounded-md text-sm font-semibold uppercase tracking-wide">{{ $award->category }}</span>
                    </div>
                    <div class="p-6 flex-1">
                        <h3 class="text-2xl font-semibold text-text-primary mb-4">{{ $award->title }}</h3>
                        <p class="text-text-secondary mb-6 leading-relaxed">{{ Str::limit($award->description, 150) }}</p>
                        <div class="flex flex-col gap-3 pt-4 border-t border-border-color">
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-text-secondary text-sm">Recipient:</span>
                                <span class="font-semibold text-text-primary">{{ $award->recipient }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-text-secondary text-sm">Date:</span>
                                <span class="font-semibold text-text-primary">{{ $award->date->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-bg-tertiary flex gap-2 flex-wrap">
                        <a href="{{ route('awards.show', $award) }}" class="px-5 py-2.5 rounded-md font-medium text-white bg-primary hover:bg-primary-dark transition-all duration-300 text-sm no-underline inline-block">View Details</a>
                        <a href="{{ route('awards.edit', $award) }}" class="px-5 py-2.5 rounded-md font-medium text-white bg-warning hover:bg-orange-600 transition-all duration-300 text-sm no-underline inline-block">Edit</a>
                        <form action="{{ route('awards.destroy', $award) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-5 py-2.5 rounded-md font-medium text-white bg-danger hover:bg-red-600 transition-all duration-300 text-sm border-none cursor-pointer font-inherit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-16 px-8 bg-bg-primary rounded-xl shadow-md">
            <div class="text-6xl mb-6">🏆</div>
            <h3 class="text-3xl font-semibold text-text-primary mb-2">No Awards Yet</h3>
            <p class="text-text-secondary mb-8">Get started by adding your first award!</p>
            <a href="{{ route('awards.create') }}" class="px-5 py-2.5 rounded-md font-medium text-white bg-primary hover:bg-primary-dark transition-all duration-300 text-sm no-underline inline-block">Add First Award</a>
        </div>
    @endif
</div>
@endsection

