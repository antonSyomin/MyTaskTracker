{{  html()->label('Название', 'title') }}
{{  html()->input('text', 'title') }}
{{  html()->label('Контент', 'content') }}
{{  html()->input('text', 'content') }}
{{  html()->label('Владелец', 'owner_id') }}
{{  html()->input('text', 'owner_id') }}
{{  html()->label('Статус', 'status') }}
{{  html()->select('status', ['started' => 'started', 'approving' => 'approving']) }}
{{  html()->label('Срок', 'deadline') }}
{{  html()->textarea('deadline') }}
