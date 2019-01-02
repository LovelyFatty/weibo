@extends('layouts.default')
@section('content')
  <div class="jumbotron">
  <h1>Hello Laravel</h1>
  <p class="lead">
    微博项目示例首页
  </p>
  <p>
    一切将从这里开始
  </p>
  <p>
    <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
    </p>
  </div>
@stop
