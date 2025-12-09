<div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 border-b border-gray/10 pb-4">
    <div class="sm:col-span-4">
        <x-input-label for="title" value="Title" />
        <x-text-input
            class="mt-2"
            id="title"
            type="text"
            name="title"
            placeholder="Shift Leader"
            value="{{ old('title', $job->title ?? '') }}"
            required />
        @error('title')
        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="sm:col-span-4">
        <x-input-label for="salary" value="Salary" />
        <x-text-input
            class="mt-2"
            id="salary"
            type="text"
            name="salary"
            placeholder="$ 50,000 Per Year"
            value="{{ old('salary', $job->salary ?? '') }}"
            required />
        @error('salary')
        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>
