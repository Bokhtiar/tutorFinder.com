<div class="card">
    <div class="card-body">
        <h5 class="card-title">City Form</h5>

        <!-- state Form -->
        @if (@$edit)
            <form action="@route('city.update', @$edit->city_id)" method="POST">
                @method('put')
            @else
                <form action="@route('city.store')" method="POST">
        @endif
        @csrf

        <section class="row">

            {{-- state  --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.select', [
                    'id' => 'state_id',
                    'name' => 'state_id',
                    'resource' => $states,
                    'field_id' => 'state_id',
                    'label' => 'Select state',
                    'field_name' => 'state_name',
                    'value' => @$edit ? @$edit->state_id : '',
                ])
                @endcomponent
            </div>

            {{-- city name --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'City name',
                    'name' => 'city_name',
                    'placeholder' => 'type here city name',
                    'required' => true,
                    'value' => @$edit ? @$edit->city_name : '',
                ])
                @endcomponent
            </div>


        </section>

        {{-- submit button --}}
        <div class="text-center">

            @component('components.submit_button', [
                'name' => 'City save',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
