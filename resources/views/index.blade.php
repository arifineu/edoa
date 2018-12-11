<!DOCTYPE html>
<html>
  <head>
    <title>E-Doa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    @include('partials.head')
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body onload="startTime()">
    <!-- SECTION 1 -->
    <section class="hero is-fullheight" id="landing">
      <div class="hero-head">
        <header class="navbar is-fixed-top" id="navbar-padding">
          <div class="container">
            <div class="navbar-brand">
              <a class="navbar-item" href="#">
                <span class="title" id="title">E DO'A</span>
              </a>
              <span class="navbar-burger burger">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
            <div class="navbar-menu">
              <div class="navbar-end">
                <span class="navbar-item">
                  <a class="button is-link is-outlined" href="#doa">
                    <span class="icon">
                      <i class="fas fa-search"></i>
                    </span>
                    <span>Cari Doa</span>
                  </a>
                </span>
                <span class="navbar-item">
                  <a class="button is-link is-outlined" href="#hadits">
                    <span class="icon">
                      <i class="fas fa-search"></i>
                    </span>
                    <span>Cari Hadits</span>
                  </a>
                </span>
                <span class="navbar-item">
                  <a class="button is-link is-outlined" href="#jadwal-sholat">
                    <span class="icon">
                      <i class="fas fa-mosque"></i>
                    </span>
                    <span>Jadwal Sholat</span>
                  </a>
                </span>
                <span class="navbar-item">
                  <a class="button is-link is-outlined" href="#about">
                    <span class="icon">
                      <i class="fas fa-info"></i>
                    </span>
                    <span>Tentang</span>
                  </a>
                </span>
                <span class="navbar-item">
                  <a class="button is-link is-outlined" href="{{ route('dashboard') }}">
                    <span class="icon">
                      <i class="fas fa-sign-in-alt"></i>
                    </span>
                    <span>Login</span>
                  </a>
                </span>
              </div>
            </div>
            <script>
              $(document).ready(function() {
                $(".navbar-burger").click(function() {
                    $(".navbar-burger").toggleClass("is-active");
                    $(".navbar-menu").toggleClass("is-active");
                });
              });
              $(function () {
                $(document).scroll(function () {
                  var $nav = $(".is-fixed-top");
                  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
                });
              });
            </script>
          </div>
        </header>
      </div>

      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title is-1 is-spaced" id="link">E DO'A</h1>
          <h2 class="subtitle is-4" id="text-outline-link">Sebuah karya anak bangsa yang ditujukan agar lebih mudah mencari doa & hadits sesuai topik yang ingin dicari</h2>
        </div>
      </div>
    </section>
    <!-- END SECTION 1 -->
    <!-- SECTION 2 -->
    <section class="hero is-fullheight is-light is-bold" id="doa">
      <div class="hero-body">
        <div class="container">
          <center>
            <h3 class="title is-3">Cari Do'a</h3>
            <div class="tile is-ancestor">
              <div class="tile">
                <div class="tile is-parent">
                  <article class="tile is-child notification" style="background-color: #ffffff; border-radius: 10px">
                    <div class="field">
                      <p class="control has-icons-left">
                        <input class="input" type="text" placeholder="Cari Do'a atau topik..">
                        <span class="icon is-small is-left">
                          <i class="fas fa-search"></i>
                        </span>
                      </p>
                    </div>
                    <article class="media" style="max-height: 350px; overflow-y: scroll;">
                      <div class="media-content">
                        <article class="media">
                          <div class="media-content">
                            <div class="content">
                              <p>
                                <strong>Title</strong>
                                <br>
                                Subtitle
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </p>
                            </div>
                          </div>
                        </article>
                        <article class="media">
                          <div class="media-content">
                            <div class="content">
                              <p>
                                <strong>Title</strong>
                                <br>
                                Subtitle
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </p>
                            </div>
                          </div>
                        </article>
                        <article class="media">
                          <div class="media-content">
                            <div class="content">
                              <p>
                                <strong>Title</strong>
                                <br>
                                Subtitle
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </p>
                            </div>
                          </div>
                        </article>
                        <article class="media">
                          <div class="media-content">
                            <div class="content">
                              <p>
                                <strong>Title</strong>
                                <br>
                                Subtitle
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              </p>
                            </div>
                          </div>
                        </article>
                      </div>
                    </article>
                  </article>
                </div>
              </div>
            </div>
          </center>
        </div>
      </div>
    </section>
    <!-- END SECTION 2 -->
    <!-- SECTION 3 -->
    <section class="hero is-fullheight is-light" id="hadits">
      <div class="hero-body" id="hadits-body">
        <div class="container">
            <h3 class="title is-3">Cari Hadits</h3>
            <div class="tile is-ancestor">
                <div class="tile">
                    <div class="tile is-parent">
                        <article class="tile is-child notification" style="background-color: #ffffff; border-radius: 10px">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="text" placeholder="Cari Hadits atau topik..">
                                    <span class="icon is-small is-left">
                                      <i class="fas fa-search"></i>
                                    </span>
                                </p>
                            </div>
                            <article class="media" style="max-height: 350px; overflow-y: scroll;">
                                <div class="media-content">
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                    <strong>Title</strong>
                                                    <br>
                                                    Subtitle
                                                    <br>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                    <strong>Title</strong>
                                                    <br>
                                                    Subtitle
                                                    <br>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                    <strong>Title</strong>
                                                    <br>
                                                    Subtitle
                                                    <br>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                <p>
                                                    <strong>Title</strong>
                                                    <br>
                                                    Subtitle
                                                    <br>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </article>
                        </article>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- END SECTION 3 -->
    <!-- SECTION 4 -->
    <section class="hero is-fullheight is-light is-bold" id="jadwal-sholat">
      <div class="hero-body">
        <div class="container">
            <center>
              <h3 class="title is-3">Jadwal Sholat Surabaya</h3>
              <?php
                $api=array();
                $json=file_get_contents("https://time.siswadi.com/pray/Surabaya");
                $api=json_decode($json, true);
                // print_r($api);
                if(isset($api)) {
                $i=0;
                foreach($api as $data) {
                if($i++==1) break;
              ?>
              <table class="table is-hoverable" id="t-transparent">
                <thead>
                <tr>
                  <th>Kota</th>
                  <th>Subuh</th>
                  <th>Terbit</th>
                  <th>Dhuhur</th>
                  <th>Ashar</th>
                  <th>Maghrib</th>
                  <th>Isya</th>
                  <th>1/3 Malam</th>
                  <th>Tengah Malam</th>
                  <th>2/3 Malam</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th colspan="10">
                    <script>
                      function startTime() {
                        var today = new Date();
                        var h = today.getHours();
                        var m = today.getMinutes();
                        var s = today.getSeconds();
                        m = checkTime(m);
                        s = checkTime(s);
                        document.getElementById('txt').innerHTML =
                          h + " : " + m + " : " + s + "  WIB.";
                        var t = setTimeout(startTime, 500);
                      }
                      function checkTime(i) {
                        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                        return i;
                      }
                    </script>
                    <span id="txt"></span>
                    <span>
                        <script>
                          var now = new Date();
                          var days = new Array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
                          var months = new Array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                          var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
                          function fourdigits(number) {
                            return (number < 1000) ? number + 1900 : number;
                          }
                          today =  days[now.getDay()] + ", " +
                            date + " " +
                            months[now.getMonth()] + " " +
                            (fourdigits(now.getYear())) ;
                          document.write(today);
                        </script>
                      </span>
                  </th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                  <td><center>Surabaya</center></td>
                  <td><center><?php echo $data['Fajr']; ?></center></td>
                  <td><center><?php echo $data['Sunrise']; ?></center></td>
                  <td><center><?php echo $data['Dhuhr']; ?></center></td>
                  <td><center><?php echo $data['Asr']; ?></center></td>
                  <td><center><?php echo $data['Maghrib']; ?></center></td>
                  <td><center><?php echo $data['Isha']; ?></center></td>
                  <td><center><?php echo $data['SepertigaMalam']; ?></center></td>
                  <td><center><?php echo $data['TengahMalam']; ?></center></td>
                  <td><center><?php echo $data['DuapertigaMalam']; ?></center></td>
                </tr>
                </tbody>
              </table>
            </center>
            <?php
            }
            }
            ?>
        </div>
      </div>
    </section>
    <!-- END SECTION 4 -->
    <!-- SECTION 5 -->
    <section class="hero is-fullheight is-light" id="about">
      <div class="hero-body" id="about-body">
        <div class="container">
          <h3 class="title is-3">Tentang</h3>
          <br>
          <div class="tile is-ancestor">
            <div class="tile is-primary">
              <div class="tile is-parent">
                <article class="tile is-child notification" style="background-color: #ffffff; border-radius: 10px">
                  <h4 class="title is-4 has-text-centered">Kreator</h4>
                  <div class="columns">
                    <div class="column is-2">
                      <figure class="image is-square">
                        <img class="is-rounded" src="https://lh3.googleusercontent.com/zMDmvWlW1WZ7Zp0FjvOw_TNiZ2Hwpn6vEuuM7EVjxJArioDdOMv0KZ3fl-T-OgwS_4vzYdf6waiMwA=s529-rw-no">
                      </figure>
                    </div>
                    <div class="column is-10">
                      <h4 class="subtitle is-4">Hi, I'm Arifin Izzah. I'm a student in SMKN 1 Surabaya since 2016.</h4>
                      <p class="buttons is-centered">
                        <h4 class="subtitle is-4">Connect with me:</h4>
                        <a class="button is-large is-rounded is-light" title="Facebook" href="https://www.facebook.com/arifinizz">
                          <span class="icon is-small" style="color: #3b5998">
                            <i class="fab fa-facebook-f"></i>
                          </span>
                        </a>
                        <a class="button is-large is-rounded is-light" title="Google Plus" href="https://google.com/+arifinizzah">
                          <span class="icon is-small" style="color: #d34836">
                            <i class="fab fa-google-plus-g"></i>
                          </span>
                        </a>
                        <a class="button is-large is-rounded is-light" title="Twitter" href="https://twitter.com/arifinizzahm">
                          <span class="icon is-small" style="color: #1da1f2">
                            <i class="fab fa-twitter"></i>
                          </span>
                        </a>
                        <a class="button is-large is-rounded is-light" title="Instagram" href="https://instagram.com/ariifin_izz">
                          <span class="icon is-small instagram">
                            <i class="fab fa-instagram"></i>
                          </span>
                        </a>
                        <a class="button is-large is-rounded is-light" title="Telegram" href="https://t.me/arifin_izz">
                          <span class="icon is-small" style="color: #0088cc">
                            <i class="fab fa-telegram-plane"></i>
                          </span>
                        </a>
                        <a class="button is-large is-rounded is-light" title="Github" href="https://github.com/arifinizz">
                          <span class="icon is-small" style="color: #333">
                            <i class="fab fa-github"></i>
                          </span>
                        </a>
                        <a class="button is-large is-rounded is-light" title="Pinterest" href="https://pinterest.com/arifinizzah15/">
                          <span class="icon is-small" style="color: #bd081c">
                            <i class="fab fa-pinterest"></i>
                          </span>
                        </a>
                        <a class="button is-large is-rounded is-light" title="Spotify" href="https://open.spotify.com/user/21btdy2h7xp7qi7tvozrphvlq?si=ChQpjCfEQY29xg46sQ-bCA">
                          <span class="icon is-small" style="color: #1db954">
                            <i class="fab fa-spotify"></i>
                          </span>
                        </a>
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END SECTION 5 -->
    <!-- FOOTER -->
    <footer class="footer" id="footer">
      <div class="container">
        <div class="content has-text-centered has-text-white" id="footer-content">
          <p>
            Copyright
            <span class="icon has-text-info">
              <i class="far fa-copyright"></i>
            </span>
            2018
            <a class="has-text-info" href="#">E-DO'A</a>
            . Made with
            <span class="icon has-text-danger animated flash infinite faster">
              <i class="fas fa-heart"></i>
            </span>
            In Everywhere
          </p>
        </div>
      </div>
    </footer>
    <!-- END FOOTER -->

    <!-- SCROLL TO TOP ICON -->
    <a href="javascript:" id="return-to-top">
      <i class="fas fa-chevron-up"></i>
    </a>
    <!-- END SCROLL TO TOP ICON -->
    <script> // ===== scroll to top =====
      $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
      });
      $('#return-to-top').click(function() {
        $('body,html').animate({
            scrollTop : 0
        }, 500);
      });
    </script>
    <script> // ===== smooth scroll =====
      $(document).ready(function(){
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 1000, function(){
              window.location.hash = hash;
            });
          }
        });
      });
    </script>
  </body>
</html>
