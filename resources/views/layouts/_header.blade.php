<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="/">Blog</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 1) }}">PHP</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 2) }}">MySQL</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('category.show', 3) }}">Linux</a></li>
            </ul>
        </div>

        <ul class="navbar-nav justify-content-end">
            <li class="nav-item" >
                <input type="text" name="search" placeholder="搜索" id="search">
            </li>
        </ul>
    </div>
</nav>