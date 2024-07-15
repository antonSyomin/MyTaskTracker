<h1>Создать новую карточку</h1>
{{ html()->modelForm($card, 'POST', route('cards.store'))->open() }}
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
    {{ html()->submit('Создать') }}
{{ html()->closeModelForm() }}
