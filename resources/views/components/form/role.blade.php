<div class="card">
    <div class="card-body">
        <h5 class="card-title">Role Form</h5>

        <!-- Horizontal Form -->
        @if (@$edit)
            <form action="@route('role.update', @$edit->id)" method="POST">
                @method('put')
            @else
                <form action="@route('role.store')" method="POST">
        @endif
        @csrf

        <section class="row">
            {{-- role name --}}
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @component('components.input', [
                    'label' => 'role name',
                    'name' => 'name',
                    'placeholder' => 'type here name',
                    'required' => true,
                    'value' => @$edit ? @$edit->name : '',
                ])
                @endcomponent
            </div>
        </section>

        {{-- submit button --}}
        <div class="text-center">

            @component('components.submit_button', [
                'name' => 'Role save',
            ])
            @endcomponent

            @component('components.reset_button')
            @endcomponent

        </div>
        </form><!-- End Horizontal Form -->

    </div>
</div>
