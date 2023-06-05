<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tutor profile update</h5>

        <!-- tutor profile Form -->
        @if (@$edit)
            <form action="@route('student.profile.update', @$edit->student_id)" method="POST" enctype="multipart/form-data">
                @method('put')
            @else
                <form action="@route('student.store')" method="POST" enctype="multipart/form-data">
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
                            'type' => 'number',
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
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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

                    {{-- class --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @component('components.input', [
                            'label' => 'Class',
                            'name' => 'class',
                            'placeholder' => 'type here class ',
                            'required' => true,
                            'value' => @$edit ? @$edit->class : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- institut_name --}}
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        @component('components.input', [
                            'label' => 'Institut name',
                            'name' => 'institut_name',
                            'placeholder' => 'type here institut name ',
                            'required' => true,
                            'value' => @$edit ? @$edit->institut_name : '',
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
        {{-- skill end --}}


        {{-- location start --}}
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Location</h3>
                <div class="row">

                    {{-- Country  --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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

                    {{-- state  --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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

                    {{-- City  --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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


                    {{-- villages  --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @component('components.select', [
                            'id' => 'village_id',
                            'name' => 'village_id',
                            'resource' => $villages,
                            'field_id' => 'village_id',
                            'label' => 'Select village',
                            'field_name' => 'village_name',
                            'value' => @$edit ? @$edit->village_id : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- textarea  --}}
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        @component('components.textarea', [
                            'label' => 'Address',
                            'name' => 'address',
                            'placeholder' => 'type here address',
                            'value' => @$edit ? @$edit->address : '',
                        ])
                        @endcomponent
                    </div>

                </div>
            </div>
        </div>
        {{-- location end --}}

        {{-- bio && image --}}
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Bio && image</h3>
                <div class="row">

                    {{-- Bio --}}
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        @component('components.input', [
                            'label' => 'Bio',
                            'name' => 'bio',
                            'placeholder' => 'type here bio',
                            'required' => false,
                            'value' => @$edit ? @$edit->bio : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- tutor image --}}
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        @component('components.input', [
                            'label' => 'Tutor image',
                            'name' => 'image',
                            'type' => 'file',
                            'placeholder' => '',
                            'required' => false,
                            'value' => @$edit ? @$edit->image : '',
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
        {{-- social end --}}




        {{-- submit button --}}
        <div class="text-center">

            @component('components.submit_button', [
                'name' => 'Profile update',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
