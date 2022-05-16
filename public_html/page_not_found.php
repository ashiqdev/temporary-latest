<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta name="description" content="temporary email service" />

    <!-- TODO favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon_io/site.webmanifest" crossorigin="use-credentials">

    <!-- fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700"
      rel="stylesheet"
    />

    <!-- icon -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <!-- BEGIN VENDOR CSS -->
    <link rel="stylesheet" href="/assets/css/vendors.css" />
    <!-- END VENDOR CSS -->

    <!-- BEGIN GLOBAL CSS -->
    <link rel="stylesheet" href="/assets/css/app.css" />
    <!-- END GLOBAL CSS -->

    <!-- BEGIN PAGE SPECIFIC CSS -->
    <link
      rel="stylesheet"
      href="/assets/css/core/menu/menu-types/vertical-menu.css"
    />

    <link
      rel="stylesheet"
      href="/assets/css/core/colors/palette-gradient.css"
    />
    <!-- END PAGE SPECIFIC CSS -->

    
    <link rel="stylesheet" href="/assets/css/plugins/animate/animate.min.css">
    
    <!-- BEGIN CUSTOM CSS [OPTIONAL] -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/error.css" />


    <!-- END CUSTOM CSS -->

    <title>404</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.2.2/sweetalert2.min.css"
      integrity="sha512-OkYLbkJ4DB7ewvcpNLF9DSFmhdmxFXQ1Cs+XyjMsMMC94LynFJaA9cPXOokugkmZo6O6lwZg+V5dwQMH4S5/3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body
    class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar"
    data-open="click"
    data-menu="vertical-menu"
    data-col="2-columns"
  >

  
    <!-- fixed-top-->

    <!--=========================-->
    <!--=        Navbar         =-->
    <!--=========================-->

    
      <?php
        require_once("../inc/navbar.php");   
      ?>

  <!--=========================-->
  <!--=       Sidebar        =-->
  <!--=========================-->
   <?php
   require_once("../inc/sidebar.php");
  ?>

    <div class="app-content content" style="">

    <!-- BEGIN ***404-SECTION*** -->
    <section class="error-section">
        <div class="content-wrapper" style="text-align: center">
          <!-- we will use this div if and only if email is empty -->
          <section
            class="easy_setup_area sec_pad"
            style="padding-bottom: 2.2rem"
          >
            <div class="container">
              <!--===========================-->
              <!--=       404       =-->
              <!--===========================-->

              <div>
                <!-- Error Page -->
                <div class="error">
                  <div class="container-floud">
                    <div class="col-xs-12 ground-color text-center">
                      <div class="container-error-404">
                        <div class="clip">
                          <div class="shadow">
                            <span class="digit thirdDigit"></span>
                          </div>
                        </div>
                        <div class="clip">
                          <div class="shadow">
                            <span class="digit secondDigit"></span>
                          </div>
                        </div>
                        <div class="clip">
                          <div class="shadow">
                            <span class="digit firstDigit"></span>
                          </div>
                        </div>
                        <!-- <div class="msg">OH!<span class="triangle"></span></div> -->
                      </div>
                      <h2 class="h1">Sorry! Page Not Found</h2>
                      <p
                        style="
                          font-size: 18px;
                          width: 80%;
                          text-align: center;
                          margin: 0 auto;
                          color: #71717a;
                        "
                      >
                        It seems as though we have run into an issue, please try
                        again later or head back to the homepage to start
                        creating temporary email addresses. You can also contact
                        us and we'll try to get back to you as soon as possible!
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Error Page -->
              </div>
            </div>
          </section>
        </div>
    </section>
      <!-- END***404-SECTION*** -->


      <!-- BEGIN ***INDEX-SECTION*** -->
      <section class="index easy_setup_area sec_pad index-section">
        <div class="content-wrapper" style="text-align: center" ;>
          <!-- we will use this div if and only if email is empty -->



          <div class="blob"  style="width: 300px; height: 224px; display: block; margin: 0 auto; position: relative;">
            <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
            <svg viewBox="0 0 500 800" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
              <defs>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                  <stop offset="0%" style="stop-color: rgb(131, 234, 241);"></stop>
                  <stop offset="100%" style="stop-color: rgb(99, 164, 255);"></stop>
                </linearGradient>
              </defs>
              <path fill="url(#gradient)">
                <animate 
                
                attributeName="d"
                dur="10000ms"
                repeatCount="indefinite"
                
                 values="M468,309Q455,368,403.5,397.5Q352,427,301,443.5Q250,460,189,460Q128,460,97.5,408Q67,356,48.5,303Q30,250,32,187.5Q34,125,90.5,98Q147,71,198.5,40.5Q250,10,309.5,27.5Q369,45,405.5,92Q442,139,461.5,194.5Q481,250,468,309Z;
                 
                 M468.5,304Q438,358,395.5,393.5Q353,429,301.5,452Q250,475,195,457.5Q140,440,100,400Q60,360,49.5,305Q39,250,42.5,191Q46,132,91.5,93.5Q137,55,193.5,32Q250,9,303,37.5Q356,66,410,96Q464,126,481.5,188Q499,250,468.5,304Z;

                 M478,312Q464,374,412.5,408.5Q361,443,305.5,454Q250,465,193.5,455Q137,445,103,399.5Q69,354,55,302Q41,250,48,193.5Q55,137,93.5,91.5Q132,46,191,40.5Q250,35,310.5,37.5Q371,40,414.5,85Q458,130,475,190Q492,250,478,312Z;

                 M456.5,300.5Q426,351,398.5,405Q371,459,310.5,458Q250,457,192.5,453Q135,449,101,402Q67,355,52.5,302.5Q38,250,36,187.5Q34,125,85.5,89.5Q137,54,193.5,43Q250,32,305.5,45Q361,58,396.5,101.5Q432,145,459.5,197.5Q487,250,456.5,300.5Z;

                 M469,306Q443,362,398.5,396Q354,430,302,440.5Q250,451,196.5,443.5Q143,436,106.5,395Q70,354,48,302Q26,250,30,188Q34,126,86,91Q138,56,194,37Q250,18,306.5,36.5Q363,55,398.5,99.5Q434,144,464.5,197Q495,250,469,306Z;

                 M468,309Q455,368,403.5,397.5Q352,427,301,443.5Q250,460,189,460Q128,460,97.5,408Q67,356,48.5,303Q30,250,32,187.5Q34,125,90.5,98Q147,71,198.5,40.5Q250,10,309.5,27.5Q369,45,405.5,92Q442,139,461.5,194.5Q481,250,468,309Z;




                 
                 ">

                </animate>
              </path>
            </svg>

            <div
            class="empty-mail-image-container"
            
           
          >
            <img
              src="/assets/images/empty-mail-2.svg"
              alt="empty email placeholder"
              class="empty-mail-image"
              style="width: 40%"
            />

         
          </div>

          </div>
          
          
          <h3 class="company-name">TemporaryMail</h3>
          <div class="company-desc col-lg-8 mx-auto ">
            <p class="mx-auto col-lg-12" style="line-height: 1.7;">
              If you are tired of receiving spam mail then this is a great tool as it quickly provides you with temporary and disposable email addresses. Simply copy your addresses or <a data-toggle="modal"
              data-target="#exampleModal2" href="">assign a new one</a> and you will instantly be able to start receiving email to your disposable inbox.
            </p>
          
      
          </div>

          <div style="margin-top: 150px">
            <img class="img-fluid" src="https://via.placeholder.com/728x90" alt="" />
          </div>
        </div>
      </section>
      <!-- END ***INDEX-SECTION*** -->
     

      <!-- BEGIN ***CONTACT-SECTION*** -->
      <section class="contact">
        <div class="content-wrapper" style="text-align: center">
          <!-- we will use this div if and only if email is empty -->
          <section
            class="easy_setup_area sec_pad"
            style="padding-bottom: 2.2rem"
          >
            <div class="container">
              <!--===========================-->
              <!--=         Contact         =-->
              <!--===========================-->

              <section class="contactus">
                <div class="container">
                  <div class="row">
                    <div
                      class="col-md-4 wow fadeInLeft"
                      data-wow-duration="0.8s"
                    >
                      <div class="contact-infos">
                        <div class="contact-info">
                          <h3 class="title">Contact Us</h3>
                          <p class="description">
                            If you have any questions or would like to come in
                            contact with us, then please don't hesitate to use
                            the contact form and we'll do our best to get back
                            to you as soon as possible!
                          </p>
                        </div>
                        <!-- /.contact-info -->

                        <div class="contact-info">
                          <h3 class="title">Say Hello</h3>
                          <p class="description">
                            Roslagsgatan 10 (Street, and number) 113 51
                            Stockholm (Postcode, and geographic location)
                          </p>

                          <div class="info">
                            <i class="ei ei-icon_mail_alt"></i>
                            <span>support@temporarymail.com</span>
                          </div>
                        </div>
                        <!-- /.contact-info -->
                      </div>
                      <!-- /.contact-infos -->
                    </div>
                    <!-- /.col-md-4 -->
                    <div
                      class="col-md-8 wow fadeInRight"
                      data-wow-duration="0.8s"
                    >
                      <div class="contact-froms">
                        <form
                          action="php/mailer.php"
                          class="contact-form"
                          data-pixsaas="contact-froms"
                        >
                          <div class="row">
                            <div class="col-md-6">
                              <input
                                type="text"
                                name="name"
                                placeholder="Name"
                                required
                              />
                            </div>

                            <div class="col-md-6">
                              <input
                                type="email"
                                name="email"
                                placeholder="Email"
                                required
                              />
                            </div>
                          </div>

                          <input
                            type="text"
                            name="subject"
                            placeholder="Subject"
                          />

                          <textarea
                            name="content"
                            placeholder="Your Comment"
                            required
                          ></textarea>

                          <button type="submit" class="pix-btn submit-btn">
                            <span class="btn-text">Send Your Message</span>
                            <i class="fa fa-paper-plane-o"></i>
                          </button>
                          <input
                            type="hidden"
                            name="recaptcha_response"
                            id="recaptchaResponse"
                          />

                          <div class="row">
                            <div class="form-result alert">
                              <div class="content"></div>
                            </div>
                          </div>
                        </form>
                        <!-- /.contact-froms -->
                      </div>
                      <!-- /.faq-froms -->
                    </div>
                    <!-- /.col-md-8 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container -->
              </section>
              <!-- /.contactus -->
            </div>
          </section>
        </div>
      </section>
      <!-- END***CONTACT-SECTION*** -->

      <!-- BEGIN ***BLOG-SECTION*** -->
      <section class="blog">
        <div class="content-wrapper">
          <!-- we will use this div if and only if email is empty -->
          <section class="easy_setup_area sec_pad-modifier">
            <div class="container">
              <!--===========================-->
              <!--=         BLOG      =-->
              <!--===========================-->

              <section class="">
                <div>
                  <div style="text-align: center">
                    <h3 style="font-size: 30px">Blog</h3>
                    <p style="font-size: 16px">
                      Read more about the latest changes and updates that have
                      been applied to the site. <br />
                      If you have any questions, then you may always
                      <a style="color: #1e88e5" class="contact-btn-blog"
                        >Contact us</a
                      >
                    </p>
                  </div>
                </div>
                <!-- /.container -->

                <section class="blog_area sec_pad-modifier">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <!-- 1st -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog1.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>14 <span>March</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-one-title"">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                One Year Active
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              TemporaryMail.com has now been active for over a
                              year! We hope that we have helped many users
                            </p>
                            <a
                              style="margin-left: 0px"
                              class="learn_btn_two read-more-one btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>

                        <!-- 2nd -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog2.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>10 <span>April</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-two-title">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                New features have been added
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              Recently a few changes have been made which now
                              allows you to view your recently used addresses in
                              the "Change Address" panel. This is useful if you
                              changed your temporary email address
                            </p>
                            <a
                              style="margin-left: 0"
                              class="learn_btn_two read-more-two btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>

                        <!-- 3rd -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog3.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>14 <span>July</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-three-title">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                Status page and stability
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              Due to the service incidents that have occurred
                              during the last couple of weeks, a status page has
                              been added. You may visit this page to check the
                              status of the services to make sure that the
                            </p>
                            <a
                              style="margin-left: 0"
                              class="learn_btn_two read-more-three btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>

                        <!-- 4th -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog4.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>10 <span>August</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-four-title">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                There has been more downtime
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              Unfortunately, there was recently a long downtime
                              due to a server being overloaded. It was solved
                              about an hour ago and we're looking into the
                              problem to avoid it from happening
                            </p>
                            <a
                              style="margin-left: 0px"
                              class="learn_btn_two read-more-four btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>

                        <!-- 5th -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog5.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>10 <span>August</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-five-title">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                Server issues and encoding improvements
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              The past 24 hours some users may have experienced
                              problems with emails not arriving in the inbox.
                              This was due to a server issue and has been
                              solved, we apologize about the downtime.
                            </p>
                            <a
                              style="margin-left: 0px"
                              class="learn_btn_two read-more-five btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>

                        <!-- 6th -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog6.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>10 <span>August</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-six-title">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                Security patches and additonal domains
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              There have been more restrictions applied to the
                              window that displays your emails to make it safer
                              for you to read without leaking any sensitive
                              data. You are now also able to choose between more
                            </p>
                            <a
                              style="margin-left: 0px"
                              class="learn_btn_two read-more-six btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>

                        <!-- 7th -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog7.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>10 <span>July</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-seven-title">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                TemporaryMail.com is in the BETA stage
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              The service is finally in the BETA testing stage.
                              Any feedback, bug report or suggestion would be
                              much appreciated and to send your message, please
                              use the contact form.
                            </p>
                            <a
                              style="margin-left: 0px"
                              class="learn_btn_two read-more-seven btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>

                        <!-- 8th -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog8.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>10 <span>April</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-eight-title">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                How secure are disposable email services?
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              In order to protect you from malicious contents
                              sent inside emails and to avoid having your
                              IP-address exposed or the fact that you have
                              opened and read an email - we will not load
                              third-party
                            </p>
                            <a
                              style="margin-left: 0px"
                              class="learn_btn_two read-more-eight btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>

                        <!-- 9th -->
                        <div class="blog_list_item mb_50">
                          <img
                            class="img-fluid blog-img"
                            src="/assets/images/blog-grid/blog9.jpg"
                            alt=""
                          />
                          <div class="blog_content">
                            <div class="post_date">
                              <h2>10 <span>March</span></h2>
                            </div>
                            <div class="entry_post_info">
                              By: <a href="#">Admin</a>

                              <a href="#">Temporary Mail</a>
                            </div>
                            <a class="blog-nine-title">
                              <h5 class="f_p f_size_30 f_500 t_color mb_20">
                                TemporaryMail has been launched
                              </h5>
                            </a>
                            <p class="f_400 mb_20">
                              After several weeks of testing we are glad to
                              announce that the site has finally launched and is
                              available to the public. Please be aware that
                              TemporaryMail.com is still under developement and
                            </p>
                            <a
                              style="margin-left: 0px"
                              class="learn_btn_two read-more-nine btn-grad-back"
                            >
                              <span>Read More</span>
                              <i class="fa fa-arrow-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-lg-4">
                        <div class="blog-sidebar">
                          <div
                            class="widget sidebar_widget widget_recent_post mt_60"
                          >
                            <div class="widget_title">
                              <h3 class="f_p f_size_20 t_color3">
                                Recent posts
                              </h3>
                              <div class="border_bottom"></div>
                            </div>
                            <div class="media post_item">
                              <img
                                src="/assets/images/blog-grid/post_1.jpg"
                                alt=""
                              />
                              <div class="media-body">
                                <a href="#">
                                  <h3 class="f_size_16 f_p f_400">
                                    Proin gravi nibh velit auctor aliquet
                                    aenean.
                                  </h3>
                                </a>
                                <div class="entry_post_info">
                                  By: <a href="#">Admin</a>
                                  <a href="#">March 14, 2022</a>
                                </div>
                              </div>
                            </div>
                            <div class="media post_item">
                              <img
                                src="/assets/images/blog-grid/post_2.jpg"
                                alt=""
                              />
                              <div class="media-body">
                                <a href="#">
                                  <h3 class="f_size_16 f_p f_400">
                                    Proin gravi nibh velit auctor aliquet
                                    aenean.
                                  </h3>
                                </a>
                                <div class="entry_post_info">
                                  By: <a href="#">Admin</a>
                                  <a href="#">March 14, 2022</a>
                                </div>
                              </div>
                            </div>
                            <div class="media post_item">
                              <img
                                src="/assets/images/blog-grid/post_3.jpg"
                                alt=""
                              />
                              <div class="media-body">
                                <a href="#">
                                  <h3 class="f_size_16 f_p f_400">
                                    Proin gravi nibh velit auctor aliquet
                                    aenean.
                                  </h3>
                                </a>
                                <div class="entry_post_info">
                                  By: <a href="#">Admin</a>
                                  <a href="#">March 14, 2022</a>
                                </div>
                              </div>
                            </div>
                            <div class="media post_item">
                              <img
                                src="/assets/images/blog-grid/post_4.jpg"
                                alt=""
                              />
                              <div class="media-body">
                                <a href="#">
                                  <h3 class="f_size_16 f_p f_400">
                                    Proin gravi nibh velit auctor aliquet
                                    aenean.
                                  </h3>
                                </a>
                                <div class="entry_post_info">
                                  By: <a href="#">Admin</a>
                                  <a href="#">March 14, 2022</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </section>
              </section>
              <!-- /.contactus -->
            </div>
          </section>
        </div>
      </section>
      <!-- END ***BLOG-SECTION*** -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-1] -->
      <section class="blog-single-section blog-one-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid blog-img"
                      src="/assets/images/blog-grid/blog1.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>14 <span>March</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          One Year Active
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        TemporaryMail.com has now been active for over a year!
                      </p>

                      <blockquote class="blockquote mb_40">
                        <h6 class="mb-0 f_size_18 l_height30 f_p f_400">
                          We hope that we have helped many users to rid their
                          inboxes of spam.
                        </h6>
                      </blockquote>
                      <p class="f_400 mb-30">
                        Keep up the great work and please feel free to contact
                        us to leave your feedback.
                      </p>

                      <a class="blog-back btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>

               
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-2] -->
      <section class="blog-two-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid blog-img"
                      src="/assets/images/blog-grid/blog2.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>14 <span>March</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          New features have been added
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        Recently a few changes have been made which now allows
                        you to view your recently used addresses in the "Change
                        Address" panel. This is useful if you changed your
                        temporary email address and forgot your old one. Now you
                        can simply go to the panel, display all your previously
                        used addresses and simply select one.
                      </p>
                      <p class="f_400 mb_40">
                        More features have also been added when viewing an email
                        as you are now able to view the source code, download
                        the email to your device and also delete emails.
                      </p>
                      <blockquote class="blockquote mb_40">
                        <h6 class="mb-0 f_size_18 l_height30 f_p f_400">
                          As always, stay safe and free from spam!
                        </h6>
                      </blockquote>

                      <a class="blog-back-two btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>

               
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-3] -->
      <section class="blog-three-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid blog-img"
                      src="/assets/images/blog-grid/blog3.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>14 <span>March</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          Status page and stability
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        Due to the service incidents that have occurred during
                        the last couple of weeks, a status page has been added.
                        You may visit this page to check the status of the
                        services to make sure that the temporary mail addresses
                        are working correctly.
                      </p>
                      <p class="f_400 mb_40">
                        Thank you for being patient as we're constantly working
                        to improve the stability of TemporaryMail.com to make
                        sure that you can stay free from spam with disposable
                        email addresses that actually work.
                      </p>

                      <a class="blog-back-three btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-4] -->
      <section class="blog-four-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid blog-img"
                      src="/assets/images/blog-grid/blog4.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>14 <span>March</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          There has been more downtime
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        Unfortunately, there was recently a long downtime due to
                        a server being overloaded. It was solved about an hour
                        ago and we're looking into the problem to avoid it from
                        happening again..
                      </p>
                      <p class="f_400 mb_40">
                        We once again apologize about this downtime and ask that
                        you bear with us as we work to improve the stability of
                        the service.
                      </p>

                      <blockquote class="blockquote mb_40">
                        <h6 class="mb-0 f_size_18 l_height30 f_p f_400">
                          As always, stay safe and free from spam!
                        </h6>
                      </blockquote>

                      <a class="blog-back-four btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-5] -->
      <section class="blog-five-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid blog-img"
                      src="/assets/images/blog-grid/blog5.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>14 <span>March</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          Server issues and encoding improvements
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        The past 24 hours some users may have experienced
                        problems with emails not arriving in the inbox.
                      </p>
                      <p class="f_400 mb_40">
                        This was due to a server issue and has been solved, we
                        apologize about the downtime.
                      </p>

                      <blockquote class="blockquote mb_40">
                        <h6 class="mb-0 f_size_18 l_height30 f_p f_400">
                          The character encoding has also been greatly improved
                          which will help display emails with foreign languages
                          and emojis better. You will therefore now be able to
                          easily view and handle emails in other languages.
                        </h6>
                      </blockquote>

                      <p class="f_400 mb_40">
                        As always - stay safe and free from spam!
                      </p>

                      <a class="blog-back-five btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-6] -->
      <section class="blog-six-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid blog-img"
                      src="/assets/images/blog-grid/blog6.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>14 <span>March</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          Security patches and additonal domains
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        There have been more restrictions applied to the window
                        that displays your emails to make it safer for you to
                        read without leaking any sensitive data.
                      </p>

                      <blockquote class="blockquote mb_40">
                        <h6 class="mb-0 f_size_18 l_height30 f_p f_400">
                          You are now also able to choose between more domains.
                        </h6>
                      </blockquote>

                      <p class="f_400 mb_40">
                        Please feel free to send your feedback or questions
                        through the contact form.
                      </p>

                      <a class="blog-back-six btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-7] -->
      <section class="blog-seven-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid blog-img"
                      src="/assets/images/blog-grid/blog7.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>10 <span>July</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          TemporaryMail.com is in the BETA stage
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        The service is finally in the BETA testing stage.
                      </p>

                      <blockquote class="blockquote mb_40">
                        <h6 class="mb-0 f_size_18 l_height30 f_p f_400">
                          Any feedback, bug report or suggestion would be much
                          appreciated and to send your message, please use the
                          contact form.
                        </h6>
                      </blockquote>

                      <a class="blog-back-seven btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-8] -->
      <section class="blog-eight-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid blog-img"
                      src="/assets/images/blog-grid/blog8.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>10 <span>April</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          How secure are disposable email services?
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        In order to protect you from malicious contents sent
                        inside emails and to avoid having your IP-address
                        exposed or the fact that you have opened and read an
                        email - we will not load third-party content
                        automatically from the emails that you receive.
                      </p>

                      <p class="f_400 mb-30">
                        This means that when you receive an email, the photos
                        that are not sent as attachment and reside on an
                        external server will not be loaded until you click them
                        and confirm that you are aware of this. Do note that
                        when you load an external image in an email, your
                        IP-address is exposed and the recipient may become
                        notified that you have read the email.
                      </p>

                      <blockquote class="blockquote mb_40">
                        <h6 class="mb-0 f_size_18 l_height30 f_p f_400">
                          Furthermore, all scripts that are sent in an email
                          will not be launched in order to protect you from
                          malicious attacks that may target your browser.
                        </h6>
                      </blockquote>

                      <p class="f_400 mb-30">
                        To get started you may head over to the homepage and
                        start creating your own disposable email addresses!
                      </p>

                      <a class="blog-back-eight btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***SINGLE-BLOG-SECTION [blog-9] -->
      <section class="blog-nine-section">
        <div class="content-wrapper">
          <section class="easy_setup_area sec_pad">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 blog_sidebar_left">
                  <div class="blog_single mb_50">
                    <img
                      class="img-fluid"
                      src="/assets/images/blog-grid/blog9.jpg"
                      alt=""
                    />
                    <div
                      class="blog_content"
                      style="padding-left: 20px; padding-right: 20px"
                    >
                      <div class="post_date">
                        <h2>10 <span>March</span></h2>
                      </div>
                      <div class="entry_post_info">
                        By: <a href="#">Admin</a>

                        <a href="#">TemporaryMail</a>
                      </div>
                      <a href="#">
                        <h5 class="f_p f_size_30 f_500 t_color mb-30">
                          TemporaryMail has been launched
                        </h5>
                      </a>
                      <p class="f_400 mb-30">
                        After several weeks of testing we are glad to announce
                        that the site has finally launched and is available to
                        the public.
                      </p>

                      <p class="f_400 mb-30">
                        Please be aware that TemporaryMail.com is still under
                        developement and there may be bugs that need to be fixed
                        until it's fully stable. If you run into any problems
                        then you may always contact us and we will do our best
                        to have it solved as soon as possible.
                      </p>

                      <a class="blog-back-nine btn-grad-back">
                        <i class="fa fa-arrow-left"></i>
                        <span>Back</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***SINGLE-BLOG-SECTION -->

      <!-- BEGIN ***OUR-SERVICE SECTION*** -->
      <section class="our-service">
        <div class="content-wrapper" style="text-align: center">
          <!-- we will use this div if and only if email is empty -->
          <section class="easy_setup_area" style="padding-bottom: 2.2rem">
            <div class="container">
              <div
                class="hosting_title analytices_title text-center"
                style="padding-top: 5rem"
              >
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                  <span class="ana-title">Our Services</span> Generate Email
                  Very Easily
                </h2>
              </div>

              <div class="service-section">
                <div class="row mb_30 new_service">
                  <!-- 1st service -->
                  <div class="col-lg-4 col-sm-6">
                    <div
                      class="email_features_item text-center wow fadeInUp"
                      data-wow-delay="0.3s"
                    >
                      <div class="number">1</div>
                      <div class="separator"></div>
                      <div class="new_service_content">
                        <img
                          class="service-img"
                          src="/assets/images/anonymous.svg"
                          alt=""
                        />
                        <h4 class="f_size_20 f_p t_color f_500">Anonymous</h4>
                        <p class="f_400 f_size_15 mb-0">
                          Choose between anonymous email addresses that work on nearly all services
                        </p>
                      </div>
                    </div>
                  </div>

                  <!-- 2nd service -->
                  <div class="col-lg-4 col-sm-6">
                    <div
                      class="email_features_item text-center wow fadeInUp"
                      data-wow-delay="0.5s"
                    >
                      <div class="number">2</div>
                      <div class="separator"></div>
                      <div class="new_service_content">
                        <img
                          class="service-img"
                          src="/assets/images/free.svg"
                          alt=""
                        />
                        <h4 class="f_size_20 f_p t_color f_500">Free</h4>
                        <p class="f_400 f_size_15 mb-0">
                          TemporaryMail.com is free of charge and you are not required to create an account.
                        </p>
                      </div>
                    </div>
                  </div>

                  <!-- 3rd service -->
                  <div class="col-lg-4 col-sm-6">
                    <div
                      class="email_features_item text-center wow fadeInUp"
                      data-wow-delay="0.6s"
                    >
                      <div class="number">3</div>
                      <div class="separator"></div>
                      <div class="new_service_content">
                        <img
                          class="service-img"
                          src="/assets/images/security-latest.svg"
                          alt=""
                        />
                        <h4 class="f_size_20 f_p t_color f_500">
                          Extreme Security
                        </h4>
                        <p class="f_400 f_size_15 mb-0">
                          All emails are viewed through secure iframes and <a style="color: #1e88e5;" class="external-blog">all external requests are blocked</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***OUR-SERVICE SECTION*** -->

      <!-- BEGIN ***USER-MANUAL SECTION*** -->
      <section class="user-manual">
        <div class="content-wrapper" style="text-align: center">
          <!-- we will use this div if and only if email is empty -->
          <section class="easy_setup_area" style="padding-bottom: 2.2rem">
            <div class="container">
              <div
                class="hosting_title analytices_title text-center"
                style="padding-top: 5rem"
              >
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                  <span class="ana-title">Easy Setup</span> Generate Email Very
                  Easily
                </h2>
               
              </div>
              <div class="setup_inner">
                <div class="setup_item row">
                  <div
                    class="col-md-5 setup_img wow fadeInLeft"
                    data-wow-delay="0.2s"
                  >
                    <img
                      style="height: 298px"
                      src="/assets/images/email-copy.svg"
                      alt=""
                    />
                  </div>
                  <div class="col-md-2 s_number">
                    <div class="round">01</div>
                  </div>
                  <div class="col-md-5">
                    <div
                      class="setup_content wow fadeInRight"
                      data-wow-delay="0.4s"
                    >
                      <h5>Copy Email Address</h5>
                      <p>
                        Copy your disposable email address (
                        nzwqmsz@frederictonlawyer.com ) or change it
                      </p>
                    </div>
                  </div>
                  <div
                    class="line bottom_half wow height"
                    data-wow-delay="0.5s"
                  ></div>
                </div>
                <div class="setup_item row flex-row-reverse">
                  <div
                    class="col-md-5 setup_img wow fadeInLeft"
                    data-wow-delay="0.4s"
                  >
                    <img
                      style="height: 298px"
                      src="/assets/images/email-use.svg"
                      alt=""
                    />
                  </div>
                  <div class="col-md-2 s_number">
                    <div class="round">02</div>
                  </div>
                  <div class="col-md-5">
                    <div
                      class="setup_content wow fadeInRight"
                      data-wow-delay="0.4s"
                    >
                      <h5>Use your email Address</h5>
                      <p>Use the address on your desired service.</p>
                    </div>
                  </div>
                  <div class="line wow height" data-wow-delay="0.9s"></div>
                </div>
                <div class="setup_item row">
                  <div
                    class="col-md-5 setup_img wow fadeInLeft"
                    data-wow-delay="0.4s"
                  >
                    <img
                      style="height: 298px"
                      src="/assets/images/email-wait.svg"
                      alt=""
                    />
                  </div>
                  <div class="col-md-2 s_number">
                    <div class="round">03</div>
                  </div>
                  <div class="col-md-5">
                    <div
                      class="setup_content wow fadeInRight"
                      data-wow-delay="0.4s"
                    >
                      <h5>Wait for some moment</h5>
                      <p>Wait a few moments for the email to be sent.</p>
                    </div>
                  </div>
                  <div class="line wow height" data-wow-delay="1.5s"></div>
                </div>
                <div class="setup_item row flex-row-reverse">
                  <div
                    class="col-md-5 setup_img wow fadeInRight"
                    data-wow-delay="0.6s"
                  >
                    <img
                      style="height: 298px"
                      src="/assets/images/email-success.svg"
                      alt=""
                    />
                  </div>
                  <div class="col-md-2 s_number">
                    <div class="round">04</div>
                  </div>
                  <div class="col-md-5">
                    <div
                      class="setup_content wow fadeInLeft"
                      data-wow-delay="0.4s"
                    >
                      <h5>Check Your Inbox</h5>
                      <p>
                        When the email is sent it will be shown in the inbox
                        above
                      </p>
                    </div>
                  </div>
                  <div class="line wow height" data-wow-delay="0.9s"></div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***USER-MANUAL SECTION -->

      <!-- BEGIN ***STATUS SECTION *** -->
      <section class="status-section">
        <div class="content-wrapper" style="text-align: center">
          <!-- we will use this div if and only if email is empty -->
          <section
            class="easy_setup_area sec_pad"
            style="padding-bottom: 2.2rem"
          >
            <div class="container">
              <section class="status wow fadeInLeft">
                <div
                  class="bg-map"
                  data-bg-image="/assets/images/map.png"
                ></div>
                <div class="container">
                  <div class="section-title color-two text-center">
                    <h3
                      style="
                        color: #2c2c51;
                        font-size: 40px;
                        padding-bottom: 10px;
                      "
                      class="ana-title wow pixFadeUp"
                    >
                      Status
                    </h3>
                    <h2
                      class="title"
                      style="
                        padding-bottom: 50px;
                        font-size: 18px;
                        line-height: 1.5;
                        text-align: center;
                      "
                    >
                      If a service is down or has issues, then you are very
                      likely to experience problems using temporary mail
                      addresses. Below you will be able to see the status of the
                      different services and for more information you may check
                      the blog.
                    </h2>
                  </div>
                  <!-- /.section-title -->

                  <div class="status-wrapper">
                    <div class="row">
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact">
                          <div class="counter">
                            <h4 class="count"><i class="fa fa-check"></i></h4>
                          </div>
                          <!-- /.counter -->

                          <p>Main Server</p>
                        </div>
                        <!-- /.fun-fact -->
                      </div>
                      <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact color-two">
                          <div class="counter">
                            <h4 class="count"><i class="fa fa-check"></i></h4>
                          </div>
                          <!-- /.counter -->
                          <p>Email Servers</p>
                        </div>
                        <!-- /.fun-fact -->
                      </div>
                      <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact color-three">
                          <div class="counter">
                            <h4 class="count"><i class="fa fa-check"></i></h4>
                          </div>
                          <!-- /.counter -->
                          <p>General Services</p>
                        </div>
                        <!-- /.fun-fact -->
                      </div>
                      <!-- /.col-lg-3 col-md-6 col-sm-6 -->

                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact color-four">
                          <div class="counter">
                            <h4 class="count"><i class="fa fa-check"></i></h4>
                          </div>
                          <!-- /.counter -->
                          <p>API</p>
                        </div>
                        <!-- /.fun-fact -->
                      </div>
                      <!-- /.col-lg-3 col-md-6 col-sm-6 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.status-wrapper -->

                  <!-- /.button-container -->
                </div>
                <!-- /.container -->
              </section>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***STATUS SECTION -->

      <!-- BEGIN ***FAQ SECION -->
      <section class="faq-section">
        <div class="content-wrapper" style="text-align: center">
          <!-- we will use this div if and only if email is empty -->
          <section class="easy_setup_area" style="padding-bottom: 2.2rem">
            <div class="container font-f">
              <div class="hosting_title analytices_title text-center" style="">
                <h2>
                  <span class="ana-title">Frequently Asked Question</span>
                </h2>

                <p class="">
                  If you have other questions then feel free to use the
                  <a style="color: #1e88e5" class="faq-contact-btn">contact page</a>
                </p>
              </div>

              <!-- faq area -->

              <div>
                <section class="faqs">
                  <div class="container">
                    <div class="tabs-wrapper">
                      <div class="tab-content">
                        <div
                          class="tab-pane fade show active"
                          id="design"
                          role="tabpanel"
                          aria-labelledby="design-tab"
                        >
                          <div id="accordionsing" class="faq faq-two pixFade">
                            <div class="card">
                              <div class="card-header" id="heading10">
                                <h5>
                                  <button
                                    class="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapse00"
                                    aria-expanded="false"
                                    aria-controls="collapse00"
                                  >
                                    How long are emails kept?
                                  </button>
                                </h5>
                              </div>
                              <div
                                id="collapse00"
                                class="collapse"
                                aria-labelledby="heading10"
                                data-parent="#accordionsing"
                              >
                                <div class="card-body">
                                  <p>
                                    Each email is saved for 6 hours and once
                                    expired it will be permanently deleted.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="card active">
                              <div class="card-header" id="heading20">
                                <h5>
                                  <button
                                    class="btn btn-link"
                                    data-toggle="collapse"
                                    data-target="#collapse10"
                                    aria-expanded="true"
                                    aria-controls="collapse10"
                                  >
                                    How do I change the email address?
                                  </button>
                                </h5>
                              </div>
                              <div
                                id="collapse10"
                                class="collapse show"
                                aria-labelledby="heading20"
                                data-parent="#accordionsing"
                              >
                                <div class="card-body">
                                  <p>
                                    You can change the randomly assigned
                                    address, by pressing the
                                    <a href="">Change Address</a> button found
                                    above.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="heading30">
                                <h5>
                                  <button
                                    class="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapse20"
                                    aria-expanded="false"
                                    aria-controls="collapse20"
                                  >
                                    Where do I see if I've received an email?
                                  </button>
                                </h5>
                              </div>
                              <div
                                id="collapse20"
                                class="collapse"
                                aria-labelledby="heading30"
                                data-parent="#accordionsing"
                              >
                                <div class="card-body">
                                  <p>
                                    You will see it once you click the inbox
                                    button from the dashboard.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="heading40">
                                <h5>
                                  <button
                                    class="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapse30"
                                    aria-expanded="false"
                                    aria-controls="collapse30"
                                  >
                                    Can you recover deleted emails?
                                  </button>
                                </h5>
                              </div>
                              <div
                                id="collapse30"
                                class="collapse"
                                aria-labelledby="heading40"
                                data-parent="#accordionsing"
                              >
                                <div class="card-body">
                                  <p>
                                    Unfortunately, when the email expires it is
                                    permanently deleted without an option to
                                    recover.
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="heading40">
                                <h5>
                                  <button
                                    class="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapse40"
                                    aria-expanded="false"
                                    aria-controls="collapse40"
                                  >
                                  What is a temporary email address?
                                  </button>
                                </h5>
                              </div>
                              <div
                                id="collapse40"
                                class="collapse"
                                aria-labelledby="heading40"
                                data-parent="#accordionsing"
                              >
                                <div class="card-body">
                                  <p>
                                  A temporary email address is synonymous with a disposable email address and is used so you don't have to reveal your own real email address.
                                  </p>
                                </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-header" id="heading40">
                                <h5>
                                  <button
                                    class="btn btn-link collapsed"
                                    data-toggle="collapse"
                                    data-target="#collapse50"
                                    aria-expanded="false"
                                    aria-controls="collapse50"
                                  >
                                  What are temporary email addresses used for?
                                  </button>
                                </h5>
                              </div>
                              <div
                                id="collapse50"
                                class="collapse"
                                aria-labelledby="heading50"
                                data-parent="#accordionsing"
                              >
                                <div class="card-body">
                                  <p>
                                  Most often it is used for a simple one-time purposes such as to bypass an email verification process in order to avoid revealing your real address and signing up to an endless amount of spam and newletters
                                  </p>
                                </div>
                              </div>
                            </div>
                            
                            
                          </div>
                        </div>
                      
                      </div>
                    </div>
                    <!-- /.tabs-wrapper -->
                  </div>
                  <!-- /.container -->
                </section>
              </div>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***FAQ SECTION -->

      <!-- BEGIN ***Privacy Section -->
      <section class="privacy-section">
        <div class="content-wrapper" style="text-align: center">
          <!-- we will use this div if and only if email is empty -->
          <section
            class="easy_setup_area"
            style="padding-bottom: 2.2rem; padding-top: 5rem"
          >
            <div class="container">
              <!--===========================-->
              <!--=         Privacy        =-->
              <!--===========================-->
              <div style="text-align: center" class="wow fadeInLeft">
                <h3 class="bold" style="font-size: 30px">Privacy Policy</h3>
                <p
                  style="font-size: 16px; line-height: 1.8; margin-bottom: 30px"
                >
                  We value your privacy deeply and do our best to protect it,
                  below you will be able to read about how your data is being
                  <br />
                  used and protected by TemporaryMail.com.
                </p>

                <!-- 1 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">Privacy policy</h3>
                  <p class="description f_size_15">
                    TemporaryMail.com built the TemporaryMail.com app as an Ad
                    Supported and premium app in the future. This SERVICE is
                    provided by TemporaryMail.com at no cost and is intended for
                    use as is
                  </p>

                  <p class="description f_size_15">
                    This page is used to inform visitors regarding our policies
                    with the collection, use, and disclosure of Personal
                    Information if anyone decided to use our Service.
                  </p>

                  <p class="description f_size_15">
                    If you choose to use our Service, then you agree to the
                    collection and use of information in relation to this
                    policy. The Personal Information that we collect is used for
                    providing and improving the Service. We will not use or
                    share your information with anyone except as described in
                    this Privacy Policy.
                  </p>

                  <p class="description f_size_15">
                    The terms used in this Privacy Policy have the same meanings
                    as in our Terms and Conditions, which is accessible at
                    TemporaryMail.com unless otherwise defined in this Privacy
                    Policy.
                  </p>
                </div>

                <!-- 2 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">
                    Information Collection and Use
                  </h3>
                  <p class="description f_size_15">
                    For a better experience, while using our Service, we may
                    require you to provide us with certain personally
                    identifiable information. The information that we request
                    will be retained by us and used as described in this privacy
                    policy.
                  </p>
                </div>

                <!-- 3 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">Log Data</h3>
                  <p class="description f_size_15">
                    We want to inform you that whenever you use our Service, in
                    a case of an error in the app we collect data and
                    information (through third party products) on your phone
                    called Log Data. This Log Data may include information such
                    as your device Internet Protocol (“IP”) address, device
                    name, operating system version, the configuration of the app
                    when utilizing our Service, the time and date of your use of
                    the Service, and other statistics.
                  </p>
                </div>

                <!-- 4 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">Cookies</h3>
                  <p class="description f_size_15">
                    Cookies are files with a small amount of data that are
                    commonly used as anonymous unique identifiers. These are
                    sent to your browser from the websites that you visit and
                    are stored on your device's internal memory.
                  </p>

                  <p class="description f_size_15">
                    This Service does not use these “cookies” explicitly.
                    However, the app may use third party code and libraries that
                    use “cookies” to collect information and improve their
                    services. You have the option to either accept or refuse
                    these cookies and know when a cookie is being sent to your
                    device. If you choose to refuse our cookies, you may not be
                    able to use some portions of this Service.
                  </p>
                </div>

                <!-- 5 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">Service Providers</h3>
                  <p class="description f_size_15">
                    We may employ third-party companies and individuals due to
                    the following reasons:
                  </p>

                  <ul class="description f_size_15">
                    <li>To facilitate our Service;</li>
                    <li>To provide the Service on our behalf;</li>
                    <li>To perform Service-related services; or</li>
                    <li>To assist us in analyzing how our Service is used.</li>
                  </ul>

                  <p class="description f_size_15">
                    We want to inform users of this Service that these third
                    parties have access to your Personal Information. The reason
                    is to perform the tasks assigned to them on our behalf.
                    However, they are obligated not to disclose or use the
                    information for any other purpose.
                  </p>
                </div>

                <!-- 6 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">Security</h3>
                  <p class="description f_size_15">
                    We value your trust in providing us your Personal
                    Information, thus we are striving to use commercially
                    acceptable means of protecting it. But remember that no
                    method of transmission over the internet, or method of
                    electronic storage is 100% secure and reliable, and we
                    cannot guarantee its absolute security.
                  </p>
                </div>

                <!-- 7 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">Links to Other Sites</h3>
                  <p class="description f_size_15">
                    This Service may contain links to other sites. If you click
                    on a third-party link, you will be directed to that site.
                    Note that these external sites are not operated by us.
                    Therefore, we strongly advise you to review the Privacy
                    Policy of these websites. We have no control over and assume
                    no responsibility for the content, privacy policies, or
                    practices of any third-party sites or services.
                  </p>
                </div>

                <!-- 8 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">Children’s Privacy</h3>
                  <p class="description f_size_15">
                    These Services do not address anyone under the age of 13. We
                    do not knowingly collect personally identifiable information
                    from children under 13. In the case we discover that a child
                    under 13 has provided us with personal information, we
                    immediately delete this from our servers. If you are a
                    parent or guardian and you are aware that your child has
                    provided us with personal information, please contact us so
                    that we will be able to do necessary actions.
                  </p>
                </div>

                <!-- 9 -->
                <div class="text-left">
                  <h3 style="font-size: 25px">
                    Changes to This Privacy Policy
                  </h3>
                  <p class="description f_size_15">
                    We may update our Privacy Policy from time to time. Thus,
                    you are advised to review this page periodically for any
                    changes. We will notify you of any changes by posting the
                    new Privacy Policy on this page.
                  </p>

                  <p class="description f_size_15">
                    This policy is effective as of 2021-01-05
                  </p>

                  <p class="description f_size_15">Contact Us</p>

                  <p class="description f_size_15">
                    If you have any questions or suggestions about our Privacy
                    Policy, do not hesitate to contact us at
                    Team@TemporaryMail.com.
                  </p>
                </div>
              </div>
              <!-- /.contactus -->
            </div>
          </section>
        </div>
      </section>
      <!-- END ***Privacy Section -->


      <!-- BEGIN ***Terms Section -->
      <section class="terms-section">
        <div>
          <section class="condition-section">
            <div class="content-wrapper" style="text-align: center">
              <section
                class="easy_setup_area wow fadeInLeft"
                style="padding-bottom: 2.2rem; padding-top: 5rem"
              >
                <div class="container">
                  <div style="text-align: center">
                    <h3 class="bold" style="font-size: 30px">Terms of Service</h3>
                    <p
                      style="
                        font-size: 16px;
                        line-height: 1.8;
                        margin-bottom: 30px;
                      "
                    >
                      Please read and make sure that you are familiar with the
                      terms of service before using <br> TemporaryMail.com. If you have
                      any questions then you can always contact us.
                    </p>
                  </div>
  
                  <div class="text-left">
                    <p class="description f_size_15">
                      By downloading or using the app, these terms will
                      automatically apply to you – you should make sure therefore
                      that you read them carefully before using the app. You’re
                      not allowed to copy, or modify the app, any part of the app,
                      or our trademarks in any way. You’re not allowed to attempt
                      to extract the source code of the app, and you also
                      shouldn’t try to translate the app into other languages, or
                      make derivative versions. The app itself, and all the trade
                      marks, copyright, database rights and other intellectual
                      property rights related to it, still belong to
                      TemporaryMail.com.
                    </p>
  
                    <p class="description f_size_15">
                      TemporaryMail.com is committed to ensuring that the app is
                      as useful and efficient as possible. For that reason, we
                      reserve the right to make changes to the app or to charge
                      for its services, at any time and for any reason. We will
                      never charge you for the app or its services without making
                      it very clear to you exactly what you’re paying for.
                    </p>
  
                    <p class="description f_size_15">
                      The following is strictly prohibited:
                    </p>
  
                    <ul class="description f_size_15">
                      <li>
                        Using the service for spam. TemporaryMail.com was made to
                        fight spam, not to promote it.
                      </li>
                      <li>
                        Using the service illegally, with malicious intent or for
                        fraud.
                      </li>
                    </ul>
  
                    <p class="description f_size_15">
                      The TemporaryMail.com app stores and processes personal data
                      that you have provided to us, in order to provide our
                      Service. It’s your responsibility to keep your phone and
                      access to the app secure. We therefore recommend that you do
                      not jailbreak or root your phone, which is the process of
                      removing software restrictions and limitations imposed by
                      the official operating system of your device. It could make
                      your phone vulnerable to malware/viruses/malicious programs,
                      compromise your phone’s security features and it could mean
                      that the TemporaryMail.com app won’t work properly or at
                      all.
                    </p>
  
                    <p class="description f_size_15">
                      You should be aware that there are certain things that
                      TemporaryMail.com will not take responsibility for. Certain
                      functions of the app will require the app to have an active
                      internet connection. The connection can be Wi-Fi, or
                      provided by your mobile network provider, but
                      TemporaryMail.com cannot take responsibility for the app not
                      working at full functionality if you don’t have access to
                      Wi-Fi, and you don’t have any of your data allowance left.
                    </p>
  
                    <p class="description f_size_15">
                      If you’re using the app outside of an area with Wi-Fi, you
                      should remember that your terms of the agreement with your
                      mobile network provider will still apply. As a result, you
                      may be charged by your mobile provider for the cost of data
                      for the duration of the connection while accessing the app,
                      or other third party charges. In using the app, you’re
                      accepting responsibility for any such charges, including
                      roaming data charges if you use the app outside of your home
                      territory (i.e. region or country) without turning off data
                      roaming. If you are not the bill payer for the device on
                      which you’re using the app, please be aware that we assume
                      that you have received permission from the bill payer for
                      using the app.
                    </p>
  
                    <p class="description f_size_15">
                      Along the same lines, TemporaryMail.com cannot always take
                      responsibility for the way you use the app i.e. You need to
                      make sure that your device stays charged – if it runs out of
                      battery and you can’t turn it on to avail the Service,
                      TemporaryMail.com cannot accept responsibility.
                    </p>
  
                    <p class="description f_size_15">
                      With respect to TemporaryMail.com’s responsibility for your
                      use of the app, when you’re using the app, it’s important to
                      bear in mind that although we endeavour to ensure that it is
                      updated and correct at all times, we do rely on third
                      parties to provide information to us so that we can make it
                      available to you. TemporaryMail.com accepts no liability for
                      any loss, direct or indirect, you experience as a result of
                      relying wholly on this functionality of the app.
                    </p>
  
                    <p class="description f_size_15">
                      At some point, we may wish to update the app. The app is
                      currently available on – the requirements for system(and for
                      any additional systems we decide to extend the availability
                      of the app to) may change, and you’ll need to download the
                      updates if you want to keep using the app. TemporaryMail.com
                      does not promise that it will always update the app so that
                      it is relevant to you and/or works with the version that you
                      have installed on your device. However, you promise to
                      always accept updates to the application when offered to
                      you, We may also wish to stop providing the app, and may
                      terminate use of it at any time without giving notice of
                      termination to you. Unless we tell you otherwise, upon any
                      termination, (a) the rights and licenses granted to you in
                      these terms will end; (b) you must stop using the app, and
                      (if needed) delete it from your device.
                    </p>
  
                    <div class="text-left">
                      <h3 style="font-size: 25px">
                        Changes to This Terms and Conditions
                      </h3>
                      <p class="description f_size_15">
                        We may update our Terms and Conditions from time to time.
                        Thus, you are advised to review this page periodically for
                        any changes. We will notify you of any changes by posting
                        the new Terms and Conditions on this page.
                      </p>
  
                      <p class="description f_size_15">
                        These terms and conditions are effective as of 2021-01-05
                      </p>
  
                      <p class="description f_size_15">Contact Us</p>
  
                      <p class="description f_size_15">
                        If you have any questions or suggestions about our Privacy
                        Policy, do not hesitate to contact us at
                        Team@TemporaryMail.com.
                      </p>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </section>
        </div>
      </section>
      <!-- END ***Terms Section -->


      <!-- BEGIN *** EMAIL-SECTION -->
      <section class="email-list-section">
        <div class="content-wrapper">
          <!--============================-->
          <!--=         Email List         =-->
          <!--============================-->
          <section
            class="emaillists"
            data-bg-image="media/background/job-list-bg.jpg"
          >
            <div class="">
              <div class="section-title style-four text-center">
                <h2 style="margin-bottom: 30px; font-weight: bold;" class="title wow pixFadeUp" data-wow-delay="0.3s">
                  Inbox
                </h2>
              
              </div>
  
              <div class="our__emails">
                <div class="email__list email__list-btn">
                  <div class="mail-info">
                    <div class="company-logo">
                      <a
                        ><img src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%201%201%22%3E%3Cmetadata%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%2F%3E%3Cdc%3Atitle%3EInitials%3C%2Fdc%3Atitle%3E%3Cdc%3Acreator%3E%3Ccc%3AAgent%3E%3Cdc%3Atitle%3EFlorian%20K%C3%B6rner%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AAgent%3E%3C%2Fdc%3Acreator%3E%3Cdc%3Asource%3Ehttps%3A%2F%2Fgithub.com%2Fdicebear%2Fdicebear%3C%2Fdc%3Asource%3E%3Ccc%3Alicense%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%2F%3E%3C%2Fcc%3AWork%3E%3Ccc%3ALicense%20rdf%3Aabout%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Reproduction%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Distribution%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23DerivativeWorks%22%2F%3E%3C%2Fcc%3ALicense%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cmask%20id%3D%22avatarsRadiusMask%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20rx%3D%220%22%20ry%3D%220%22%20x%3D%220%22%20y%3D%220%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fmask%3E%3Cg%20mask%3D%22url(%23avatarsRadiusMask)%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20fill%3D%22%23E53935%22%2F%3E%3Ctext%20x%3D%2250%25%22%20y%3D%2250%25%22%20style%3D%22%20font-family%3A%20Arial%2Csans-serif%3B%20font-size%3A%200.5px%22%20fill%3D%22%23FFF%22%20text-anchor%3D%22middle%22%20dy%3D%220.178%22%3EAS%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="saspik job"
                      /></a>
                    </div>
                    <div class="info">
                      <h4 class="email-title">
                        <a>John Doe</a>
                      </h4>
                      <p class="designation">
                          <span
                          style="vertical-align: middle;"
                          class="material-icons"
                        >
                          mail
                        </span>
                        <span class="ash">john@doe.com</span>
                      </p>
                    </div>
                  </div>
  
                  <div class="email-location">
                    <span>Email Subject</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, quaerat?</p>
                  </div>
                </div>
                <!-- /.email__list -->
  
                <div class="email__list">
                  <div class="mail-info">
                    <div class="company-logo">
                      <a href="#"
                        ><img src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%201%201%22%3E%3Cmetadata%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%2F%3E%3Cdc%3Atitle%3EInitials%3C%2Fdc%3Atitle%3E%3Cdc%3Acreator%3E%3Ccc%3AAgent%3E%3Cdc%3Atitle%3EFlorian%20K%C3%B6rner%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AAgent%3E%3C%2Fdc%3Acreator%3E%3Cdc%3Asource%3Ehttps%3A%2F%2Fgithub.com%2Fdicebear%2Fdicebear%3C%2Fdc%3Asource%3E%3Ccc%3Alicense%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%2F%3E%3C%2Fcc%3AWork%3E%3Ccc%3ALicense%20rdf%3Aabout%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Reproduction%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Distribution%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23DerivativeWorks%22%2F%3E%3C%2Fcc%3ALicense%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cmask%20id%3D%22avatarsRadiusMask%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20rx%3D%220%22%20ry%3D%220%22%20x%3D%220%22%20y%3D%220%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fmask%3E%3Cg%20mask%3D%22url(%23avatarsRadiusMask)%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20fill%3D%22%23E53935%22%2F%3E%3Ctext%20x%3D%2250%25%22%20y%3D%2250%25%22%20style%3D%22%20font-family%3A%20Arial%2Csans-serif%3B%20font-size%3A%200.5px%22%20fill%3D%22%23FFF%22%20text-anchor%3D%22middle%22%20dy%3D%220.178%22%3EAS%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="saspik job"
                      /></a>
                    </div>
                    <div class="info">
                      <h4 class="email-title">
                        <a href="#">Jane Doe</a>
                      </h4>
                      <p class="designation">
                          <span
                          style="vertical-align: middle;"
                          class="material-icons"
                        >
                          mail
                        </span>
                        <span class="ash"><span class="ash"><span class="ash">john@doe.com</span></span>
                      </p>
                    </div>
                  </div>
  
                  <!-- <div class="job-time">
                    <span>Part Time</span>
                  </div> -->
  
                  <div class="email-location">
                    <span>Email Subject</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, quaerat?</p>
                  </div>
                </div>
                <!-- /.email__list -->
  
                <div class="email__list">
                  <div class="mail-info">
                    <div class="company-logo">
                      <a href="#"
                        ><img src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%201%201%22%3E%3Cmetadata%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%2F%3E%3Cdc%3Atitle%3EInitials%3C%2Fdc%3Atitle%3E%3Cdc%3Acreator%3E%3Ccc%3AAgent%3E%3Cdc%3Atitle%3EFlorian%20K%C3%B6rner%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AAgent%3E%3C%2Fdc%3Acreator%3E%3Cdc%3Asource%3Ehttps%3A%2F%2Fgithub.com%2Fdicebear%2Fdicebear%3C%2Fdc%3Asource%3E%3Ccc%3Alicense%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%2F%3E%3C%2Fcc%3AWork%3E%3Ccc%3ALicense%20rdf%3Aabout%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Reproduction%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Distribution%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23DerivativeWorks%22%2F%3E%3C%2Fcc%3ALicense%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cmask%20id%3D%22avatarsRadiusMask%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20rx%3D%220%22%20ry%3D%220%22%20x%3D%220%22%20y%3D%220%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fmask%3E%3Cg%20mask%3D%22url(%23avatarsRadiusMask)%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20fill%3D%22%23E53935%22%2F%3E%3Ctext%20x%3D%2250%25%22%20y%3D%2250%25%22%20style%3D%22%20font-family%3A%20Arial%2Csans-serif%3B%20font-size%3A%200.5px%22%20fill%3D%22%23FFF%22%20text-anchor%3D%22middle%22%20dy%3D%220.178%22%3EAS%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="saspik job"
                      /></a>
                    </div>
                    <div class="info">
                      <h4 class="email-title">
                        <a href="#">Alex Grahambel</a>
                      </h4>
                      <p class="designation">
                          <span
                          style="vertical-align: middle;"
                          class="material-icons"
                        >
                          mail
                        </span>
                          <span class="ash">john@doe.com</span></span>
                      </p>
                    </div>
                  </div>
  
                  <!-- <div class="job-time">
                    <span>Full Time</span>
                  </div> -->
  
                  <div class="email-location">
                    <span>Email Subject</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, quaerat?</p>
                  </div>
                </div>
                <!-- /.email__list -->
  
                <div class="email__list">
                  <div class="mail-info">
                    <div class="company-logo">
                      <a href="#"
                        ><img src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%201%201%22%3E%3Cmetadata%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%2F%3E%3Cdc%3Atitle%3EInitials%3C%2Fdc%3Atitle%3E%3Cdc%3Acreator%3E%3Ccc%3AAgent%3E%3Cdc%3Atitle%3EFlorian%20K%C3%B6rner%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AAgent%3E%3C%2Fdc%3Acreator%3E%3Cdc%3Asource%3Ehttps%3A%2F%2Fgithub.com%2Fdicebear%2Fdicebear%3C%2Fdc%3Asource%3E%3Ccc%3Alicense%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%2F%3E%3C%2Fcc%3AWork%3E%3Ccc%3ALicense%20rdf%3Aabout%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Reproduction%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Distribution%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23DerivativeWorks%22%2F%3E%3C%2Fcc%3ALicense%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cmask%20id%3D%22avatarsRadiusMask%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20rx%3D%220%22%20ry%3D%220%22%20x%3D%220%22%20y%3D%220%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fmask%3E%3Cg%20mask%3D%22url(%23avatarsRadiusMask)%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20fill%3D%22%23E53935%22%2F%3E%3Ctext%20x%3D%2250%25%22%20y%3D%2250%25%22%20style%3D%22%20font-family%3A%20Arial%2Csans-serif%3B%20font-size%3A%200.5px%22%20fill%3D%22%23FFF%22%20text-anchor%3D%22middle%22%20dy%3D%220.178%22%3EAS%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="saspik job"
                      /></a>
                    </div>
                    <div class="info">
                      <h4 class="email-title"><a href="#">Nixon Smith</a></h4>
                      <p class="designation">
                          <span
                          style="vertical-align: middle;"
                          class="material-icons"
                        >
                          mail
                        </span>
                          <span class="ash">john@doe.com</span></span>
                      </p>
                    </div>
                  </div>
  
                  <!-- <div class="job-time">
                    <span>Remote</span>
                  </div> -->
  
                  <div class="email-location">
                    <span>Email Subject</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, quaerat?</p>                
                  </div>
                </div>
                <!-- /.email__list -->
  
                <div class="email__list">
                  <div class="mail-info">
                    <div class="company-logo">
                      <a href="#"
                        ><img src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%201%201%22%3E%3Cmetadata%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%2F%3E%3Cdc%3Atitle%3EInitials%3C%2Fdc%3Atitle%3E%3Cdc%3Acreator%3E%3Ccc%3AAgent%3E%3Cdc%3Atitle%3EFlorian%20K%C3%B6rner%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AAgent%3E%3C%2Fdc%3Acreator%3E%3Cdc%3Asource%3Ehttps%3A%2F%2Fgithub.com%2Fdicebear%2Fdicebear%3C%2Fdc%3Asource%3E%3Ccc%3Alicense%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%2F%3E%3C%2Fcc%3AWork%3E%3Ccc%3ALicense%20rdf%3Aabout%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Reproduction%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Distribution%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23DerivativeWorks%22%2F%3E%3C%2Fcc%3ALicense%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cmask%20id%3D%22avatarsRadiusMask%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20rx%3D%220%22%20ry%3D%220%22%20x%3D%220%22%20y%3D%220%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fmask%3E%3Cg%20mask%3D%22url(%23avatarsRadiusMask)%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20fill%3D%22%23E53935%22%2F%3E%3Ctext%20x%3D%2250%25%22%20y%3D%2250%25%22%20style%3D%22%20font-family%3A%20Arial%2Csans-serif%3B%20font-size%3A%200.5px%22%20fill%3D%22%23FFF%22%20text-anchor%3D%22middle%22%20dy%3D%220.178%22%3EAS%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="saspik job"
                      /></a>
                    </div>
                    <div class="info">
                      <h4 class="email-title"><a href="#">The Home x</a></h4>
                      <p class="designation">
                          <span
                          style="vertical-align: middle;"
                          class="material-icons"
                        >
                          mail
                        </span>
                          <span class="ash">john@doe.com</span></span>
                      </p>
                    </div>
                  </div>
  
                  <!-- <div class="job-time">
                    <span>Part Time</span>
                  </div> -->
  
                  <div class="email-location">
                    <span>Email Subject</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, quaerat?</p>
                  </div>
                </div>
                <!-- /.email__list -->
  
                <div class="email__list">
                  <div class="mail-info">
                    <div class="company-logo">
                      <a href="#"
                        ><img src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%201%201%22%3E%3Cmetadata%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%2F%3E%3Cdc%3Atitle%3EInitials%3C%2Fdc%3Atitle%3E%3Cdc%3Acreator%3E%3Ccc%3AAgent%3E%3Cdc%3Atitle%3EFlorian%20K%C3%B6rner%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AAgent%3E%3C%2Fdc%3Acreator%3E%3Cdc%3Asource%3Ehttps%3A%2F%2Fgithub.com%2Fdicebear%2Fdicebear%3C%2Fdc%3Asource%3E%3Ccc%3Alicense%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%2F%3E%3C%2Fcc%3AWork%3E%3Ccc%3ALicense%20rdf%3Aabout%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Reproduction%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Distribution%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23DerivativeWorks%22%2F%3E%3C%2Fcc%3ALicense%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cmask%20id%3D%22avatarsRadiusMask%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20rx%3D%220%22%20ry%3D%220%22%20x%3D%220%22%20y%3D%220%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fmask%3E%3Cg%20mask%3D%22url(%23avatarsRadiusMask)%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20fill%3D%22%23E53935%22%2F%3E%3Ctext%20x%3D%2250%25%22%20y%3D%2250%25%22%20style%3D%22%20font-family%3A%20Arial%2Csans-serif%3B%20font-size%3A%200.5px%22%20fill%3D%22%23FFF%22%20text-anchor%3D%22middle%22%20dy%3D%220.178%22%3EAS%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="saspik job"
                      /></a>
                    </div>
                    <div class="info">
                      <h4 class="email-title"><a href="#">Moove Agency</a></h4>
                      <p class="designation">
                          <span
                          style="vertical-align: middle;"
                          class="material-icons"
                        >
                          mail
                        </span>
                          <span class="ash">john@doe.com</span>
                      </p>
                    </div>
                  </div>
  
                 
  
                  <div class="email-location">
                    <span>Europe</span>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, quaerat?</p>
                  </div>
                </div>
              
              </div>
              
            </div>
            
          </section>
         
        </div>
      </section>
      <!-- END *** EMAIL-SECTION -->

      <!-- BEGIN *** SINGLE-EMAIL-SECTION -->
      <section class="single-email-section">
        <div class="content-wrapper">
          <!--============================-->
          <!--=         Email Body       =-->
          <!--============================-->
          <section class="email-body">
            <div class="action-content">
              <h3 style="font-weight: bold;">Email Subject</h3>
              <div class="button-group">
                <button class="css-button-neumorphic">
                  <span class="material-icons" style="vertical-align: middle; color: #a1a1aa;">
                    chevron_left
                    </span>
                    <span>Back</span>
                </button>
                <button class="css-button-neumorphic">
  
                  <span class="material-icons" style="vertical-align: middle; color: #a1a1aa; ">
                    file_download
                    </span>
  
                    <span>Download</span>
                </button>
                <button class="css-button-neumorphic">
  
                  <span class="material-icons" style="vertical-align: middle; color: #a1a1aa;">
                    source
                    </span>
  
                    <span>Source</span>
                </button>
                
                <button class="css-button-neumorphic">
  
                  <span class="material-icons" style="vertical-align: middle; color: #a1a1aa;">
                    print
                    </span>
  
                    <span>Print</span>
                </button>
                
                <button class="css-button-neumorphic">
  
                  <span class="material-icons" style="vertical-align: middle; color: #a1a1aa;">
                    delete
                    </span>
  
                    <span>Delete</span>
                </button>
              </div>
            </div>
            
            <section class="email-body-card">
              <div class="email-content">
                <div class="email-content-upper-part">
                  <div class="email-content-upper-left">
                    <!-- img -->
                    <img
                    class="user-image"
                      src="data:image/svg+xml;utf8,%3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%201%201%22%3E%3Cmetadata%3E%3Crdf%3ARDF%3E%3Ccc%3AWork%3E%3Cdc%3Aformat%3Eimage%2Fsvg%2Bxml%3C%2Fdc%3Aformat%3E%3Cdc%3Atype%20rdf%3Aresource%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Fdcmitype%2FStillImage%22%2F%3E%3Cdc%3Atitle%3EInitials%3C%2Fdc%3Atitle%3E%3Cdc%3Acreator%3E%3Ccc%3AAgent%3E%3Cdc%3Atitle%3EFlorian%20K%C3%B6rner%3C%2Fdc%3Atitle%3E%3C%2Fcc%3AAgent%3E%3C%2Fdc%3Acreator%3E%3Cdc%3Asource%3Ehttps%3A%2F%2Fgithub.com%2Fdicebear%2Fdicebear%3C%2Fdc%3Asource%3E%3Ccc%3Alicense%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%2F%3E%3C%2Fcc%3AWork%3E%3Ccc%3ALicense%20rdf%3Aabout%3D%22https%3A%2F%2Fcreativecommons.org%2Fpublicdomain%2Fzero%2F1.0%2F%22%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Reproduction%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23Distribution%22%2F%3E%3Ccc%3Apermits%20rdf%3Aresource%3D%22https%3A%2F%2Fcreativecommons.org%2Fns%23DerivativeWorks%22%2F%3E%3C%2Fcc%3ALicense%3E%3C%2Frdf%3ARDF%3E%3C%2Fmetadata%3E%3Cmask%20id%3D%22avatarsRadiusMask%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20rx%3D%220%22%20ry%3D%220%22%20x%3D%220%22%20y%3D%220%22%20fill%3D%22%23fff%22%2F%3E%3C%2Fmask%3E%3Cg%20mask%3D%22url(%23avatarsRadiusMask)%22%3E%3Crect%20width%3D%221%22%20height%3D%221%22%20fill%3D%22%23E53935%22%2F%3E%3Ctext%20x%3D%2250%25%22%20y%3D%2250%25%22%20style%3D%22%20font-family%3A%20Arial%2Csans-serif%3B%20font-size%3A%200.5px%22%20fill%3D%22%23FFF%22%20text-anchor%3D%22middle%22%20dy%3D%220.178%22%3EAS%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                      alt=""
                    />
  
                    <!-- sender name and email -->
                    <div style="margin-top: -6px;">
                      <span class="user-email-name">John Smith</span>
                      <span style="font-size: 16px;">john@gmail.com</span>
                      <p class="user-email" style="display: flex; align-items: center; color: #6b7280;">
                        <span
                        style="font-size: 18px; margin-right: 5px; color: #6b7280;"
                        class="material-icons"
                      >
                        mail
                      </span>
                      <span style="font-size: 16px;">
                        nzwqmsz@frederictonlawyer.com
                      </span>
                        </p>
                    </div>
                  </div>
  
                  <div class="email-content-upper-right">
                    <p style="font-size: 15px;">Jan 9, 2022, 6:34 PM (2 days ago)</p>
                  </div>
                </div>
              </div>
  
              <div class="email-body-content">
                
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, officiis sit repellat eum quod doloremque dolores veniam excepturi nobis ullam officia illo autem, beatae velit architecto aut tempore voluptas incidunt nihil blanditiis odio dolore ducimus. Natus fugit aliquam quod amet, cupiditate sed repellat. Ipsum, placeat veritatis, aut et sit corrupti, expedita molestiae dolorem provident officiis error nemo itaque reiciendis cumque? Nulla dolorum reprehenderit tenetur accusamus? Quasi hic itaque quo, ea, quisquam tempore officiis, omnis tempora possimus optio sapiente assumenda repudiandae eum odio numquam. Fugiat, porro, dolore quae molestiae possimus repudiandae maiores velit recusandae laboriosam nesciunt reiciendis atque veniam temporibus nihil doloremque eius unde ipsa id eaque maxime, corrupti ducimus earum. Atque voluptate ducimus sunt temporibus culpa veritatis natus, eaque in rerum, veniam ipsam error eos mollitia autem similique! Tempora voluptate cum architecto ratione optio similique rem placeat aspernatur, consequuntur suscipit rerum asperiores quisquam. Explicabo unde tempora sit eum distinctio voluptas numquam officia voluptate culpa veritatis odio vero soluta dolor animi, magnam iure hic fugiat aperiam minima dolorem error, assumenda, ab nobis? Incidunt culpa sequi suscipit, repellat dolores esse praesentium. Itaque repellat iste fugiat, dignissimos tempore odit facilis quisquam exercitationem molestiae placeat laudantium illum laborum quas, soluta, omnis consequatur aspernatur error.
                
              </div>
            </section>
  
           
  
          </section>
        </div>
      </section>
      <!-- END *** SINGLE-EMAIL-SECTION -->
    </div>

    <canvas id="my-canvas"></canvas>

    <!--=========================-->
    <!--=        Footer         =-->
    <!--=========================-->

    
    <?php
    require_once("../inc/footer.php");   
    ?>
  </body>
</html>
