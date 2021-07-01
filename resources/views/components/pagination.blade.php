@props([
    'links' => null,
    'justify' => 'end',
])

@php
    $attributes = $attributes->class([
        'd-flex mb-n3',
        'justify-content-' . $justify => $justify,
    ])->merge([
        //
    ]);
@endphp

<div {{ $attributes }}>
    @if(isset($this) && method_exists($this, 'initializeWithPagination'))
        <div class="d-block d-lg-none">
            {{ $links->links('livewire::simple-bootstrap') }}
        </div>

        <div class="d-none d-lg-block">
            {{ $links->links('livewire::bootstrap') }}
        </div>
    @else
        <div class="d-block d-lg-none">
            {{ $links->links('pagination::simple-bootstrap-4') }}
        </div>

        <div class="d-none d-lg-block">
            {{ $links->links('pagination::bootstrap-4') }}
        </div>
    @endif
</div>
