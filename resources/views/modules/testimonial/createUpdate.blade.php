{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'Testimonial create')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')

    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'Testimonial List',
        'anotherPageIcon' => 'bi bi-list',
        'anotherPageUrl' => 'testimonial.index',
    ])
    @endcomponent

    <section class=" py-4">
        @component('components.form.testimonial', [
            'edit' => @$edit,
        ])
        @endcomponent
    </section>

    {{-- js link --}}
@section('js')
@endsection
@endsection
