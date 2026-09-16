@props(['status'])

@if ($status == 'Aktif')
    <span class="inline-flex items-center gap-1.5 rounded-full bg-green-100 px-2.5 py-1 text-xs font-medium text-green-700">
        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
        {{ $status }}
    </span>
@else
    <span class="inline-flex items-center gap-1.5 rounded-full bg-red-100 px-2.5 py-1 text-xs font-medium text-red-700">
        <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
        {{ $status }}
    </span>
@endif