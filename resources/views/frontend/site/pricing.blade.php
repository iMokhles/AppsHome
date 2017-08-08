{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 06/08/2017--}}
 {{--* Time: 14:04--}}
 {{--*/--}}
@extends('frontend.site.layout')

@section('page-container')
    @include('frontend.site.components.header_section')
    @include('frontend.site.components.pricing_section')
    @include('frontend.site.components.footer_section')

@endsection