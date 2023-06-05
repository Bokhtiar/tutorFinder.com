{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'Tutor education')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')

    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'Tutor Education',
        'anotherPageIcon' => 'bi bi-plus',
        'anotherPageUrl' => 'tutor-education.index',
    ])
    @endcomponent

    <section class=" py-4">
        <div class="row">
            {{-- table --}}
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                @component('components.table.education', [
                    'educations' => @$tutorEducations,
                ])
                @endcomponent
            </div>

            {{-- form --}}
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                @component('components.form.education', [
                    'edit' => @$edit,
                ])
                @endcomponent
            </div>
        </div>
    </section>

    {{-- js link --}}
@section('js')
@endsection
@endsection
