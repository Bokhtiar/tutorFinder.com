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
            'edit' => @$edit,
            'cities' => @$cities,
            'states' => @$states,
            'subjects' => @$subjects,
            'villages' => @$villages,
            'countries' => @$countries,
        ])
        @endcomponent
    @elseif(Auth::user()->role_id == 3)
        @component('components.form.studnet_profile', [
            'edit' => @$edit,
            'cities' => @$cities,
            'states' => @$states,
            'subjects' => @$subjects,
            'villages' => @$villages,
            'countries' => @$countries,
        ])
        @endcomponent
    @endif


    {{-- js link --}}
@section('js')
@endsection
@endsection
