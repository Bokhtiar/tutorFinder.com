<div class="card">
    <div class="card-body">
        <h5 class="card-title">Testimonial Form</h5>

        <!-- services Form -->
        @if (@$edit)
            <form action="@route('testimonial.update', @$edit->service_id)" method="POST" enctype="multipart/form-data">
                @method('put')
            @else
                <form action="@route('testimonial.store')" method="POST" enctype="multipart/form-data">
        @endif
        @csrf

        <section class="row">

            {{-- Testimonial name --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Name',
                    'name' => 'name',
                    'placeholder' => 'type here name',
                    'required' => true,
                    'value' => @$edit ? @$edit->name : '',
                ])
                @endcomponent
            </div>

            {{-- designation --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Designation',
                    'name' => 'designation',
                    'placeholder' => 'type here designation name',
                    'required' => true,
                    'value' => @$edit ? @$edit->designation : '',
                ])
                @endcomponent
            </div>

            {{-- Testimonial body --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Testimonial body',
                    'name' => 'body',
                    'placeholder' => 'type here Testimonial body',
                    'required' => true,
                    'value' => @$edit ? @$edit->body : '',
                ])
                @endcomponent
            </div>

            {{-- image --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'image',
                    'name' => 'image',
                    'type' => 'file',
                    'placeholder' => '',
                    'required' => false,
                    'value' => @$edit ? @$edit->image : '',
                ])
                @endcomponent
            </div>


        </section>

        {{-- submit button --}}
        <div class="text-center">

            @component('components.submit_button', [
                'name' => 'Testimonial save',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form>
        <!-- End Testimonial Form -->

    </div>
</div>
