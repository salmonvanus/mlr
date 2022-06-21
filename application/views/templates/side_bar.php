 <div class="page-wrapper">
     <div class="page-wrapper-inner">

         <!-- Left Sidenav -->
         <div class="left-sidenav">
             <ul class="metismenu left-sidenav-menu" id="side-nav">
                 <li class="menu-title">Main</li>
                 <li class="<?php if ($this->uri->segment(3) == 'Beranda') {
                                echo 'active';
                            } ?>">
                     <a href="<?= base_url('admin/Beranda'); ?>"><i class="mdi mdi-desktop-mac-dashboard"></i><span class="">Beranda</span></a>
                 </li>

                 <li class="<?php if ($this->uri->segment(3) == 'DataMaster') {
                                echo 'active';
                            } ?>">
                     <a href="<?= base_url('admin/DataMaster'); ?>"><i class="mdi mdi-book-open-page-variant"></i><span class="">Data Master</span></a>
                 </li>
             </ul>
         </div>
         <!-- end left-sidenav-->