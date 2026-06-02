<x-mail::message>
# Ny förfrågan från {{ $submission['name'] }}

Du har fått ett nytt meddelande via kontaktformuläret.

<x-mail::table>
| Fält | Värde |
|:-----|:------|
| Namn | {{ $submission['name'] }} |
| E-post | {{ $submission['email'] }} |
| Företag | {{ $submission['company'] ?? '–' }} |
| Budget | {{ $submission['budget'] ?? '–' }} |
</x-mail::table>

**Meddelande:**

{{ $submission['message'] }}

<x-mail::button :url="'mailto:'.$submission['email']">
Svara {{ $submission['name'] }}
</x-mail::button>

{{ config('app.name') }}
</x-mail::message>
