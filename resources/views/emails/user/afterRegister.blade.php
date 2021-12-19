@component('mail::message')
# Welcome!

Hi {{$user->name}}
<br>
Selamat datang di Laracamp, akun anda telah berhasil di buat!

@component('mail::button', ['url' => route('login')])
Login disini
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
