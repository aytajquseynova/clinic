@extends('layouts.master')
@section('content')
@include('layouts.home.header')
<!-- About Start -->
@include('layouts.includes.about')
<!-- About End -->


<!-- Service Start -->
@include('layouts.includes.service')
<!-- Service End -->


<!-- Feature Start -->
@include('layouts.includes.feature')
<!-- Feature End -->


<!-- Team Start -->
@include('layouts.includes.team')
<!-- Team End -->


<!-- Appointment Start -->
@include('layouts.includes.appointment')
<!-- Appointment End -->


<!-- Testimonial Start -->
@include('layouts.includes.testimonial')
<!-- Testimonial End -->

@endsection