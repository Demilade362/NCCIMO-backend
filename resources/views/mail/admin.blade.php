<x-mail::message>
# Hello, I'm {{ $data['name'] }}

Subject:
{{ $data['subject'] }}

You have a new message:  
{{ $data['message'] }}

Thanks you NCCFIMO,<br>
From, {{ $data['name'] }}
</x-mail::message>
