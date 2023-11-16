@extends('news.layout')

<!-- 이후에 만들어지는 자식 요소는 section 태그로 만듦 -->
@section('content')

  <!-- <a href='/news/create'>뉴스 등록</a> -->
  <a href="{{ route('news.create')}}"> 뉴스 등록 </a>

@endsection