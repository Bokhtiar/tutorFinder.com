{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'subject list')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')

    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'Subject List',
        'anotherPageIcon' => 'bi bi-plus',
        'anotherPageUrl' => 'subject.index',
    ])
    @endcomponent

    <section class=" py-4">
        <div class="row">
            {{-- table --}}
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                @component('components.table.subject', [
                    'subjects' => @$subjects,
                ])
                @endcomponent
            </div>

            {{-- form --}}
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                @component('components.form.subject', [
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
