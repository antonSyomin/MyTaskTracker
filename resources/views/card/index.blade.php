<h1>Cards list</h1>
@foreach ($cards as $card)
    <h2>{{$card->title}}</h2>
    <p>{{$card->content}}</p>
@endforeach

