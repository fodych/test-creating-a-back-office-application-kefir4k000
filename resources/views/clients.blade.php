@extends('platform::layouts.dashboard')

@section('title', __('Clients'))

@section('content')
    <x-orchid-wrapper :title="__('Clients')">
        {!! $screen->buld() !!}
    </x-orchid-wrapper>
@endsection
