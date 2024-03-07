<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('assets/images/icon.png')}}" type="image/png">
  <title>CineFlix</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/media_query.css')}}">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>




  <!--
    - main container
  -->
  <div class="container">

    <!--
      - #HEADER SECTION
    -->

    <header class="">
      <div class="navbar">

        <!--
          - menu button for small screen
        -->
        <button class="navbar-menu-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

        <a href="#" class="navbar-brand">
          <img src="{{ asset('assets/images/logo.png')}}" alt="">
        </a>

        <!--
          - navbar navigation
        -->
 
        <nav class="" style="">
            <ul class="navbar-nav-new " style="">
              <li > <a href="#" class="navbar-link ">Home</a> </li>
              <li > <a href="#category" class="navbar-link ">Category</a> </li>
              <li > <a href="cineflix_documentation/index.html" class="navbar-link ">Documentation</a> </li>
              <li > <a href="#live" class="navbar-link   indicator">LIVE</a> </li>
            </ul>
        </nav>

        <!--
          - search and sign-in
        -->

        <div class="navbar-actions">

          <form action="#" class="navbar-form">
            <input type="text" name="search" placeholder="I'm looking for..." class="navbar-form-search">

            <button class="navbar-form-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

            <button class="navbar-form-close">
              <ion-icon name="close-circle-outline"></ion-icon>
            </button>
          </form>


          <!--
            - search button for small screen
          -->

          <button class="navbar-search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

          <a href="#" class="navbar-signin">
            <li class="nav__item after_login nav__link" id="nav-profile" >
                <div class="profile">
                      <div class="user">
                        <h3 id="dropdown-profile-name"> <span id="dropdown-profile-name"></span> </h3>
                      </div>
                      <div class="img-box show-menu ">
                        <img src="{{asset('avatar-3d/anonymous.png')}}" alt="user image">
                      </div>
                </div>
                <div class="menu-profile">
                      <ul>
                        <li><a href="auth-page/index.html"><i class="ph-bold ph-user"></i>&nbsp;Login</a></li>
                        <li><a href="auth-page/register.html"><i class="ph-bold ph-user"></i>&nbsp;Register</a></li>
                      </ul>
                </div>
            </li>
          </a>

        </div>

      </div>
    </header>


    <!--
      - MAIN SECTION
    -->
    <main>

      <!--
        - #BANNER SECTION
      --> 

    <section class="banner h-20" >
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/John-Wick-3-1087-347.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">

                <div class="card-info" >

                    <div class="genre">
                      <ion-icon name="film"></ion-icon>
                      <span>Action/Thriller</span>
                    </div>
  
                    <div class="year">
                      <ion-icon name="calendar"></ion-icon>
                      <span>2019</span>
                    </div>
  
                    <div class="duration">
                      <ion-icon name="time"></ion-icon>
                      <span>2h 11m</span>
                    </div>
  
                    <div class="quality"> 
                      <ion-icon></ion-icon> 
                      <span class="span-quality">4K</span> 
                    </div>
                </div>

                <h3>John Wick</h3>
                <p>Chapter 3 - Parabellum</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/images/jurrasic-park-1087-347.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">

                <div class="card-info" >

                    <div class="genre">
                      <ion-icon name="film"></ion-icon>
                      <span>Action/Thriller</span>
                    </div>
  
                    <div class="year">
                      <ion-icon name="calendar"></ion-icon>
                      <span>2019</span>
                    </div>
  
                    <div class="duration">
                      <ion-icon name="time"></ion-icon>
                      <span>2h 11m</span>
                    </div>
  
                    <div class="quality"> 
                      <ion-icon></ion-icon> 
                      <span class="span-quality">4K</span> 
                    </div>
                </div>

                <h3>Jurassic World</h3>
                <p>Fallen Kingdom.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/images/spiderman-1087-347.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">

                <div class="card-info" >

                    <div class="genre">
                      <ion-icon name="film"></ion-icon>
                      <span>Action/Thriller</span>
                    </div>
  
                    <div class="year">
                      <ion-icon name="calendar"></ion-icon>
                      <span>2019</span>
                    </div>
  
                    <div class="duration">
                      <ion-icon name="time"></ion-icon>
                      <span>2h 11m</span>
                    </div>
  
                    <div class="quality"> 
                      <ion-icon></ion-icon> 
                      <span class="span-quality">4K</span> 
                    </div>
                </div>
                
                <h3>Spiderman</h3>
                <p>Home Coming</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>






      <!--
        - #MOVIES SECTION
      -->
      <section class="movies">

        <!--
          - filter bar
        -->
        <div class="filter-bar">

          <div class="filter-dropdowns">

            <form action="{{ route('search_by_genres') }}" method="GET">
              <select id="categorySelect" name="genre" class="genre">
                  <option value="all genres">All genres</option>
                  @forelse ($category_masters as $cm)
                      <option value="{{ $cm->category_master_id }}" name="{{ $cm->category_master_id }}">{{ $cm->name }}</option>
                  @empty
                      <option value="action">No categories found</option> @endforelse
              </select>
              <button type="submit">Search</button>
            </form>

            <select name="year" class="year">
              <option value="all years">All the years</option>
              <option value="2022">2022</option>
              <option value="2020-2021">2020-2021</option>
              <option value="2010-2019">2010-2019</option>
              <option value="2000-2009">2000-2009</option>
              <option value="1980-1999">1980-1999</option>
            </select>

          </div>

          <div class="filter-radios">

            <input type="radio" name="grade" id="featured" checked>
            <label for="featured">Featured</label>

            <input type="radio" name="grade" id="popular">
            <label for="popular">Popular</label>

            <input type="radio" name="grade" id="newest">
            <label for="newest">Newest</label>

            <div class="checked-radio-bg"></div>

          </div>

        </div>


        <!--
          - movies grid
        -->

        <div class="movies-grid">


         @forelse ($products as $product)
            <div class="movie-card">

            <div class="card-head">
                <img src="{{ asset('assets/images/movies/' . ($product->image_banner ? $product->image_banner : 'empty-banner.png')) }}" alt="" class="card-img">

                <div class="card-overlay">

                <div class="bookmark">
                    <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                    <ion-icon name="star-outline"></ion-icon>
                    <span>6.4</span>
                </div>

                <div class="play">
                    <ion-icon name="play-circle-outline"></ion-icon>
                </div>

                </div>
            </div>

            <div class="card-body">
                
                <h3 class="card-title">{{ $product->name; }}</h3>
                


                <div class="live-badge-banner"  style="display:flex">
                    
                        
                    @php
                        $categoryIds = explode(',', trim(str_replace("'", "", $product->category_master_id)));
                        $categories = \App\Models\MasterData\CategoryMaster::whereIn('category_master_id', $categoryIds)->get();

                        // Access and display category names:
                        foreach ($categories as $category) {
                            echo '<p >'.$category->name.'</p>';
                        }
                    @endphp
                    
                      
                </div>

                <div class="card-info">
                <span class="genre">Action/Comedy</span>
                <span class="year">{{ $product->time_production }}</span>
                </div>
            </div>

            </div>
         @empty
             <p>Empty Movie</p>
         @endforelse

        </div>

        <!--
          - load more button
        -->
        <button class="load-more">LOAD MORE</button>

      </section>





      <!--
        - #CATEGORY SECTION
      -->
      <section class="category" id="category">

        <h2 class="section-heading">Category</h2>

        <div class="category-grid">

          <div class="category-card">
            <img src="{{ asset('')}}assets/images/action.jpg" alt="" class="card-img">
            <div class="name">Action</div>
            <div class="total">100</div>
          </div>

          <div class="category-card">
            <img src="{{ asset('')}}assets/images/comedy.jpg" alt="" class="card-img">
            <div class="name">Comedy</div>
            <div class="total">50</div>
          </div>

          <div class="category-card">
            <img src="{{ asset('')}}assets/images/thriller.webp" alt="" class="card-img">
            <div class="name">Thriller</div>
            <div class="total">20</div>
          </div>

          <div class="category-card">
            <img src="{{ asset('')}}assets/images/horror.jpg" alt="" class="card-img">
            <div class="name">Horror</div>
            <div class="total">80</div>
          </div>

          <div class="category-card">
            <img src="{{ asset('')}}assets/images/adventure.jpg" alt="" class="card-img">
            <div class="name">Adventure</div>
            <div class="total">100</div>
          </div>

          <div class="category-card">
            <img src="{{ asset('')}}assets/images/animated.jpg" alt="" class="card-img">
            <div class="name">Animated</div>
            <div class="total">50</div>
          </div>

          <div class="category-card">
            <img src="{{ asset('')}}assets/images/crime.jpg" alt="" class="card-img">
            <div class="name">Crime</div>
            <div class="total">20</div>
          </div>

          <div class="category-card">
            <img src="{{ asset('')}}assets/images/sci-fi.jpg" alt="" class="card-img">
            <div class="name">SCI-FI</div>
            <div class="total">80</div>
          </div>

        </div>

      </section>





      <!--
        - #LIVE SECTION
      -->
      <section class="live" id="live">

        <h2 class="section-heading">Live Tv Shows</h2>

        <div class="live-grid">

          <div class="live-card">

            <div class="card-head">
              <img src="{{ asset('')}}assets/images/planet.jpg" alt="" class="card-img">
              <div class="live-badge">LIVE</div>
              <div class="total-viewers">305K viewers</div>
              <div class="play">
                <ion-icon name="play-circle-outline"></ion-icon>
              </div>
            </div>

            <div class="card-body">
              <img src="{{ asset('')}}assets/images/bbcamerica.jpg" alt="" class="avatar">
              <h3 class="card-title">Planet Earth II <br> Season 1 - Islands</h3>
            </div>

          </div>

          <div class="live-card">

            <div class="card-head">
              <img src="{{ asset('')}}assets/images/got.jpg" alt="" class="card-img">
              <div class="live-badge">LIVE</div>
              <div class="total-viewers">1.7M viewers</div>
              <div class="play">
                <ion-icon name="play-circle-outline"></ion-icon>
              </div>
            </div>

            <div class="card-body">
              <img src="{{ asset('')}}assets/images/HBO-Logo-square.jpg" alt="" class="avatar">
              <h3 class="card-title">Game of Thrones <br> Season 5 - Mother's Mercy</h3>
            </div>

          </div>

          <div class="live-card">

            <div class="card-head">
              <img src="{{ asset('')}}assets/images/vikins.jpg" alt="" class="card-img">
              <div class="live-badge">LIVE</div>
              <div class="total-viewers">468K viewers</div>
              <div class="play">
                <ion-icon name="play-circle-outline"></ion-icon>
              </div>
            </div>

            <div class="card-body">
              <img src="{{ asset('')}}assets/images/HBO-Logo-square.jpg" alt="" class="avatar">
              <h3 class="card-title">Vikings <br> Season 4 - What Might Have Been</h3>
            </div>

          </div>

        </div>

      </section>

    </main>





    <!--
      - FOOTER SECTION
    -->
    <footer>

      <div class="footer-content">

        <div class="footer-brand">
          <img src="{{ asset('')}}assets/images/logo.png" alt="" class="footer-logo">
          <p class="slogan">Movies & TV Shows, Online cinema,
            Movie database HTML Template.</p>


          <div class="social-link">

            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-tiktok"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>

          </div>
        </div>


        <div class="footer-links">
          <ul>

            <h4 class="link-heading">CineFlix</h4>

            <li class="link-item"><a href="#">About us</a></li>
            <li class="link-item"><a href="#">My profile</a></li>
            <li class="link-item"><a href="#">Pricing plans</a></li>
            <li class="link-item"><a href="#">Contacts</a></li>

          </ul>

          <ul>

            <h4 class="link-heading">Browse</h4>

            <li class="link-item"><a href="#">Live Tv</a></li>
            <li class="link-item"><a href="#">Live News</a></li>
            <li class="link-item"><a href="#">Live Sports</a></li>
            <li class="link-item"><a href="#">Streaming Library</a></li>

          </ul>

          <ul>

            <li class="link-item"><a href="#">TV Shows</a></li>
            <li class="link-item"><a href="#">Movies</a></li>
            <li class="link-item"><a href="#">Kids</a></li>
            <li class="link-item"><a href="#">Collections</a></li>

          </ul>

          <ul>

            <h4 class="link-heading">Help</h4>
            <li class="link-item"><a href="#">Account & Billing</a></li>
            <li class="link-item"><a href="#">Plans & Pricing</a></li>
            <li class="link-item"><a href="#">Supported devices</a></li>
            <li class="link-item"><a href="#">Accessibility</a></li>

          </ul>
        </div>

      </div>

      <div class="footer-copyright">

        <div class="copyright">
          <p>&copy; 2024 Sulaslan Setiawan</p>
        </div>

        <div class="wrapper">
          <a href="#">Privacy policy</a>
          <a href="#">Terms and conditions</a>
        </div>

      </div>

    </footer>

  </div>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
      $(document).ready(function () {
          // On change of the category select

  
      });
  </script>
  
  <!--
    - custom js link
  -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>