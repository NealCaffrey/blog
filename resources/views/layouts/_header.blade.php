<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="/"><\/\/\></a>
        <i class="fa fa-bars" aria-hidden="true" id="navIcon" @click="change($event)"></i>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'PHP') }}">PHP</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'MySQL') }}">MySQL</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Linux') }}">Linux</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Web') }}">Web</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Algorithm') }}">Algorithm</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Review') }}">Review</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 'Other') }}">Other</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            </ul>
        </div>
        <ul class="navbar-nav justify-content-end" id="searchBox">
            <li class="nav-item">
                <input type="text" name="search" placeholder="Search" id="search" @keyup.enter="search($event)">
            </li>
        </ul>
    </div>
    <div class="container" id="navbar-list">
      <div class="navbar-collapse">
        <ul class="navbar-nav">
          <a href="#"><li class="nav-item" href="{{ route('category.show', 'PHP') }}">PHP</li></a>
          <a href="#"><li class="nav-item" href="{{ route('category.show', 'MySQL') }}">MySQL</li></a>
          <a href="#"><li class="nav-item" href="{{ route('category.show', 'Linux') }}">Linux</li></a>
          <a href="#"><li class="nav-item" href="{{ route('category.show', 'Web') }}">Web</li></a>
          <a href="#"><li class="nav-item" href="{{ route('category.show', 'Algorithm') }}">Algorithm</li></a>
          <a href="#"><li class="nav-item" href="{{ route('category.show', 'Review') }}">Review</li></a>
          <a href="#"><li class="nav-item" href="{{ route('category.show', 'Other') }}">Other</li></a>
          <a href="#"><li class="nav-item" href="{{ route('about') }}">About</li></a>
        </ul>
      </div>
    </div>
</nav>

