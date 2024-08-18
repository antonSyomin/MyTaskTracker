<x-card>
    <x-card-body>
        <div class="mb-4">
            <h5>
                <a href="{{ route('user.boards.show', $board->id) }}">{{ $board->title }}</a>
            </h5>
            <p class="text-muted">
                {{ now()->format('d.m.y H:i:s')}}
            </p>
        </div>
    </x-card-body>
</x-card>