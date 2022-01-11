@component('mail::message')
# Acusé de reception

Cher/Chere {{$data['name']}},

Votre Message a bien été reçu, 
nous vous contacterons dans les plus bref délais.

@component('mail::button', ['url' => $url, 'color' => 'success'])
Acceuil
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
