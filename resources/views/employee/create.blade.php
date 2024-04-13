@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('employees.store') }}"method="POST">
            @csrf
            <div class="rowjustify-content-center">
                <div class="p-5 bg-lightrounded-3bordercol-xl-6">
                    <div class="mb-3text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6mb-3">
                            <label for="firstName"class="form-label">First
            Name</label>
                            <input class="form-control@error('firstName') is
            invalid@enderror"type="text"name="firstName"id="firstName"
            value="{{old('firstName') }}"placeholder="EnterFirstName">
                            @error('firstName')
                                <div class="text
           danger"><small>{{ $message}}</small></div>
                            @enderror
                        </div>
                        <divclass="col-md-6mb-3">
                            <labelfor="lastName"class="form-label">Last
            Name</label>
                            <input class="form-control@error('lastName') is
            invalid@enderror"type="text"name="lastName"id="lastName"
            value="{{old('lastName') }}"placeholder="EnterLastName">
                            @error('lastName')
                                <div class="text
            danger"><small>{{ $message}}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6mb-3">
                            <label for="email" class="form-label">Email</label>
                                <input class="form-control@error('email') is-invalid
                            @enderror"type="text"name="email" id="email"value="{{old('email') }}"
            placeholder="EnterEmail">
                            @error('email')
                            <div class="text
           danger"><small>{{ $message}}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6mb-3">
                            <label for="age"class="form-label">Age</label>
                                <input class="form-control@error('age') is-invalid
                            @enderror"type="text"name="age"id="age"value="{{old('age')}}"
            placeholder="EnterAge">
                            @error('age')
                        <div class="text
           danger"><small>{{ $message}}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12mb-3">
                            <label for="position"class="form
           label">Position</label>
                            <select name="position"id="position"class="form
           select">
                                @foreach($positions as$position)
                                    <option value="{{$position->id }}"
            {{old('position')== $position->id? 'selected': ''}}>{{$position
           >code.'-'.$position->name }}</option>
                                @endforeach
                            </select>
                                @error('position')
                                    <div class="text-danger"><small>{{ $message}}</small></div>
                                @enderror
                            </div>
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6d-grid">
                            <a href="{{ route('employees.index') }}" class="btn
            btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i>
            Cancel</a>
                        </div>
            <div class="col-md-6d-grid">
            <button type="submit"class="btnbtn-darkbtn-lgmt
           3"><i class="bi-check-circleme-2"></i>Save</button>
            </div>
            </div>
            </div>
            </div>
            </form>
    </div>
@endsection
