@component('mail::message')
# Hello {{ $user->name }}, <br><br>

Welcome to AdiInviter! Following are your registration details :

- Your email address is : {{ $user->email }}.

- Created on : {{ $user->created_at->format('l\\, jS \\of F Y \\| h:i:s A') }}

- Account created diffForHumans() : {{ $user->created_at->diffForHumans() }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel')
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
