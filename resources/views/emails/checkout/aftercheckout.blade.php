@component('mail::message')
# Register Camp: {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Camp->title}}</b>, please see payment instructoin by click the button bellow.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent
<br>
@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
