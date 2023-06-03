{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'Village list')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')

    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'Village List',
        'anotherPageIcon' => 'bi bi-plus',
        'anotherPageUrl' => 'village.index',
    ])
    @endcomponent

    <section class=" py-4">
        <div class="row">
            {{-- table --}}
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                @component('components.table.village', [
                    'villages' => @$villages,
                ])
                @endcomponent
            </div>

            {{-- form --}}
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                @component('components.form.village', [
                    'cities' => @$cities,
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
