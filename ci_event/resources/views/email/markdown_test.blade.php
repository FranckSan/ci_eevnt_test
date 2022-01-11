@component('mail::message')
# PRISE DE CONTACT

De {{$data['name']}}

Tel: +225 {{$data['phone']}}

{{$data['message']}}.

@component('mail::button', ['url' => $url, 'color' => 'success'])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
