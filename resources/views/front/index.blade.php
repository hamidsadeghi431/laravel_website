@extends('front.layouts.master')
@section('content')

    <!-- end of header -->
    @include('front.partials.menu')
    <!-- Intro -->
    @include('front.partials.intro')
    <!-- end of intro -->

    <!-- Description -->
    @include('front.partials.description')
    <!-- end of description -->


    <!-- Services -->
    @include('front.partials.services')
    <!-- end of services -->


    <!-- Details 1-2 -->
    @include('front.partials.details')
    <!-- end of details 1-2 -->


    <!-- Testimonials -->
    @include('front.partials.testimonials')
    <!-- end of testimonials -->


    <!-- Call Me -->
    @include('front.partials.callme')
    <!-- end of call me -->


    <!-- Projects -->
    @include('front.partials.project')
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    @include('front.partials.lightboxe')
    <!-- end of project lightboxes -->


    <!-- Team -->
    @include('front.partials.team')
    <!-- end of team -->


    <!-- About -->
    @include('front.partials.about')
    <!-- end of about -->


    <!-- Contact -->
    @include('front.partials.contact')
    <!-- end of contact -->


    <!-- Footer -->
    @include('front.partials.footer')
    <!-- end
@endsection
@section('seo')
    @include('front.partials.seo')
@endsection
