<aside class="main-sidebar sidebar-ligth-orange elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-orange ">
      <img src="vistas/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="vistas/assets/img/" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Angie Suarez</a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column orange" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="http://localhost/ArTeM02-053/psy/pysichologi/psychologits" class="nav-link <?php if($routerArray[5]=='clientes') : ?> active <?php endif ?>">
                  <i class="nav-icon far fa-user"></i>
                  <p>
                      Clientes
                  </p>
              </a>
            </li>
            
            <li class="nav-item">
                <a href="http://localhost/ArTeM02-053/psy/pysichologi/users" class="nav-link <?php if($routerArray[5]=='users') : ?> active <?php endif ?>">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                       Empleados
                    </p>
                </a>
            </li>
          
           <li class="nav-item">
               <a href="http://localhost/ArTeM02-053/psy/pysichologi/clinicHistori" class="nav-link <?php if($routerArray[5]=='clinicHistori') : ?> active <?php endif ?>">
                   <i class="nav-icon far fa-user"></i>
                   <p>
                       Productos
                   </p>
               </a>
           </li>

           <li class="nav-item">
               <a href="http://localhost/ArTeM02-053/psy/pysichologi/interviews" class="nav-link <?php if($routerArray[5]=='interviews') : ?> active <?php endif ?>">
                   <i class="nav-icon far fa-user"></i>
                   <p>
                       Inventarios
                   </p>
               </a>
           </li>

           <li class="nav-item">
               <a href="http://localhost/ArTeM02-053/psy/pysichologi/psychologits" class="nav-link <?php if($routerArray[5]=='psychologits') : ?> active <?php endif ?>">
                   <i class="nav-icon far fa-user"></i>
                   <p>
                      
                   </p>
               </a>
           </li>

           <li class="nav-item">
               <a href="http://localhost/ArTeM02-053/psy/pysichologi/treatment" class="nav-link <?php if($routerArray[5]=='treatment') : ?> active <?php endif ?>">
                   <i class="nav-icon far fa-user"></i>
                   <p>
                       
                   </p>
               </a>
           </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->