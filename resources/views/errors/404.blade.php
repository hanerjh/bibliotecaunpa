@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Página no encontrada'))

@section('image')
<div style="background-image: url('https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Obs!,La página que esta buscando no se encuentra.'))