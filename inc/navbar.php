<nav
      class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark bg-gradient-x-grey-blue navbar-shadow"
    >
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"
                ><i class="ft-menu font-large-1"></i
              ></a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand home-btn"
                ><img
                  class="brand-logo"
                  alt="logo"
                  src="/assets/images/logo.png"
                />

                <h3 class="brand-text">Temporary Mail</h3>
              </a>
            </li>
            <li class="nav-item d-md-none">
              <a
                class="nav-link open-navbar-container"
                data-toggle="collapse"
                data-target="#navbar-mobile"
              >
                <span class="material-icons"> more_vert </span>
              </a>
            </li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block">
                <a
                  class="nav-link nav-menu-main menu-toggle hidden-xs expand-my-side"
                  href="#"
                  ><i class="ft-menu"> </i
                ></a>
              </li>
              <li
                class="dropdown nav-item mega-dropdown"
                style="display: flex; align-items: center; color: #fff"
              >
                <a class="nav-link email-address" style="display: flex" onClick="copyText()">
                  <span
                    style="margin-right: 6px; font-size: 18px"
                    class="material-icons"
                  >
                    mail
                  </span>
                  <span class="genarated-address subtle">
                    nzwqmsz@frederictonlawyer.com
                  </span>
                </a>

                <a class="copy_icon" onclick="copyText()">
                  <span class="material-icons"> copy_all </span>
                </a>

                <a
                  href="#"
                  class="copy_icon"
                  style="margin-left: 5px"
                  data-toggle="modal"
                  data-target="#exampleModal3"
                >
                  <span class="material-icons"> settings </span>
                </a>
              </li>
            </ul>

            <!-- <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-language nav-item">
                <a
                  class="dropdown-toggle nav-link"
                  id="dropdown-flag"
                  href="#"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><i class="flag-icon flag-icon-gb"></i><span>English</span
                  ><span class="selected-language"></span
                ></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <a class="dropdown-item" href="#"
                    ><i class="flag-icon flag-icon-gb"></i> English</a
                  ><a class="dropdown-item" href="#"
                    ><i class="flag-icon flag-icon-fr"></i> French</a
                  ><a class="dropdown-item" href="#"
                    ><i class="flag-icon flag-icon-cn"></i> Chinese</a
                  ><a class="dropdown-item" href="#"
                    ><i class="flag-icon flag-icon-de"></i> German</a
                  >
                </div>
              </li>

              <li class="dropdown dropdown-user nav-item">
                <a
                  class="dropdown-toggle fix-toggle-mobile nav-link dropdown-user-link"
                  href="#"
                  data-toggle="dropdown"
                  ><span class="avatar avatar-online"
                    ><img
                      src="/assets/images/avatar/small-avatar.png"
                      alt="avatar" /><i></i></span
                  ><span class="user-name">John Doe</span></a
                >
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#"
                    ><i class="ft-user"></i> Edit Profile</a
                  ><a class="dropdown-item" href="#"
                    ><i class="ft-mail"></i> My Inbox</a
                  ><a class="dropdown-item" href="#"
                    ><i class="ft-check-square"></i> Task</a
                  ><a class="dropdown-item" href="#"
                    ><i class="ft-message-square"></i> Chats</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"
                    ><i class="ft-power"></i> Logout</a
                  >
                </div>
              </li>
            </ul> -->
          </div>
        </div>
      </div>
    </nav>