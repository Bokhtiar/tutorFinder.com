<div class="card">
    <div class="card-body">
        <h5 class="card-title">Subject Form</h5>

        <!-- Horizontal Form -->
        @if (@$edit)
            <form action="@route('subject.update', @$edit->subject_id)" method="POST">
                @method('put')
            @else
                <form action="@route('subject.store')" method="POST">
        @endif
        @csrf

        <section class="row">
            {{-- subject name --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'Subject name',
                    'name' => 'subject_name',
                    'placeholder' => 'type here subject name',
                    'required' => true,
                    'value' => @$edit ? @$edit->subject_name : '',
                ])
                @endcomponent
            </div>
        </section>

        {{-- submit button --}}
        <div class="text-center">

            @component('components.submit_button', [
                'name' => 'subject save',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
