  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container">
          <img src="img/ii.png" class="navbar-brand " alt="" style="width:5%;">
          <a class="navbar-brand" href="/">KEMENAG</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link {{($title === 'Home') ? 'active' : ''}}" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{($title === 'About') ? 'active' : ''}}" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{($title === 'List Data Category') ? 'active' : ''}}{{($title === 'rian') ? 'active' : ''}}" href="/categories">Sajian Berita</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{($title === 'Blog') ? 'active' : ''}}{{($title === 'Single Blog') ? 'active' : ''}} {{($title === 'Short By Username') ? 'active' : ''}}" href="/blog">Berita</a>
                  </li>

                  <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li> -->
              </ul>
              <ul class="navbar-nav ms-auto active">
                  @auth
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Selamat Datang {{ auth()->user()->name}}
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/dashboard">
                                  <i class="bi bi-menu-button-fill"></i> Dashboard</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li>
                              <form action="/logout" method="post">
                                  @csrf
                                  <button type="submit" class="dropdown-item">
                                      <i class="bi bi-box-arrow-left"></i>Logout
                                  </button>
                              </form>

                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      @else
                      <a href="/login" class="nav-link {{($title === 'Login') ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                      @endauth
                  </li>
              </ul>
          </div>

      </div>
  </nav>
  <!-- ---- -->