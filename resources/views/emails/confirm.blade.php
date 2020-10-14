@component('mail::message')
# Hola {{$user->name}}

Has cambiado tu correo electrónico. Porfavor verifica la nueva dirección usando el siguiente botón:

@component('mail::button', ['url' => route('verify', $user->verification_token)])
Confirmar mi cuenta
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent