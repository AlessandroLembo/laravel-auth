@if (session('message'))
    {{-- se c'è cè stampa questo messaggio altrimenti lo stampi di tipo info --}}
    <div class="alert alert-{{ session('type') ?? 'info' }} mt-5">
        {{ session('message') }}
    </div>
@endif
