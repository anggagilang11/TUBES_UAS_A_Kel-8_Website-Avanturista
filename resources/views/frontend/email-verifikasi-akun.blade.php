<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body{
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        Silahkan klik tautan ini untuk aktivasi akun anda.<br><br>
        <a href="{{ route('verifikasi-akun', ['token' => $token]) }}" target="__blank" style="background-color: #113897; color: white; padding: 10px; border-radius: 10px; text-decoration: none;">Aktivasi Akun</a>
        <br>
        <br>
        Jika tidak bisa diklik silakan salin link berikut
        <br>
        <a target="__blank" href="{{ route('verifikasi-akun', ['token' => $token]) }}">{{ route('verifikasi-akun', ['token' => $token]) }}</a>
        <br>
    </body>
</html>
