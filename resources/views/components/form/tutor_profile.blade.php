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


        {{-- Soft information start --}}
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Soft information</h3>
                <div class="row">
                    {{-- name --}}
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        @component('components.input', [
                            'label' => 'Name',
                            'name' => 'name',
                            'placeholder' => 'type here name',
                            'required' => true,
                            'value' => Auth::user()->name,
                        ])
                        @endcomponent
                    </div>

                    {{-- email --}}
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        @component('components.input', [
                            'label' => 'Email',
                            'name' => 'email',
                            'placeholder' => 'type here email',
                            'required' => true,
                            'value' => Auth::user()->email,
                        ])
                        @endcomponent
                    </div>

                    {{-- phone --}}
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        @component('components.input', [
                            'label' => 'Phone number',
                            'name' => 'phone',
                            'placeholder' => 'type here phone number',
                            'required' => true,
                            'value' => @$edit ? @$edit->phone : ' ',
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
        {{-- Soft information end --}}


        {{-- skill start --}}
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Skill Section</h3>
                <div class="row">
                    {{-- Subject  --}}
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        @component('components.select', [
                            'id' => 'subject_id',
                            'name' => 'subject_id',
                            'resource' => $subjects,
                            'field_id' => 'subject_id',
                            'label' => 'Select subject',
                            'field_name' => 'subject_name',
                            'value' => @$edit ? @$edit->subject_id : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- tutor hour --}}
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        @component('components.input', [
                            'label' => 'Tutor hour',
                            'name' => 'tutor_hour',
                            'placeholder' => 'type here tutor hours',
                            'required' => true,
                            'value' => @$edit ? @$edit->tutor_hour : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- weekly day work --}}
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        @component('components.input', [
                            'label' => 'Weekly day',
                            'name' => 'weekly_day',
                            'placeholder' => 'type here tutor weekly day',
                            'required' => true,
                            'value' => @$edit ? @$edit->weekly_day : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- fee --}}
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        @component('components.input', [
                            'label' => 'Tution fee',
                            'name' => 'fee',
                            'placeholder' => 'type here tution fee',
                            'required' => true,
                            'value' => @$edit ? @$edit->fee : '',
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
        {{-- skill end --}}


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
