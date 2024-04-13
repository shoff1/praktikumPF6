@php
$currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-darkbg-primary">
    <div class="container">
        <a href="{{route('home') }}"class="navbar-brandmb-0h1"><i
class="bi-hexagon-fill me-2"></i> DataMaster</a>
        <button type="button"class="navbar-toggler" data-bs
toggle="collapse"data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapsenavbar-collapse"
id="navbarSupportedContent">
            <hr class="d-md-nonetext-white-50">

            <ul class="navbar-navflex-rowflex-wrap">
                <li class="nav-itemcol-2col-md-auto"><a
href="{{route('home') }}"class="nav-link@if($currentRouteName ==
'home')active@endif">Home</a></li>
                <li class="nav-itemcol-2col-md-auto"><a
href="{{route('employees.index') }}"class="nav-link
@if($currentRouteName == 'employees.index') active
@endif">Employee</a></li>
            </ul>

            <hr class="d-md-nonetext-white-50">

            <a href="{{ route('profile') }}"class="btnbtn-outline-light
my-2ms-md-auto"><i class="bi-person-circle me-1"></i> MyProfile</a>
        </div>
    </div>
</nav>
