@extends('layouts.default')
@section('title', '果易数码')

@section('content')
 <div class="jumbotron">
    <h1>果易数码</h1>
    <p class="lead">
      你现在所看到的是 果易数码 项目主页。
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
    </p>
  </div>
@stop