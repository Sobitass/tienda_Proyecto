<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="/CSS/style_profile.css">
</head>
<body>

    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                       <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                 </ul>
              </div>
           </nav>
        </div>
     </div>
     <!--header section end -->

    <div class="profile-container">
        <h1>Edit Profile</h1>
        <section id="profile" class="section glass-section2">
            
        <div class="profile-header">
            
        </div>
        <form class="profile-form" action="update_profile.php" method="POST">
            <div class="content">
                <div class="profile">   
                    <img src="/images/user_avatar.png" alt="Profile Picture" class="profile">
                    <div class="profile-links"> 
                    </div>
                    <div class=" container">
                    <a href="index.php" id="home"><h2>Home</h2></a>
                        <a href="contact.php"><h2>Chats</h2></a>
                        <a href="cotizar.php"><h2>Cotizacion</h2></a>
                    </div>

                    </div>
                <div class="profile-details">
                    <div class="profile-section">
                        
                        <br>
                        <br>
                        <br>

                        <h2>About</h2>

                            
                        
                        <div class="glass-section2">
                            <label for="full-name">Full name:</label>
                            <input type="text" id="full-name" name="full-name" value="Sebas Solis">
                        </div>
                        <div class="text">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="abc@gmail.com">
                        </div>
                        <div class="text">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" value="585-679-52356">
                        </div>
                        <div class="text">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" value="Street No. 2, 25674">
                        </div>
                    </div>
                    <div class="text">
                        <h2>Recent Purchases</h2>
                        <div class="text">
                           <ul>
                            <li>Unos tazos de sabritas nms jajs</li>
                            <li>Secadora</li>
                            <li>Nada mas</li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>





            <a href="index.php">
            <button type="submit">Save Changes</button>
            </a>
        </form>

        
    </section>
    </div>
</body>
</html>
