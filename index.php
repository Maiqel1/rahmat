
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-light">
  
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-inverse navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand img-fluid" href="#"
            ><img src="img/download.jpg" alt="" width="80px"
          /></a>
          <button
            class="navbar-toggler bg-light"
            style="opacity: 0.3;"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-lg-5 ps-lg-5">
              <li class="nav-item">
                Home
              </li>
              &nbsp; &nbsp; &nbsp;
              <li class="ms-lg-5 nav-item">
                Register
              </li>
              &nbsp; &nbsp; &nbsp;
              <li class="ms-lg-5 nav-item">
                About
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="header-text">
        <h1 class="text-left">
         Book a counselling appointment <br />
          with the University counselling <br> 
          service
        </h1>
        <br />
        <h5>How to get counselling support if you a student or member of staff.</h5>
      </section>
    </header>
    <br /><br /><br />
    <br /><br /><br />

    
    <div class="container">
      <div class="row ms-5">
        <div class="col-md-9 mx-auto flex-end bg-light caro">
          <br /><br />
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="img/pexels-christina-morillo-1181712.jpg"
                  class="d-block w-100"
                  alt="..."
                  style="object-fit: contain; object-position:center center;"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="img/pexels-cottonbro-4101137.jpg"
                  class="d-block w-100"
                  alt="..."
                  style="object-fit: contain; object-position:center center;"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="img/pexels-mentatdgt-1311518.jpg"
                  class="d-block w-100"
                  alt="..."
                  style="object-fit: contain; object-position:center center;"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <br><br>
    </div>
    <br /><br />

    <br /><br />
    <br><br><br><br><br><br>
    <br><br><br>




    <div class="container bg-light">
      <div class="panel-body">
        <form action="connect.php" method="POST">
          <div class="form-group">
            <label for="staffOrStudent">Are you a staff or student?</label>
            <div>
              <label for="staff" class="radio-inline"
                ><input
                  type="radio"
                  name="staffOrStudent"
                  value="staff"
                  id="staff"
                />Staff</label
              >
              <label for="Student" class="radio-inline"
                ><input
                  type="radio"
                  name="staffOrStudent"
                  value="student"
                  id="student"
                />Student</label
              >
            </div>
          </div>
          <div class="form-group">
            <label for="studentOrStaffId">Student/Staff ID</label>
            <input
              type="text"
              class="form-control"
              id="studentOrStaffId"
              name="studentOrStaffId"
            />
          </div>
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input
              type="text"
              class="form-control"
              id="firstName"
              name="firstName"
            />
          </div>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input
              type="text"
              class="form-control"
              id="lastName"
              name="lastName"
            />
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <div>
              <label for="male" class="radio-inline"
                ><input
                  type="radio"
                  name="gender"
                  value="male"
                  id="male"
                />Male</label
              >
              <label for="female" class="radio-inline"
                ><input
                  type="radio"
                  name="gender"
                  value="female"
                  id="female"
                />Female</label
              >
            </div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="text"
              class="form-control"
              id="email"
              name="email"
            />
          </div>
          <div class="form-group">
            <label for="number">Phone Number</label>
            <input
              type="number"
              class="form-control"
              id="number"
              name="number"
            />
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input
              type="text"
              class="form-control"
              id="address"
              name="address"
            />
          </div>
          <div class="form-group">
            <label for="contact">How would you like us to contact you?</label>
            <div>
              <label for="chat" class="radio-inline"
                ><input
                  type="radio"
                  name="contact"
                  value="chat"
                  id="chat"
                />Chat/Instant Messaging</label
              >
              <label for="voice" class="radio-inline"
                ><input
                  type="radio"
                  name="contact"
                  value="voice"
                  id="voice"
                />Voice Chat</label
              >
              <label for="video" class="radio-inline"
                ><input
                  type="radio"
                  name="contact"
                  value="video"
                  id="video"
                />Video Chat</label
              >
            </div>
          </div>

          
          <input type="submit" class="btn btn-primary" />
        </form>
      </div>
    </div>

    
    <br><br><br>
      
    </div>

    <footer class="container-fluid bg-primary">
        <div class="row">
            <section class="col-md-7 ms-lg-3">
               <div class="row col">
                   <div class="space" style="margin-top: 70px;"></div>
                   <div class="col-md-3 ms-lg-3" style="width: 127px;">
                       <img src="img/img3.png" class="img-fluid" alt="">
                   </div>
                <p class="col-md-3 text-white">Become a Reseller</p>
                <p class="col-md-3 text-white ">Become an Investor</p>
                <p class="col-md-3 text-white">Developers</p>
               </div><br><br>
               <p class="ms-lg-3 text-white">Need Assistance?</p>
               <p class="ms-lg-3 text-white"> <i class="fa fa-envelope fa-1x"></i>Rechargecare@gmail.com</p>
               <br>

                <p class="text-white ms-lg-3">@2021Recharge!</p>
                <a href="" class="text-white ms-lg-3" style="text-decoration: none;">Terms and Conditions</a>
            </section>
            <section class="col-md-4 ms-lg-5 ps-lg-5 flex-end">
                <div class="space d-none d-lg-block d-xl-none" style="margin-top: 70px;"></div>
               <div class="row footerLinks mt-5">
                    <i class="fa fa-twitter d-inline fa-3x col-1 text-white w-30  ms-5"></i>
                    <i class="fa fa-instagram fa-3x d-inline col-1 text-white ms-5 ps-5"></i>
                    <i class="fa fa-facebook fa-3x d-inline col-1 text-white  ms-5 ps-5"></i>
               </div><br>
               <p class="ms-5 text-white"> <i class="fa fa-phone fa-1x"></i> 08080808080</p>
               <p class="ms-5 text-white"> <i class="fa fa-whatsapp fa-1x"></i> 08080808080</p>
               <p class="ms-5 text-white"><i class="fa fa-envelope fa-1x"></i> Rechargecare@gmail.com</p>
            </section>
        </div>
    </footer>


        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

