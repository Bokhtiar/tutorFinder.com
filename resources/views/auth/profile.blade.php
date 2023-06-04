{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'Tutor profile')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')

    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'Tutor Profile',
        'anotherPageIcon' => 'bi bi-plus',
        'anotherPageUrl' => 'dashboard',
    ])
    @endcomponent



    @if (Auth::user()->role_id == 1)
        admin
    @elseif(Auth::user()->role_id == 2)
        @component('components.form.tutor_profile', [
            'subjects' => @$subjects,
            'countries' => @$countries,
            'cities' => @$cities,
            'states' => @$states,
            'villages' => @$villages,
        ])
        @endcomponent
        
    @elseif(Auth::user()->role_id == 3)
        student
    @endif


    {{-- js link --}}
@section('js')
@endsection
@endsection
