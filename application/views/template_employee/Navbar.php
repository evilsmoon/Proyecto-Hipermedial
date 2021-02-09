 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
   <div class="container">
     <a href="<?php echo base_url('index.php/Employee');?>" class="navbar-brand">
     <img src="<?php echo base_url(); ?>assets/img/favico.png" alt="Kmellando Logo" class="brand-image img-circle elevation-4" style="opacity: .8">
       <span class="brand-text font-weight-light">Kmellando</span>
     </a>
     
     <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse order-3" id="navbarCollapse">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a href="<?php echo base_url('index.php/Employee');?>" class="nav-link">Inicio</a>
         </li>

       </ul>
     </div>

     <!-- Right navbar links -->
     <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

       </li>
         <a href="<?php echo base_url('index.php/');?>Login/cerrar_sesion" class="nav-link">Cerrar Sesion</a>
       </li>

     </ul>
   </div>
 </nav>
 <!-- /.navbar -->