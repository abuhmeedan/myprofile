<?php
$dateOfBirth = "Aug 18, 1991";
$timeZone  = new DateTimeZone('Asia/Amman');
$age = DateTime::createFromFormat('M d, Y', $dateOfBirth, $timeZone)
     ->diff(new DateTime('now', $timeZone))
     ->y;
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Waleed Résumé</title>
  <meta name="description" content="Waleed Abu Hmeedan CV"
  />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/aos.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="styles/main.css" rel="stylesheet">
</head>

<body id="top">
  <header>
    <div class="profile-page sidebar-collapse">
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="#" rel="tooltip">Waleed Résumé</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link smooth-scroll" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link smooth-scroll" href="#skill">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link smooth-scroll" href="#experience">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link smooth-scroll" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="page-content">
    <div>
      <div class="profile-page">
        <div class="wrapper">
          <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
            <div class="container">
              <div class="content-center">
                <div class="cc-profile-image">
                  <a href="#">
                    <img src="images/waleed.jpg" alt="Image" />
                  </a>
                </div>
                <div class="h2 title">Waleed Abu Hmeedan</div>
                <p class="category text-white">Software Engineer, Web Developer</p>
                <a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Contact Me</a>
                <a class="btn btn-primary" href="/f/waleed.pdf" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
              </div>
            </div>
            <div class="section">
              <div class="container">
                <div class="button-container">
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.linkedin.com/in/abuhmeedan" rel="tooltip" title="Follow me on Linkedin">
                    <i class="fa fa-linkedin"></i>
                  </a>
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="https://fb.com/abuhmeedan" rel="tooltip" title="Follow me on Facebook">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="https://twitter.com/abuhmeedan" rel="tooltip" title="Follow me on Twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="https://plus.google.com/u/0/104441574654791815794" rel="tooltip"
                    title="Follow me on Google+">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="about">
        <div class="container">
          <div class="card" data-aos="fade-up" data-aos-offset="10">
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">About</div>
                  <p style="text-align: justify;">Hello! I'm Waleed, a <?php echo $age ?> Year old, Software Engineer, I have Good Experience in SDLC Analysis, Design, Implementation
                    and Testing.</p>
                  <p style="text-align: justify;">I'm seeking an opportunity to work in a dynamic company where can i prove and improve my professional qualities and abilities.
                    My great willingness to join a leading company where i expect to find a professional and challenging
                    environment.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">Basic Information</div>
                  <div class="row">
                    <div class="col-sm-4">
                      <strong class="text-uppercase">Date Of Birth:</strong>
                    </div>
                    <div class="col-sm-8"><?php echo $dateOfBirth ?></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4">
                      <strong class="text-uppercase">Email:</strong>
                    </div>
                    <div class="col-sm-8">abuhmeedan@gmail.com</div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4">
                      <strong class="text-uppercase">Phone:</strong>
                    </div>
                    <div class="col-sm-8">+962 7 8731 5013</div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4">
                      <strong class="text-uppercase">Address:</strong>
                    </div>
                    <div class="col-sm-8">Ain Al Basha, Amman, Jordan</div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4">
                      <strong class="text-uppercase">Language:</strong>
                    </div>
                    <div class="col-sm-8">English, Arabic, Italian</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="skill">
        <div class="container">
          <div class="h4 text-center mb-4 title">Professional Skills</div>
          <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary">
                    <span class="progress-badge">Object-Oriented Programming (OOP)</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      <span class="progress-value">90%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary">
                    <span class="progress-badge">JavaScript</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                      <span class="progress-value">85%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary">
                    <span class="progress-badge">PHP</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      <span class="progress-value">90%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary">
                    <span class="progress-badge">Angular</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                      <span class="progress-value">65%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary">
                    <span class="progress-badge">PostgreSQL</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                      <span class="progress-value">90%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary">
                    <span class="progress-badge">HTML5</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                      <span class="progress-value">95%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary">
                    <span class="progress-badge">Redis</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                      <span class="progress-value">80%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary">
                    <span class="progress-badge">CSS</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                      <span class="progress-value">85%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="h4 text-center mb-4 title">Portfolio</div>
              <div class="nav-align-center">
                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist">
                      <i class="fa fa-laptop" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist">
                      <i class="fa fa-picture-o" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#Photography" role="tablist">
                      <i class="fa fa-camera" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-content gallery mt-5">
            <div class="tab-pane active" id="web-development">
              <div class="ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#web-development">
                        <figure class="cc-effect">
                          <img src="images/project-1.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Recent Project</div>
                            <p>Web Development</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#web-development">
                        <figure class="cc-effect">
                          <img src="images/project-2.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Startup Project</div>
                            <p>Web Development</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#web-development">
                        <figure class="cc-effect">
                          <img src="images/project-3.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Food Order Project</div>
                            <p>Web Development</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#web-development">
                        <figure class="cc-effect">
                          <img src="images/project-4.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Web Advertising Project</div>
                            <p>Web Development</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="graphic-design" role="tabpanel">
              <div class="ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#graphic-design">
                        <figure class="cc-effect">
                          <img src="images/graphic-design-1.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Triangle Pattern</div>
                            <p>Graphic Design</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#graphic-design">
                        <figure class="cc-effect">
                          <img src="images/graphic-design-2.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Abstract Umbrella</div>
                            <p>Graphic Design</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#graphic-design">
                        <figure class="cc-effect">
                          <img src="images/graphic-design-3.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Cube Surface Texture</div>
                            <p>Graphic Design</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#graphic-design">
                        <figure class="cc-effect">
                          <img src="images/graphic-design-4.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Abstract Line</div>
                            <p>Graphic Design</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="Photography" role="tabpanel">
              <div class="ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#Photography">
                        <figure class="cc-effect">
                          <img src="images/photography-1.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Photoshoot</div>
                            <p>Photography</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#Photography">
                        <figure class="cc-effect">
                          <img src="images/photography-3.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Wedding Photoshoot</div>
                            <p>Photography</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#Photography">
                        <figure class="cc-effect">
                          <img src="images/photography-2.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Beach Photoshoot</div>
                            <p>Photography</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                    <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                      <a href="#Photography">
                        <figure class="cc-effect">
                          <img src="images/photography-4.jpg" alt="Image" />
                          <figcaption>
                            <div class="h4">Nature Photoshoot</div>
                            <p>Photography</p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="experience">
        <div class="container cc-experience">
          <div class="h4 text-center mb-4 title">Work Experience</div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p>December 2016 - Present</p>
                  <div class="h5">Bayt.com</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Software Engineer</div>
                  <p style="text-align: justify;">Responsible for the complete Software Development Life Cycle of a new or modified Software Product, from research and design
                    to implementation, testing and support.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p>April 2014 - August 2016</p>
                  <div class="h5">Frelancer.com</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Web Developer</div>
                  <p style="text-align: justify;">Write well designed, efficient, readable and testable code by using best software development practices. Creating websites
                    user interface (client side) using HTML/CSS/Javascript and server side using PHP/Mysql/Redis best practices.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container cc-education">
          <div class="h4 text-center mb-4 title">Education</div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>2012 - 2016</p>
                  <div class="h5">Bachelor's Degree</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Bachelor of Software Engineering</div>
                  <p class="category">Philadelphia University</p>
                  <p style="text-align: justify;">Software engineering is an engineering branch associated with development of software product using well-defined
                    scientific principles, methods and procedures. The outcome of software engineering is an efficient and
                    reliable software product.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="contact">
        <div class="cc-contact-information" style="background-image: url('images/staticmap.png');">
          <div class="container">
            <div class="cc-contact">
              <form action="waleedForm.php" method="post">
                <div class="row">
                  <div class="col-md-9">
                    <div class="card mb-0" data-aos="zoom-in">
                      <div class="h4 text-center title">Contact Me</div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card-body">
                            <div class="p pb-3">
                              <strong>Feel free to contact me </strong>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class="fa fa-user-circle"></i>
                                  </span>
                                  <input class="form-control" type="text" name="name" placeholder="Name" required="required" />
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class="fa fa-file-text"></i>
                                  </span>
                                  <input class="form-control" type="text" name="subject" placeholder="Subject" required="required" />
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                  </span>
                                  <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required" />
                                </div>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <div class="col">
                                <div class="form-group">
                                  <textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col" id="a" data-toggle="tooltip" title="Confirm you are not Robot!">
                                <button class="btn btn-primary" id="submit" type="submit" disabled="disabled">Send</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <p class="mb-0">
                              <strong>Address </strong>
                            </p>
                            <p class="pb-2">Ain Al Basha, Amman, Jordan</p>
                            <p class="mb-0">
                              <strong>Phone</strong>
                            </p>
                            <p class="pb-2">+962 7 8731 5013</p>
                            <p class="mb-0">
                              <strong>Email</strong>
                            </p>
                            <p>abuhmeedan@gmail.com</p>
                            <div class="g-recaptcha" style="position: fixed;bottom: 85px; transform:scale(0.9);transform-origin:0;-webkit-transform:scale(0.9);
  transform:scale(0.9);-webkit-transform-origin:0 0;transform-origin:0 0;" data-callback="checked" data-sitekey="6Leo1VYUAAAAAGPdBDvDTWZFpp8MWAi05mJ-1IoU"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container text-center">
      <a class="cc-linkedin btn btn-link" href="https://www.linkedin.com/in/abuhmeedan">
        <i class="fa fa-linkedin fa-2x " aria-hidden="true"></i>
      </a>
      <a class="cc-facebook btn btn-link" href="https://fb.com/abuhmeedan">
        <i class="fa fa-facebook fa-2x " aria-hidden="true"></i>
      </a>
      <a class="cc-twitter btn btn-link " href="https://twitter.com/abuhmeedan">
        <i class="fa fa-twitter fa-2x " aria-hidden="true"></i>
      </a>
      <a class="cc-google-plus btn btn-link" href="#">
        <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
      </a>
    </div>
  </footer>
  <script src="js/core/jquery.3.2.1.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/now-ui-kit.js?v=1.1.0"></script>
  <script src="js/aos.js"></script>
  <script src="scripts/main.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>function checked() {$("#submit, #a").removeAttr('disabled data-original-title');};</script>
</body>

</html>