<x-mail::message>
# Introduction Mr {{ $user->name }}
Email : {{ $user->email }}

The body of your message.

Votre Reservation et accepter

La Salle 



<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
