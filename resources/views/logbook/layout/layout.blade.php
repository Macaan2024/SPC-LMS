<!DOCTYPE html>
<html lang="en">
    @include('logbook.layout.header')
<body>

    @include('logbook.layout.nav')
    @if(isset($logbook))
        {{ $logbook}}
    @endif
    @include('logbook..layout.footer')
</body>
</html>
