@if(auth()->user()->hasRole('admin'))
    <h1>Selamat datang, Admin!</h1>
@endif