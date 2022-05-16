<footer
  class="footer footer-static footer-dark navbar-border"
  data-wow-delay="0.2s"
>
  <!-- <p class="clearfix lighten-2 text-sm-center mb-0 px-2">
        
      <span class="float-md-left d-block d-md-inline-blockd-none d-lg-block">
          <img
            style="width: 72px; height: 62px"
            src="/assets/images/logo.png"
            alt=""
          />
          <br />
          <span><a class="privacy-btn">Privacy Policy</a></span> |
          <span><a class="terms-btn">Terms of Services</a></span>
        </span>
      
      <span class="float-md-right d-block d-md-inline-block" style=""
          >Copyright &copy; 2022
          <a class="text-bold-800 home-btn"  style="color: #1e88e5">Temporarymail.com</a
          >, All rights reserved.
        </span>
        
      
      </p> -->

  <div class="center-footer">
    
    <p style="margin-bottom: 0px; font-size: 12px; font-weight: bold;">TemporaryMail.com @2022</p>

    <div class="footer-privacy-white">
      <span> <a class="privacy-btn">Privacy Policy</a> |</span>
      <span> <a class="terms-btn">Terms of Service</a></span>
    </div>



  </div>
</footer>

<!-- Modal 1-->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border-radius: 0.1rem 0.1rem 0 0">
        <h5 class="modal-title custom-title" id="exampleModalLabel">
          Change Your Email Address
        </h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="text-align: center">
          Customize temporary email address below. <br />
          You may also
          <a style="color: #1e88e5">view your previous address.</a>
        </p>

        <hr />

        <form action="/" method="POST" id="changeEmailForm">
          <p class="dark-font">Username</p>
          <input
            required=""
            pattern="[a-zA-Z0-9.]+"
            id="selectedEmail"
            maxlength="63"
            placeholder="for example john.smith"
            type="text"
            class="form-control"
          />
        </form>

        <a id="showGenerateButtons" class="mt-10">
          <span class="material-icons"> support_agent </span>
          <span>Help me to select an address</span>
        </a>

        <p style="margin-top: 15px">Domains</p>

        <p style="font-size: 12px">*Free Domains. Available for all users</p>

        <div class="b-select">
          <select class="d-block pix-select my-select">
            <option value="">@AllFreeMail.net</option>
            <option value="">@AppMailer.org</option>
            <option value="">@BasicMail.host</option>
            <option value="">@EasyMailer.live</option>
            <option value="">@EasyOnlineMail.net</option>
            <option value="">@FreeMailOnline.us</option>
            <option value="">@IncorporatedMail.com</option>
            <option value="">@UltraMailnator.com</option>
          </select>
        </div>

        <div style="text-align: center; font-size: 20px">
          <i class="fa fa-chevron-down"></i>

          <div style="font-size: 16px; margin-top: 15px">
            <p>Your Email Address</p>
            <p class="bg-gradient-x-blue myEmail">
              nzwqmsz@frederictonlawyer.com
            </p>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary bg-gradient-x-blue">
          <span class="material-icons" style="margin-right: 5px;">
            change_circle
            </span>
          <span> Change Email</span>
        </button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          <span class="material-icons" style="margin-right: 5px">
            change_circle
            </span>
          <span>Close</span>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- modal 2 -->

