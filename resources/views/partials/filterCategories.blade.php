@php
    $count = 0;
@endphp

@foreach ($libros->reverse() as $libro)
@break($count == 5)
    <figure class="text-center flex flex-col">
        <img class="h-72 w-48" src="{{ asset('storage') . '/' . $libro->foto }}"
            alt="El nombre del titulo de la portada es {{ $libro['titulo'] }}">
        <figcaption class="font-Montserrat w-48 text-lg">{{ $libro['titulo'] }}</figcaption>
    </figure>
    @php
        $count++;
    @endphp

@endforeach
