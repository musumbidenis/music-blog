<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('sweetalert::alert')

You received a message from : {{ $name }}

<p>

Name: {{ $name }}

</p>

<p>

Email: {{ $email }}

</p>

<p>

Tel No: {{ $tel }}

</p>

<p>

Event description: {{ $event_description }}

</p>
</body>
</html>
