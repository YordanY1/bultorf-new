<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <title>Ново съобщение</title>
</head>

<body style="background-color: #f4f4f4; font-family: sans-serif; padding: 2rem; color: #333;">
    <div
        style="max-width: 600px; margin: auto; background: #ffffff; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <div style="text-align: center; margin-bottom: 2rem;">
            <img src="{{ asset('images/logo.webp') }}" alt="Bultorf Logo" style="height: 80px;">
        </div>

        <h2 style="color: #222;">Ново съобщение от сайта Bultorf</h2>

        <p><strong>Име:</strong> {{ $name }}</p>
        <p><strong>Имейл:</strong> {{ $email }}</p>

        <p><strong>Съобщение:</strong></p>
        <div style="background: #f9f9f9; padding: 1rem; border-radius: 6px; border: 1px solid #ddd;">
            {!! nl2br(e($bodyMessage)) !!}
        </div>

        <p style="margin-top: 2rem; font-size: 0.9rem; color: #888;">Изпратено чрез <a
                href="{{ config('app.url') }}">{{ config('app.name') }}</a></p>
    </div>
</body>

</html>
