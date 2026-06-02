<x-mail::message>
# {{ __('marketing.mail_subject', ['name' => $submission['name']]) }}

{{ __('marketing.mail_intro') }}

<x-mail::table>
| {{ __('marketing.mail_field') }} | {{ __('marketing.mail_value') }} |
|:-----|:------|
| {{ __('marketing.mail_field_name') }} | {{ $submission['name'] }} |
| {{ __('marketing.mail_field_email') }} | {{ $submission['email'] }} |
| {{ __('marketing.mail_company') }} | {{ $submission['company'] ?? '–' }} |
| {{ __('marketing.mail_budget') }} | {{ $submission['budget'] ?? '–' }} |
</x-mail::table>

**{{ __('marketing.mail_message') }}**

{{ $submission['message'] }}

<x-mail::button :url="'mailto:'.$submission['email']">
{{ __('marketing.mail_reply_btn', ['name' => $submission['name']]) }}
</x-mail::button>

{{ config('app.name') }}
</x-mail::message>
