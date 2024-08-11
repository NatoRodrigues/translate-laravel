<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Idioma</title>
</head>
<body>
    <div>
        <a href="{{ route('setLocale', 'pt') }}">Português</a> | 
        <a href="{{ route('setLocale', 'en') }}">English</a>
        @dump("app-locale value: " . app()->getLocale())
        @dump("Session value:" . session('locale'))
    </div>
    @if(session('status'))
    <p>{{ session('status') }}</p>
    @endif
    <h1>{{ __('messages.welcome') }}</h1>
</body>
</html>
