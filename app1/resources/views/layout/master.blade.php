@include('layout/header')

<h1>Blog Post Application</h1>
    <a href="{{url('post/create')}}">Add Post</a>
    <br/>
    <a href="{{url('post/show')}}">Show Post</a>
<br/>
<hr>

@yield('content')

@include('layout/footer')