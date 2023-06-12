{{-- extend layout file --}}
@extends('layouts.admin.app')

{{-- title --}}
@section('title', 'Country list')

{{-- css link --}}
@section('css')
@endsection

{{-- dashboard wrapped section --}}
@section('admin_content')


    {{-- breadCrumbs --}}
    @component('components.breadcrumbs', [
        'pageTitle' => 'Dashboard',
        'anotherPageIcon' => 'bi bi-plus',
        'anotherPageUrl' => 'dashboard',
    ])
    @endcomponent
<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if ($show->image)
                    <img src="{{asset($show->image)}}" alt="Profile" height="120px" width="120px" class="rounded-circle">
                    @else
                    <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" alt="Profile" height="120px" width="120px" class="rounded-circle">
                    @endif
                    
                    <h2>{{$show->name}}</h2>
                    <h3>{{ $show->email }}</h3>
                    <div class="social-links mt-2">
                        <a href="{{$show->fb}}" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="{{$show->insta}}" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="{{$show->linkdin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                        </li>

             

                

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic">{{$show->bio}}.</p>

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                <div class="col-lg-9 col-md-8">{{$show->name}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{$show->email}}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">{{$show->phone}}</div>
                            </div>
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                           

                        </div>

                        <div class="tab-pane fade pt-3" id="tutor_education">

                         dssa

                        </div>

                        

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>

{{-- js link --}}
@section('js')
@endsection
@endsection
