@include('includes.header')

<h1><?= $title ?></h1>

<?php

foreach ($list as $code => $value) {
    echo "<p>$code, $value</p>";
}

# PHP Comment
// PHP Comment
/* PHP Comment block */

?>
<!-- HTML Comment-->

{{-- Blade commment --}}

<hr>

<h1>Blade</h1>

<h2>{!! $title !!}</h2>

{{ $title or 'Sin título' }}

{{-- IF / ELSE / ELSEIF --}}

@if (!empty($title))
    <h3>$title: {{ $title }}</h3>
@else
    <h3>$title no existe</h3>
@endif

{{-- FOR --}}

@for ($i = 0; $i < 10; $i++)
    <p>{{ $i }}</p>
@endfor

{{-- WHILE --}}

@php
$counter = 1;
@endphp
@while ($counter < 50)
    {{ $counter }},
    @php
        $counter++;
    @endphp
@endwhile

{{-- FOR EACH --}}

@foreach ($list as $item)
    <p>{{ $item }}</p>
@endforeach

@include('includes.footer')
