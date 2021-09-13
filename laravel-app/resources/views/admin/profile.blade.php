<html>
    <body>
        <h1>Hello, {{ $name }}-------{{ $records }}</h1>
    </body>
</html>
<!-- 
@if (!empty($records) )
    I have one record!
@else
    I don't have any records!
@endif

@isset($records)
    // $records is defined and is not null...
@endisset

@empty($records)
    // $records is "empty"...
@endempty -->

<!-- @switch($i)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch -->

@for ($i = 0; $i < 10; $i++)
     {{ $i }}
@endfor

<!-- <x-package-alert/> -->

<!-- <x-comp::alert /> -->



<x-package-alert />
