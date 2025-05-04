@props(['login' => ''])
<x-SecondLayout>
    <main @if($login) id="{{ $login }}-login" @endif>

    </main>
</x-SecondLayout>