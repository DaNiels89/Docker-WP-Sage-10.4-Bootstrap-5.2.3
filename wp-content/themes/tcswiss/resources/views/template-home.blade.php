{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  <h1>Home Template Elevate Digital</h1>
@endsection
