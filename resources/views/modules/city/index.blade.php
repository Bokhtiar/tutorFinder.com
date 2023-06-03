{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'State list')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')

    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'State List',
        'anotherPageIcon' => 'bi bi-plus',
        'anotherPageUrl' => 'state.index',
    ])
    @endcomponent

    <section class=" py-4">
        <div class="row">
            {{-- table --}}
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                @component('components.table.state', [
                    'states' => @$states,
                ])
                @endcomponent
            </div>

            {{-- form --}}
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                @component('components.form.state', [
                    'countries' => @$countries,
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
