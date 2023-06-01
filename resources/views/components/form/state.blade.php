<div class="card">
    <div class="card-body">
        <h5 class="card-title">State Form</h5>

        <!-- state Form -->
        @if (@$edit)
            <form action="@route('state.update', @$edit->state_id)" method="POST">
                @method('put')
            @else
                <form action="@route('state.store')" method="POST">
        @endif
        @csrf

        <section class="row">

            {{-- Country  --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.select', [
                    'id' => 'country_id',
                    'name' => 'country_id',
                    'resource' => $countries,
                    'field_id' => 'country_id',
                    'label' => 'Select country',
                    'field_name' => 'country_name',
                    'value' => @$edit ? @$edit->country_id : '',
                ])
                @endcomponent
            </div>

            {{-- state name --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'State name',
                    'name' => 'state_name',
                    'placeholder' => 'type here state name',
                    'required' => true,
                    'value' => @$edit ? @$edit->state_name : '',
                ])
                @endcomponent
            </div>

            
        </section>

        {{-- submit button --}}
        <div class="text-center">

            @component('components.submit_button', [
                'name' => 'State save',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
