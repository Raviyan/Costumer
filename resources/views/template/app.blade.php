{{-- CORE TEMPLATE NYA --}}
<h1>Ini Kepala</h1>
<p><a href="{{route('home')}}">Home</a> || <a href="{{route('about')}}">About</a> || 
    <a href="{{route('login')}}">Login</a></p>
<br>
<br>
<br>

{{-- utk ngasih tanda disblh sini mau diisi apa --}}
@yield('konten')

@yield('login')

@yield('home')

<h1>Ini Kaki</h1>