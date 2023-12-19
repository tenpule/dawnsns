@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>

@foreach($posts as $post)
<div>
  {{ $post->posts }}
</div>
@endforeach

@endsection
