<div class="card">
    <div class="card-body">
        <h5 class="card-title">Services Form</h5>

        <!-- services Form -->
        @if (@$edit)
            <form action="@route('services.update', @$edit->service_id)" method="POST" enctype="multipart/form-data">
                @method('put')
            @else
                <form action="@route('services.store')" method="POST" enctype="multipart/form-data">
        @endif
        @csrf

        <section class="row">

            {{-- services name --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Services name',
                    'name' => 'title',
                    'placeholder' => 'type here services name',
                    'required' => true,
                    'value' => @$edit ? @$edit->title : '',
                ])
                @endcomponent
            </div>

            {{-- services body --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Services body',
                    'name' => 'body',
                    'placeholder' => 'type here services body',
                    'required' => true,
                    'value' => @$edit ? @$edit->body : '',
                ])
                @endcomponent
            </div>

            {{-- services image --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Services image',
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
                'name' => 'services save',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form>
        <!-- End services Form -->

    </div>
</div>
