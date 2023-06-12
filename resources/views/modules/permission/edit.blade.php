@extends('layouts.admin.app')
@section('admin_content')

@section('title', 'Permission update Form')

@section('css')
@endsection


<div class="pagetitle">
    <h1>Permission update form</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item">Permission show</li>
            <li class="breadcrumb-item active">Permission details</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<div class="card">
    <div class="card-header">
        <span class="font-weight-bold">Permission table list</span>
    </div>
    <div class="card-body">
        <div class="container">
            <form action="@route('permission.update', $permission->id)" method="POST">
                @method('put')
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select name="role_id" class="form-control">
                                <option value="">Please select a role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        @if ($role->id === $permission->role_id) selected @endif>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                       
                    </div>
                    <div class="col-md-8">
                        <table class="table responsive-table-input-matrix">
                            <thead>
                                <tr>
                                    <th>Permission</th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>View</th>
                                    <th>Delete</th>
                                    <th>List</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- role start --}}
                                <tr>
                                    <td>Roles</td>
                                    <td>
                                        <input type="checkbox" name="permission[role][add]"
                                            @isset($permission['permission']['role']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[role][edit]"
                                            @isset($permission['permission']['role']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[role][view]"
                                            @isset($permission['permission']['role']['view']) checked @endisset value="1">

                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[role][delete]"
                                            @isset($permission['permission']['role']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[role][list]"
                                            @isset($permission['permission']['role']['list']) checked @endisset value="1">
                                    </td>

                                </tr>
                                {{-- role end --}}

                                {{-- permission start --}}
                                <tr>
                                    <td>Permissions</td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][add]"
                                            @isset($permission['permission']['permission']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][edit]" value="1"
                                            @isset($permission['permission']['permission']['edit']) checked @endisset>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][view]" value="1"
                                            @isset($permission['permission']['permission']['view']) checked @endisset>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][delete]"
                                            @isset($permission['permission']['permission']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[permission][list]"
                                            @isset($permission['permission']['permission']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                {{-- permission end --}}

                                {{-- location start --}}
                                <tr>
                                    <td>Location</td>
                                    <td>
                                        <input type="checkbox" name="permission[location][add]"
                                            @isset($permission['permission']['location']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[location][edit]"
                                            @isset($permission['permission']['location']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[location][view]"
                                            @isset($permission['permission']['location']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[location][delete]"
                                            @isset($permission['permission']['location']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[location][list]"
                                            @isset($permission['permission']['location']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                <!--location end -->

                                {{-- Service start --}}
                                <tr>
                                    <td>Services</td>
                                    <td>
                                        <input type="checkbox" name="permission[service][add]"
                                            @isset($permission['permission']['service']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[service][edit]"
                                            @isset($permission['permission']['service']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[service][view]"
                                            @isset($permission['permission']['service']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[service][delete]"
                                            @isset($permission['permission']['service']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[service][list]"
                                            @isset($permission['permission']['service']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                <!--service end -->

                                {{-- book tutor start --}}
                                <tr>
                                    <td>Book tutor</td>
                                    <td>
                                        <input type="checkbox" name="permission[book_tutor][add]"
                                            @isset($permission['permission']['book_tutor']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[book_tutor][edit]"
                                            @isset($permission['permission']['book_tutor']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[book_tutor][view]"
                                            @isset($permission['permission']['book_tutor']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[book_tutor][delete]"
                                            @isset($permission['permission']['book_tutor']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[book_tutor][list]"
                                            @isset($permission['permission']['book_tutor']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                <!--service end -->


                                {{-- tutor education start --}}
                                <tr>
                                    <td>Tutor education</td>
                                    <td>
                                        <input type="checkbox" name="permission[tutor_education][add]"
                                            @isset($permission['permission']['tutor_education']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[tutor_education][edit]"
                                            @isset($permission['permission']['tutor_education']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[tutor_education][view]"
                                            @isset($permission['permission']['tutor_education']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[tutor_education][delete]"
                                            @isset($permission['permission']['tutor_education']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[tutor_education][list]"
                                            @isset($permission['permission']['tutor_education']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                <!--tutor education end -->


                                {{-- testimonial start --}}
                                <tr>
                                    <td>Testimonial</td>
                                    <td>
                                        <input type="checkbox" name="permission[testimonial][add]"
                                            @isset($permission['permission']['testimonial']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[testimonial][edit]"
                                            @isset($permission['permission']['testimonial']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[testimonial][view]"
                                            @isset($permission['permission']['testimonial']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[testimonial][delete]"
                                            @isset($permission['permission']['testimonial']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[testimonial][list]"
                                            @isset($permission['permission']['testimonial']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                <!--tutor education end -->

                                {{-- contact start --}}
                                <tr>
                                    <td>Contact</td>
                                    <td>
                                        <input type="checkbox" name="permission[contact][add]"
                                            @isset($permission['permission']['contact']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[contact][edit]"
                                            @isset($permission['permission']['contact']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[contact][view]"
                                            @isset($permission['permission']['contact']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[contact][delete]"
                                            @isset($permission['permission']['contact']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[contact][list]"
                                            @isset($permission['permission']['contact']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                <!--tutor contact end -->


                                {{-- subject start --}}
                                <tr>
                                    <td>Subject</td>
                                    <td>
                                        <input type="checkbox" name="permission[subject][add]"
                                            @isset($permission['permission']['subject']['add']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[subject][edit]"
                                            @isset($permission['permission']['subject']['edit']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[subject][view]"
                                            @isset($permission['permission']['subject']['view']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[subject][delete]"
                                            @isset($permission['permission']['subject']['delete']) checked @endisset value="1">
                                    </td>
                                    <td>
                                        <input type="checkbox" name="permission[subject][list]"
                                            @isset($permission['permission']['subject']['list']) checked @endisset value="1">
                                    </td>
                                </tr>
                                <!--subject end -->

                                

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>

@endsection
