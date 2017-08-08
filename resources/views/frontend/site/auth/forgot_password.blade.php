{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 06/08/2017--}}
 {{--* Time: 14:08--}}
 {{--*/--}}
@extends('frontend.site.layout')

@section('page-container')
    @include('frontend.site.components.header_section')
    @include('frontend.site.auth.components.auth_banner')
    @include('frontend.site.auth.components.auth_new_password_form')
    @include('frontend.site.components.footer_section')
@endsection