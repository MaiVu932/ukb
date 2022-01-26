<meta name="csrf-token" content="{{ csrf_token() }}">

<div>
    <form action='0' method="POST">
        @csrf
        <h1>Tao khoa</h1>
        <p>Ma</p> 
        <input type='text' name='txt-code' />
        <p>Ten</p>
        <input type='text' name='txt-name' />
        <br> <br>
        <input type='submit' name='btn-create' />

    </form>
</div>
@if ($errors->any())
{{-- @foreach ($errors->all() as $err) --}}
{{-- <li>{{ $err }}</li> --}}
    @if (count($errors->all()) != 0)
        <p>Loi</p>
    @endif
{{-- @endforeach     --}}
@endif