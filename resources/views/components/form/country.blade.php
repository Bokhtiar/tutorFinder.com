<div class="card">
    <div class="card-body">
        <h5 class="card-title">Country Form</h5>

        <!-- Horizontal Form -->
        @if (@$edit)
            <form action="@route('country.update', @$edit->country_id)" method="POST">
                @method('put')
            @else
                <form action="@route('country.store')" method="POST">
        @endif
        @csrf

        <section class="row">
            {{-- country name --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Country name',
                    'name' => 'country_name',
                    'placeholder' => 'type here country name',
                    'required' => true,
                    'value' => @$edit ? @$edit->country_name : '',
                ])
                @endcomponent
            </div>
        </section>

        {{-- submit button --}}
        <div class="text-center">

            @component('components.submit_button', [
                'name' => 'Country save',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
