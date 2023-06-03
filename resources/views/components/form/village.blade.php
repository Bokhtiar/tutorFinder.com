<div class="card">
    <div class="card-body">
        <h5 class="card-title">Village Form</h5>

        <!-- state Form -->
        @if (@$edit)
            <form action="@route('village.update', @$edit->village_id)" method="POST">
                @method('put')
            @else
                <form action="@route('village.store')" method="POST">
        @endif
        @csrf

        <section class="row">

            {{-- City  --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.select', [
                    'id' => 'city_id',
                    'name' => 'city_id',
                    'resource' => $cities,
                    'field_id' => 'city_id',
                    'label' => 'Select city',
                    'field_name' => 'city_name',
                    'value' => @$edit ? @$edit->city_id : '',
                ])
                @endcomponent
            </div>

            {{-- village name --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Vilalge name',
                    'name' => 'village_name',
                    'placeholder' => 'type here village name',
                    'required' => true,
                    'value' => @$edit ? @$edit->village_name : '',
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
