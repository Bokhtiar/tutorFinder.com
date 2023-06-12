{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'Conctact list')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')

    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'Contact List',
        'anotherPageIcon' => 'bi bi-plus',
        'anotherPageUrl' => 'contact.index',
    ])
    @endcomponent

    <section class=" py-4">
            {{-- table --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.table.contact', [
                    'contacts' => @$contacts,
                ])
                @endcomponent
            </div>
    </section>

    {{-- js link --}}
@section('js')
@endsection
@endsection
