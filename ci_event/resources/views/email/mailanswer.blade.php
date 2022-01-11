@component('mail::message')
# Introduction

Bonjour M/Mme/Mlle {{$data['name']}}

{{$data['message']}}

@component('mail::button', ['url' => $url, 'color' => 'success'])
Côte d'Ivoire Evenement
@endcomponent

Merci de nous avoir contacté,<br>
{{ config('app.name') }}
@endcomponent
