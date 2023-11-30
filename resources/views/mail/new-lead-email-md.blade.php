<x-mail::message>
    # New Lead Message

    From: {{ $lead->name }}

    Email: {{ $lead->email }}

    Phone: {{ $lead->phone }}

    Message:

    {{ $lead->message }}

</x-mail::message>
