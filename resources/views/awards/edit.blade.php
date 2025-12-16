@extends('layouts.app')

@section('title', 'Edit Award')

@section('content')
<div class="form-page py-8 max-w-4xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold text-text-primary">Edit Award</h2>
        <a href="{{ route('awards.index') }}" class="inline-block text-primary font-medium transition-all duration-300 hover:text-primary-dark hover:-translate-x-1">← Back to Awards</a>
    </div>

    <div class="bg-bg-primary rounded-xl shadow-lg p-10">
        <form action="{{ route('awards.update', $award) }}" method="POST" class="flex flex-col gap-6">
            @csrf
            @method('PUT')
            
            <div class="flex flex-col gap-2">
                <label for="title" class="font-medium text-text-primary text-sm uppercase tracking-wide">Award Title *</label>
                <input type="text" id="title" name="title" class="px-4 py-3 border-2 border-border-color rounded-md text-base font-inherit transition-all duration-300 bg-bg-primary text-text-primary focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary focus:ring-opacity-10 placeholder-text-secondary" value="{{ old('title', $award->title) }}" required>
            </div>

            <div class="flex flex-col gap-2">
                <label for="description" class="font-medium text-text-primary text-sm uppercase tracking-wide">Description *</label>
                <textarea id="description" name="description" class="px-4 py-3 border-2 border-border-color rounded-md text-base font-inherit transition-all duration-300 bg-bg-primary text-text-primary focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary focus:ring-opacity-10 placeholder-text-secondary resize-vertical min-h-[120px]" rows="5" required>{{ old('description', $award->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-2">
                    <label for="category" class="font-medium text-text-primary text-sm uppercase tracking-wide">Category *</label>
                    <input type="text" id="category" name="category" class="px-4 py-3 border-2 border-border-color rounded-md text-base font-inherit transition-all duration-300 bg-bg-primary text-text-primary focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary focus:ring-opacity-10 placeholder-text-secondary" value="{{ old('category', $award->category) }}" required>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="recipient" class="font-medium text-text-primary text-sm uppercase tracking-wide">Recipient *</label>
                    <input type="text" id="recipient" name="recipient" class="px-4 py-3 border-2 border-border-color rounded-md text-base font-inherit transition-all duration-300 bg-bg-primary text-text-primary focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary focus:ring-opacity-10 placeholder-text-secondary" value="{{ old('recipient', $award->recipient) }}" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col gap-2">
                    <label for="date" class="font-medium text-text-primary text-sm uppercase tracking-wide">Date *</label>
                    <input type="date" id="date" name="date" class="px-4 py-3 border-2 border-border-color rounded-md text-base font-inherit transition-all duration-300 bg-bg-primary text-text-primary focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary focus:ring-opacity-10 placeholder-text-secondary" value="{{ old('date', $award->date->format('Y-m-d')) }}" required>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="status" class="font-medium text-text-primary text-sm uppercase tracking-wide">Status</label>
                    <select id="status" name="status" class="px-4 py-3 border-2 border-border-color rounded-md text-base font-inherit transition-all duration-300 bg-bg-primary text-text-primary focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary focus:ring-opacity-10">
                        <option value="active" {{ old('status', $award->status) == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ old('status', $award->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label for="image" class="font-medium text-text-primary text-sm uppercase tracking-wide">Image URL (Optional)</label>
                <input type="url" id="image" name="image" class="px-4 py-3 border-2 border-border-color rounded-md text-base font-inherit transition-all duration-300 bg-bg-primary text-text-primary focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary focus:ring-opacity-10 placeholder-text-secondary" value="{{ old('image', $award->image) }}" placeholder="https://example.com/image.jpg">
            </div>

            <div class="flex gap-4 mt-4 pt-6 border-t border-border-color">
                <button type="submit" class="px-5 py-2.5 rounded-md font-medium text-white bg-primary hover:bg-primary-dark transition-all duration-300 text-sm border-none cursor-pointer font-inherit">Update Award</button>
                <a href="{{ route('awards.index') }}" class="px-5 py-2.5 rounded-md font-medium text-white bg-text-secondary hover:bg-gray-600 transition-all duration-300 text-sm no-underline inline-block">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

