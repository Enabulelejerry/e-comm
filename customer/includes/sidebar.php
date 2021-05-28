<div class="card sidebar-menu mb-3"><!-- card sidebar-menu begin -->
    <div class="card-header"><!-- card-header begin -->
        <center><!-- center begin -->
            <img src="customer_images/chelsea.jpg" class="img-fluid">
        </center><!-- center end -->
        <h3  class="card-title text-center">
            Name: Miss Bella
        </h3>
    </div><!-- card-header end -->
    <div class="card-body"><!-- card-body begin -->
        <ul class="list-group"><!-- list-group begin -->
           <li class="<?php if(isset($_GET['my_orders'])){echo'active';} ?> list-group-item list-group-item-action">
               <a href="my_account.php?my_orders" class="text-dark">
                   <i class="fa fa-list"></i> My Orders
               </a>
           </li>
           <li class="<?php if(isset($_GET['pay_offline'])){echo'active';} ?> list-group-item list-group-item-action">
               <a href="my_account.php?pay_offline" class="text-dark">
                   <i class="fa fa-bolt"></i> Pay Offline
               </a>
           </li>  
           <li class="<?php if(isset($_GET['edit_account'])){echo'active';} ?> list-group-item list-group-item-action">
               <a href="my_account.php?edit_account" class="text-dark">
                   <i class="fa fa-edit"></i> Edit Account
               </a>
           </li> 
           <li class="<?php if(isset($_GET['change_pass'])){echo'active';} ?> list-group-item list-group-item-action">
               <a href="my_account.php?change_pass" class="text-dark">
                   <i class="fa fa-user"></i> Change Password
               </a>
           </li> 
           <li class="<?php if(isset($_GET['delete_account'])){echo'active';} ?> list-group-item list-group-item-action">
               <a href="my_account.php?delete_account" class="text-dark">
                   <i class="fa fa-trash"></i> Delete Account
               </a>
           </li> 
           <li class="list-group-item list-group-item-action">
               <a href="logout.php" class="text-dark">
                   <i class="fa fa-sign-out-alt"></i> Logout
               </a>
           </li>
        </ul><!-- list-group end -->
    </div><!-- card-body end -->
</div><!-- card sidebar-menu ends -->