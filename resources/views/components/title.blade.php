<div class="border-bottom mb-3 pb-3">
    @isset($link)
        <div class="mb-2">
            {{ $link }}
        </div>
    @endisset

    <div class="d-flex justify-content-between">
        <h1 class="h2 m-0">
            {{ $slot }}
        </h1>
        @isset($right)
            <div>
                {{ $right }}
            </div>
        @endisset
    </div>
</div>