@component('front._layouts.app', [
    'meta' => $meta ?? []
])
    <main class="p-8" role="main">
        {{ $slot }}
    </main>
@endcomponent
