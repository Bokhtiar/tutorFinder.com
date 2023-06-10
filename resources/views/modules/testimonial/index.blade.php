{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'Testimonial list')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')

    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'Village List',
        'anotherPageIcon' => 'bi bi-plus',
        'anotherPageUrl' => 'testimonial.create',
    ])
    @endcomponent

    <section class=" py-4">
        {{-- table --}}
        @component('components.table.testimonial', [
            'testimonials' => @$testimonials,
        ])
        @endcomponent
    </section>

    {{-- js link --}}
@section('js')
@endsection
@endsection
