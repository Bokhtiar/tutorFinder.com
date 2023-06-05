<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tutor education Form</h5>

        <!-- services Form -->
        @if (@$edit)
            <form action="@route('tutor-education.update', @$edit->service_id)" method="POST" enctype="multipart/form-data">
                @method('put')
            @else
                <form action="@route('tutor-education.store')" method="POST" enctype="multipart/form-data">
        @endif
        @csrf

        <section class="row">

            {{-- tutor institue --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Institute name',
                    'name' => 'institute_name',
                    'placeholder' => 'type here institute name',
                    'required' => true,
                    'value' => @$edit ? @$edit->institute_name : '',
                ])
                @endcomponent
            </div>

            
            {{-- tutor institue --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Degree name',
                    'name' => 'degree_name',
                    'placeholder' => 'type here degree name',
                    'required' => true,
                    'value' => @$edit ? @$edit->degree_name : '',
                ])
                @endcomponent
            </div>

             {{-- tutor institue --}}
             <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Result',
                    'name' => 'result',
                    'placeholder' => 'type here result',
                    'required' => true,
                    'value' => @$edit ? @$edit->result : '',
                ])
                @endcomponent
            </div>
        </section>

        {{-- submit button --}}
        <div class="text-center">

            @component('components.submit_button', [
                'name' => 'Tutor education save',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form>
        <!-- End education Form -->

    </div>
</div>
