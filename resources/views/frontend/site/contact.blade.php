{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 06/08/2017--}}
 {{--* Time: 14:04--}}
 {{--*/--}}
@extends('frontend.site.layout')

@section('page-container')
    @include('frontend.site.components.header_section')
    @include('frontend.site.components.contact_section')
    @include('frontend.site.components.footer_section')
@endsection

@section('after_scripts')
    <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
    <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="{{asset('appshome_front/js/helpers/gmaps.min.js')}}"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="{{asset('appshome_front/js/pages/contact.js')}}"></script>
    <script>$(function(){ Contact.init(); });</script>
@endsection