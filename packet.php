<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
        <!-- Bootstrap CSS -->
    <link href="packettt.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">selamat datang admin |<b>Tabroni</b></a>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

          <div class="icon ml-4">
              <h5>
                <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
                <a href="index.php" class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></a>
              </h5>
          </div>
        </div>
      </nav>

      <div class="menu">
        <ul>
            <li>
                <a href="home.php">
                    <div class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="Home">Home</span></div>
                </a>
            </li>

            <li>
                <a href="about.php">
                    <div class="icon">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="Home">About</span></div>
                </a>
            </li>

            <li>
                <a href="packet.php">
                    <div class="icon">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <div class="name"><span data-text="Home">All Packets</span></div>
                </a>
            </li>

            <li>
                <a href="kontak.php">
                    <div class="icon">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                    </div>
                    <div class="name"> <span data-text="Home">Contact Us</span></div>
                </a>
            </li>
        </ul>
      </div>   

<br>
    <div class="slide">
        <ul>
            <li><a href="#"><</a></li>
            <li><a href="#". class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">></a></li>
        </ul>
    </div>

</body>
</html>