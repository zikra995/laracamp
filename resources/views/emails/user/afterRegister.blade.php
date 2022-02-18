@component('mail::message')
# Welcome!

Hi! {{ $user->name }}
<br>
Selamat datang di laracamp! akun mu berhasil dibuat, silahkan pilih materi pelatihan!

@component('mail::button', ['url' => route('login')])
Login Here!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
