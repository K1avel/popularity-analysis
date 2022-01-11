<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />

  <link href="lucrare.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;500&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat+Alternates:wght@100;500&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/2362d84dc0.js" crossorigin="anonymous"></script>


</head>

<body>
  <!--View form-->
  <div id="mask">
    <div class="center">
      <div class="container_1" id="cont">
        <label for="show" class="close-btn fas fa-times" title="close" onclick="loginStart()"></label>
        <div class="text">
          Login Form
        </div>
        <form action="viewform.php" method="post">
          <div class="data">
            <label>username</label>
            <input type="text" required name="username">
          </div>
          <div class="data">
            <label>Password</label>
            <input type="password" required name="password">
          </div>
          <div class="btn">
            <div class="inner"></div>
            <button type="submit">login</button>
          </div>
          <div class="signup-link">
            Not a member? <a href="#">Signup now</a>
          </div>
        </form>
      </div>
    </div>
  </div>



  <header class="header">
    <div class="container">
      <div class="header_inner">
        <div class="header_logo">Industry Star</div>


        <nav class="nav">
          <a class="nav__link" href="#about">About</a>
          <a class="nav__link" href="#about">Service</a>
          <a class="nav__link" href="display.php">Crud</a>
          <a class="nav__link" href="#about">Work</a>
          <a class="nav__link" href="https://www.google.com/intl/ro/gmail/about/" target="_blank">Contact</a>
          <a class="nav__link" href="#" onclick="loginStart()">View Form</a>
        </nav>
      </div>
    </div>


  </header>

  <div class="intro">
    <div class="container">
      <div class="intro_inner"></div>
      <h2 class="intro_suptitle">Best artist</h2>
      <h1 class="intro_title">
        Welcome <br />to<br />
        Industry Star
      </h1>
      <a class="btn" href="#about">Learn More</a>

    </div>
  </div>


  <section class="section">
    <div class="container">
      <div class="section_header">
        <h3 class="section_suptitle">What we do</h3>
       <p id="about">
        <h2 class="sectio_title">About Us</h2>
        <div class="section_text">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
            minima odio mollitia, error ratione eum amet officia hic aut modi
            quae, excepturi minus pariatur distinctio quam sunt, dicta
            reprehenderit. Voluptatem.
          </p>
        </div>
      </div>

      <div class="about">
        <div class="about_item">
          <div class="about_img">
          <a href="https://www.instagram.com/daniel_zb1_/"target="_blank">
            <img src="../site/images/template1.jpg" alt="" />
          </a>
          </div>

          <div class="about_text">
            <i class="fas fa-users"></i><br />Our team<br />
          </div>
        </div>

        <div class="about_item">
          <div class="about_img">
          <a href="https://twitter.com/"target="_blank">
            <img src="../site/images/template2.jpg" alt="" />
          </a>
          </div>
          <div class="about_text">
            <i class="fas fa-users"></i><br />Our team<br />

          </div>
        </div>

        <div class="about_item">
          <div class="about_img">
          <a href="https://discord.com/"target="_blank">
            <img src="../site/images/template3.jpg" alt="" />
          </a>
          </div>

          <div class="about_text">
            <i class="fas fa-users"></i><br />Our team<br />
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="statistic">
    <div class="container">
      <div class="stat">
        <div class="stat_item">
          <div class="stat_count">
            <!-- Connection -->
            <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "lucrare_an";
            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            $sql = "SELECT count(id_artist) AS total FROM name_artist";
            $result = mysqli_query($conn, $sql);
            $values = mysqli_fetch_assoc($result);
            $num_rows = $values['total'];
            echo $num_rows;
            ?>
          </div>
          <div class="stat_text">Artists</div>
        </div>

        <div class="stat_item">
          <div class="stat_count" id="count">0</div>
          <div class="stat_text">viwers</div>
        </div>

        <div class="stat_item">
          <div class="stat_count">
            <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "lucrare_an";
            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            $sql = "SELECT count(id) AS total FROM users";
            $result = mysqli_query($conn, $sql);
            $values = mysqli_fetch_assoc($result);
            $num_rows = $values['total'];
            echo $num_rows;
            ?>
          </div>
          <div class="stat_text">Subscriptions</div>
        </div>
      </div>
    </div>
  </div>


  </div>

  </div>
  <br>
  <br>
  <div id="blog">
    <div class="container">
      <div class="section_header">
        <h3 class="section_suptitle">What we do</h3>
        <h2 class="sectio_title">Artists</h2>
        <div class="section_text">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
            minima odio mollitia, error ratione eum amet officia hic aut modi
            quae, excepturi minus pariatur distinctio quam sunt, dicta
            reprehenderit. Voluptatem.
          </p>
        </div>
      </div>


      <div id="dimension">
        <div id="artists">

          <div class="card" style="width: 18rem;">
            <img src="images/Drake.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Drake</h5>
              <p class="card-text ">
                <!-- Connection -->
                <?php
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "lucrare_an";
                $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error()) {
                  die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
                } else {

                  $sql = "SELECT * FROM name_artist INNER JOIN 
                  artist_song ON artist_song.artist_id = name_artist.id_artist 
                  INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                  INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='DRAKE'";

                  $response = @mysqli_query($conn, $sql);
                  if ($response) {
                    $data = mysqli_fetch_array($response);
                    // echo $descr["descr"];

                    echo "<br>Genre:";
                    echo $data["genre_name"];
                    echo "<br>Song:";
                    echo $data["name_song"];
                    echo "<br>Streams:";
                    echo $data["streams_count"];
                  }
                }
                ?>

              </p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="images/taylorswift.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Taylor Swift</h5>
              <p class="card-text ">
                <?php
                $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error()) {
                  die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
                } else {
                  $sql = "SELECT * FROM name_artist INNER JOIN 
                  artist_song ON artist_song.artist_id = name_artist.id_artist 
                  INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                  INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='Taylor Swift'";

                  $response = @mysqli_query($conn, $sql);
                  if ($response) {
                    $data = mysqli_fetch_array($response);
                    // echo $descr["descr"];

                    echo "<br>Genre:";
                    echo $data["genre_name"];
                    echo "<br>Song:";
                    echo $data["name_song"];
                    echo "<br>Streams:";
                    echo $data["streams_count"];
                  }
                }
                ?>
              </p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="images/MorganWallen.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Morgan Wallen</h5>
              <p class="card-text ">
                <?php
                $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error()) {
                  die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
                } else {
                  $sql = "SELECT * FROM name_artist INNER JOIN 
                  artist_song ON artist_song.artist_id = name_artist.id_artist 
                  INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                  INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='Morgan Wallen'";

                  $response = @mysqli_query($conn, $sql);
                  if ($response) {
                    $data = mysqli_fetch_array($response);
                    // echo $descr["descr"];

                    echo "<br>Genre:";
                    echo $data["genre_name"];
                    echo "<br>Song:";
                    echo $data["name_song"];
                    echo "<br>Streams:";
                    echo $data["streams_count"];
                  }
                }
                ?>
              </p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>
        </div>
        <div id="artists">

          <div class="card" style="width: 18rem;">
            <img src="images/juicewrld.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Juice WRLD</h5>
              <p class="card-text "><?php
                                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                                    if (mysqli_connect_error()) {
                                      die('Connect Error (' . mysqli_connect_errno() . ') '
                                        . mysqli_connect_error());
                                    } else {
                                      $sql = "SELECT * FROM name_artist INNER JOIN 
                                      artist_song ON artist_song.artist_id = name_artist.id_artist 
                                      INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                                      INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='Juice WRLD'";
                                      $response = @mysqli_query($conn, $sql);
                                      if ($response) {
                                        $data = mysqli_fetch_array($response);


                                        echo "<br>Genre:";
                                        echo $data["genre_name"];
                                        echo "<br>Song:";
                                        echo $data["name_song"];
                                        echo "<br>Streams:";
                                        echo $data["streams_count"];
                                      }
                                    }
                                    ?></p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="images/Rod_Wave.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> ROD WAVE </h5>
              <p class="card-text "><?php
                                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                                    if (mysqli_connect_error()) {
                                      die('Connect Error (' . mysqli_connect_errno() . ') '
                                        . mysqli_connect_error());
                                    } else {
                                      $sql = "SELECT * FROM name_artist INNER JOIN 
                                      artist_song ON artist_song.artist_id = name_artist.id_artist 
                                      INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                                      INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='ROD WAVE'";
                                      $response = @mysqli_query($conn, $sql);
                                      if ($response) {
                                        $data = mysqli_fetch_array($response);


                                        echo "<br>Genre:";
                                        echo $data["genre_name"];
                                        echo "<br>Song:";
                                        echo $data["name_song"];
                                        echo "<br>Streams:";
                                        echo $data["streams_count"];
                                      }
                                    }
                                    ?></p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="images/PopSmoke.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">POP SMOKE</h5>
              <p class="card-text "><?php
                                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                                    if (mysqli_connect_error()) {
                                      die('Connect Error (' . mysqli_connect_errno() . ') '
                                        . mysqli_connect_error());
                                    } else {
                                      $sql = "SELECT * FROM name_artist INNER JOIN 
                                      artist_song ON artist_song.artist_id = name_artist.id_artist 
                                      INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                                      INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='POP SMOKE'";
                                      $response = @mysqli_query($conn, $sql);
                                      if ($response) {
                                        $data = mysqli_fetch_array($response);


                                        echo "<br>Genre:";
                                        echo $data["genre_name"];
                                        echo "<br>Song:";
                                        echo $data["name_song"];
                                        echo "<br>Streams:";
                                        echo $data["streams_count"];
                                      }
                                    }
                                    ?></p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>
        </div>
        <div id="artists">

          <div class="card" style="width: 18rem;">
            <img src="images/Polo-G.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">POLO G</h5>
              <p class="card-text "><?php
                                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                                    if (mysqli_connect_error()) {
                                      die('Connect Error (' . mysqli_connect_errno() . ') '
                                        . mysqli_connect_error());
                                    } else {
                                      $sql = "SELECT * FROM name_artist INNER JOIN 
                                      artist_song ON artist_song.artist_id = name_artist.id_artist 
                                      INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                                      INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='POLO G'";
                                      $response = @mysqli_query($conn, $sql);
                                      if ($response) {
                                        $data = mysqli_fetch_array($response);


                                        echo "<br>Genre:";
                                        echo $data["genre_name"];
                                        echo "<br>Song:";
                                        echo $data["name_song"];
                                        echo "<br>Streams:";
                                        echo $data["streams_count"];
                                      }
                                    }
                                    ?></p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="images/lilbaby.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">LIL BABY</h5>
              <p class="card-text "><?php
                                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                                    if (mysqli_connect_error()) {
                                      die('Connect Error (' . mysqli_connect_errno() . ') '
                                        . mysqli_connect_error());
                                    } else {
                                      $sql = "SELECT * FROM name_artist INNER JOIN 
                                      artist_song ON artist_song.artist_id = name_artist.id_artist 
                                      INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                                      INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='LIL BABY'";
                                      $response = @mysqli_query($conn, $sql);
                                      if ($response) {
                                        $data = mysqli_fetch_array($response);


                                        echo "<br>Genre:";
                                        echo $data["genre_name"];
                                        echo "<br>Song:";
                                        echo $data["name_song"];
                                        echo "<br>Streams:";
                                        echo $data["streams_count"];
                                      }
                                    }
                                    ?></p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="images/eminem.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">EMINEM</h5>
              <p class="card-text ">
                <?php
                $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                if (mysqli_connect_error()) {
                  die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
                } else {
                  $sql = "SELECT * FROM name_artist INNER JOIN 
                  artist_song ON artist_song.artist_id = name_artist.id_artist 
                  INNER JOIN genres ON genres.id_genre = artist_song.genre_id 
                  INNER JOIN streams on streams.id_streams=name_artist.id_artist where name='EMINEM'";
                  $response = @mysqli_query($conn, $sql);
                  if ($response) {
                    $data = mysqli_fetch_array($response);


                    echo "<br>Genre:";
                    echo $data["genre_name"];
                    echo "<br>Song:";
                    echo $data["name_song"];
                    echo "<br>Streams:";
                    echo $data["streams_count"];
                  }
                }
                ?></p>
              <a href="#" class="btn btn-primary">Additional Info</a>
            </div>
          </div>
        </div>




      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="lucrare.js"></script>
    <script src="vcount.js"></script>
    <script src="control.js"></script>
</body>

</html>