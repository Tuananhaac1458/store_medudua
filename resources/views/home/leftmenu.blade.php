<head>
    <link rel="stylesheet" href="{{url('css/leftmenu.css')}}"/>
</head>

<div class="sidebar">
    <ul>
      <li><a href="/book" @if(request()->path() == 'book') class="active" @endif>
        <span class="icon"><i class="fas fa-book"></i></span>
        <span class="title">Books</span></a></li>
      <li><a href="/demo" @if(request()->path() == 'demo') class="active" @endif>
        <span class="icon"><i class="fas fa-file-video"></i></span>
        <span class="title">Movies</span>
        </a></li>
      <li><a href="#" @if(request()->path() == 'product') class="active" @endif>
        <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
        <span class="title">Sports</span>
        </a></li>
      <li><a href="#" @if(request()->path() == 'product') class="active" @endif>
        <span class="icon"><i class="fab fa-blogger"></i></span>
        <span class="title">Blog</span>
        </a></li>
      <li><a href="/game" @if(request()->path() == 'game') class="active" @endif>
        <span class="icon"><i class="fas fa-cogs"></i></span>
        <span class="title">Setting</span>
        </a></li>
  </ul>
</div>