<div
  class="modal fade"
  id="exampleModal2"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border-radius: 0.1rem 0.1rem 0 0">
        <h5 class="modal-title custom-title" id="exampleModalLabel">
          Change Your Email Address
        </h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="text-align: center">
          Customize temporary email address below. <br />
          You may also
          <a style="color: #1e88e5">view your previous address.</a>
        </p>

        <hr />

        <form
          style="margin-top: 10px"
          action="/"
          method="POST"
          id="changeEmailForm"
        >
          <p class="dark-font">Username</p>
          <input
            required=""
            pattern="[a-zA-Z0-9.]+"
            id="selectedEmail"
            maxlength="63"
            placeholder="for example john.smith"
            type="text"
            class="form-control"
          />
        </form>

        <a id="showGenerateButtons" class="mt-10">
          <div class="btnContainer">
            <button class="random-button btn btn-primary bg-gradient-x-blue">
              <span class="material-icons"> shuffle </span>

              <span>Random Name</span>
            </button>

            <button class="random-button btn btn-primary" style="margin-top: 10px;">
              <span class="material-icons"> shuffle </span>

              <span style=""> Random Username </span>
            </button>
          </div>
        </a>

        <p style="margin-top: 15px">Domains</p>

        <p style="font-size: 12px">*Free Domains. Available for all users</p>

        <div class="b-select">
          <select class="d-block pix-select my-select">
            <option value="">@AllFreeMail.net</option>
            <option value="">@AppMailer.org</option>
            <option value="">@BasicMail.host</option>
            <option value="">@EasyMailer.live</option>
            <option value="">@EasyOnlineMail.net</option>
            <option value="">@FreeMailOnline.us</option>
            <option value="">@IncorporatedMail.com</option>
            <option value="">@UltraMailnator.com</option>
          </select>
        </div>

        <div style="text-align: center; font-size: 20px">
          <i class="fa fa-chevron-down"></i>

          <div style="font-size: 16px; margin-top: 15px">
            <p>Your Email Address</p>
            <p class="bg-gradient-x-blue myEmail single" style="display:flex; align-items: center; justify-content: center;">
              <span class="material-icons">mail</span>
              <span style="margin-left: 5px;">nzwqmsz@frederictonlawyer.com</span>
              
            </p>
          </div>
        </div>
      </div>

      <div class="modal-footer" style="display: flex; align-items: center;">
        <button type="button" class=" random-button  btn btn-primary bg-gradient-x-blue" style="border:none; width: auto;">
          <span class="material-icons" style="margin-right: 5px;">
            change_circle
            </span>
          <span>Change Email</span>
        </button>

        <button type="button" class="btn btn-secondary btn-red" data-dismiss="modal">
          <span class="material-icons" style="margin-right: 5px">
            cancel
            </span>
          <span>Close</span>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- modal 3 -->
<div
  class="modal fade"
  id="exampleModal3"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="border-radius: 0.1rem 0.1rem 0 0">
        <h5 class="modal-title custom-title" id="exampleModalLabel">
          Your Previous Email Address
        </h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="text-align: center">
          These are your previously used email addressed <br />
          Select one to change back to it.
        </p>

        <hr />

        <div style="text-align: center; font-size: 20px">
          <i class="fa fa-chevron-down"></i>

          <div style="font-size: 16px; margin-top: 15px;">
            <p>Your Email Addresses</p>

            <div class="prev-email-card-container">
              <div class="prev-email-card">
                <p class="myEmail">
                  <span>nzwqmsz@frederictonlawyer.com</span>
                  <span class="email-time">39 minutes ago</span>
                </p>
              
              </div>

              <div class="prev-email-card">
                <p class="myEmail">
                  <span>nzwqmsz@frederictonlawyer.com</span>
                  <span class="email-time">39 minutes ago</span>
                </p>
              </div>

              <div class="prev-email-card">
                <p class="myEmail">
                  <span>nzwqmsz@frederictonlawyer.com</span>
                  <span class="email-time">39 minutes ago</span>
                </p>
              </div>

              <div class="prev-email-card">
                <p class="myEmail">
                  <span>nzwqmsz@frederictonlawyer.com</span>
                  <span class="email-time">39 minutes ago</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">

       
                  
        <button type="button" class="random-button btn btn-primary bg-gradient-x-blue" style="">
          <span style="margin-right: 5px;" class="material-icons">
            keyboard_return
            </span>

            <span>  Return</span>
        </button>
      </div>



    </div>
  </div>
</div>

<script src="/assets/vendors/js/vendors.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.2.2/sweetalert2.min.js"></script>
<script src="/assets/js/plugins/wow/wow.min.js"></script>

<!-- END PAGE VENDOR JS-->

<!-- BEGIN GLOBAL JS-->
<script src="/assets/js/core/app-menu.js"></script>
<script src="/assets/js/core/conf.min.js"></script>
<script src="/assets/js/core/app.js"></script>
