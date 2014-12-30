@extends('layouts/layout')

@section('content')
<div class="menu-item">
                <a href="{{ route('producto', 3)}}">Los cuerudos Blanco</a>
                <a href="{{ route('producto', 4)}}">Los Cuerudos con Gusano</a>
                <a href="{{ route('producto', 5)}}">Los Cuerudos Reposado</a>
                <a href="{{ route('producto', 6)}}">Los Cuerudos Añejo</a>
</div>
     @yield('sub-content')
@stop
