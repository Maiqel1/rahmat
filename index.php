
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
                <a href="#" style="text-decoration: none;" class="text-black">Home</a>
              </li>
              &nbsp; &nbsp; &nbsp;
              <li class="ms-lg-5 nav-item">
               <a href="#register" style="text-decoration: none;" class="text-black">Register</a>
              </li>
              &nbsp; &nbsp; &nbsp;
              <li class="ms-lg-5 nav-item">
                <a href="#about" style="text-decoration: none;" class="text-black">About</a>
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

    
    <div class="container col-md-8">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/pexels-christina-morillo-1181712.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/pexels-cottonbro-4101143.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/pexels-mentatdgt-1311518.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <br /><br />
  
    <div>
      <section class="text-center ">
        <h2>Get Counselling Today!</h3>
      </section>
    </div>
    <br><br><br>

    <section class="container text-center">
      <p >We at the guidance and counselling department are here to help you in anyway we can, guide you through the toughest of times, and ensure the stability of your mental well-being.<br> You can message your counsellor anytime, and you can also schedule a weekly phone, video, or live chat session with your counsellor. <br> Reach out to us today, via the form below</p>
    </section>
    <br><br><br>

    <div class="container bg-light" id="register">
      <div class="panel-body">
        <form action="connect.php" method="POST">
         <section class="text-center">
          <h3>Registration form</h3>
          <p>Please fill out this form appropriately</p>
         </section>
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
              > &nbsp; &nbsp; &nbsp;
              <label for="Student" class="radio-inline"
                ><input
                  type="radio"
                  name="staffOrStudent"
                  value="student"
                  id="student"
                />Student</label
              >
            </div><br>
          </div>
          <div class="form-group">
            <label for="studentOrStaffId">Student/Staff ID</label>
            <input
              type="text"
              class="form-control"
              id="studentOrStaffId"
              name="studentOrStaffId"
            />
          </div><br>
          <div class="form-group">
            <label for="firstName">First Name</label>
            <input
              type="text"
              class="form-control"
              id="firstName"
              name="firstName"
            />
          </div><br>
          <div class="form-group">
            <label for="lastName">Last Name</label>
            <input
              type="text"
              class="form-control"
              id="lastName"
              name="lastName"
            />
          </div><br>
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
              >  &nbsp; &nbsp; &nbsp;
              <label for="female" class="radio-inline"
                ><input
                  type="radio"
                  name="gender"
                  value="female"
                  id="female"
                />Female</label
              >
            </div>
          </div><br>
          <div class="form-group">
            <label for="counsellor">Would you like a male of female counsellor?</label>
            <div>
              <label for="male" class="radio-inline"
                ><input
                  type="radio"
                  name="counsellor"
                  value="male"
                  id="male"
                />Male</label
              >  &nbsp; &nbsp; &nbsp;
              <label for="female" class="radio-inline"
                ><input
                  type="radio"
                  name="counsellor"
                  value="female"
                  id="female"
                />Female</label
              >
            </div>
          </div><br>
          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="text"
              class="form-control"
              id="email"
              name="email"
            />
          </div><br>
          <div class="form-group">
            <label for="number">Phone Number</label>
            <input
              type="number"
              class="form-control"
              id="number"
              name="number"
            />
          </div><br>
          <div class="form-group">
            <label for="address">Address</label>
            <input
              type="text"
              class="form-control"
              id="address"
              name="address"
            />
          </div> <br>
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
              > &nbsp; &nbsp; &nbsp;
              <label for="voice" class="radio-inline"
                ><input
                  type="radio"
                  name="contact"
                  value="voice"
                  id="voice"
                />Voice Chat</label
              > &nbsp; &nbsp; &nbsp;
              <label for="video" class="radio-inline"
                ><input
                  type="radio"
                  name="contact"
                  value="video"
                  id="video"
                />Video Chat</label
              >
            </div><br>
          </div>

          
          <input type="submit" class="btn btn-primary" />
        </form>
      </div>
    </div>

    
    <br><br><br>
      
    </div>

    <footer class="container-fluid bg-primary" id="about">
        <div class="text-center"><br><br>
           <section>
             <h2 class="text-white">Project: Design and Implementation of an Online Guidance and counseling system: case study of Kwara State college of education, Ilorin.</h2>
             <h4 class="mt-3 text-white">Name: Opadiran Masudah Opeyemi </h4>
             <h4 class="mt-3 text-white">Matric Number: 17/52hl075</h4>
             <h4 class="mt-3 text-white">Supervisor: Mrs. Shakirat O. Sulyman- Haroon</h4>
             <h4  class="mt-3 text-white">Department of Information and Communication Science, university of Ilorin.</h4>
           </section>
        </div>
    </footer>


        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

