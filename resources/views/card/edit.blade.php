{{ html()->modelForm($card, 'PATCH', route('cards.update', $card))->open() }}
{{  html()->label('Название', 'title') }}
    {{  html()->input('text', 'title') }}
    {{  html()->label('Контент', 'content') }}
    {{  html()->input('text', 'content') }}
    {{  html()->label('Владелец', 'owner_id') }}
    {{  html()->input('text', 'owner_id') }}
    {{  html()->label('Статус', 'status') }}
    {{  html()->textarea('status') }}
    {{  html()->label('Срок', 'deadline') }}
    {{  html()->textarea('deadline') }}
    {{ html()->submit('Обновить') }}
{{ html()->closeModelForm() }}
