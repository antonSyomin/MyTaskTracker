<h1>Cards list</h1>
<a href="{{ route('cards.create')}}">Создать новую карточку</a>
@foreach ($cards as $card)
    <h2>{{ $card->title }}</h2>
    <p>{{ $card->content }}</p>
    <p><a href="{{ route('cards.edit', [$card->id])}}">Редактировать</a></p>
    {{ html()->modelForm($card, 'DELETE', route('cards.delete', $card->id))->open() }}
    {{ html()->submit('Удалить') }}
    {{ html()->closeModelForm() }}
    <br>
@endforeach

