<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Kealumnian Anda</title>
</head>

<body>
    <h2>Hai, {{ $member->name }}</h2>
    <p>Terima kasih telah melakukan proses pada aplikasi kami, berikut password anda:
        <strong>{{ $password }}</strong>
    </p>
    <p>Jangan lupa untuk melakukan verifikasi Kealumnian <a
            href="{{ route('member.verify', $member->activate_token) }}">DISINI</a></p>
</body>

</html>
