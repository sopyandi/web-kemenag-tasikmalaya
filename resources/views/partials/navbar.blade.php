  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
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
                      <a class="nav-link {{($title === 'List Data Category') ? 'active' : ''}}{{($title === 'rian') ? 'active' : ''}}" href="/categories">Category</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{($title === 'Blog') ? 'active' : ''}}{{($title === 'Single Blog') ? 'active' : ''}} {{($title === 'Short By Username') ? 'active' : ''}}" href="/blog">Blog</a>
                  </li>

                  <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li> -->
              </ul>
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                  </li>
              </ul>
          </div>

      </div>
  </nav>
  <!-- ---- -->