@props(['login' => ''])
<x-SecondLayout bootstrap="active">
    <main @if($login) id="{{ $login }}-login" @endif>

    </main>
    @section('extracss')
    @yield('formcss')
    @endsection
</x-SecondLayout>