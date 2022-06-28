<div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
  <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
  <ul class="br-sideleft-menu">
    <li class="br-menu-item">
      <a href="index.html" class="br-menu-link active">
        <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
        <span class="menu-item-label">Dashboard</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->

    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">User Mangement</label>

     <!-- Brand Menu start -->
     <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Manage Users</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          {{-- <li class="sub-item"><a href="{{ route('brand.create') }}" class="sub-link">Add New user</a></li> --}}
          <li class="sub-item"><a href="{{ route('user.manage') }}" class="sub-link">Manage All Users</a></li>
      </ul>
   </li>
     <!-- Brand Menu End -->

    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Product Mangement</label>


   <!-- Brand Menu start -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub">
        <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
        <span class="menu-item-label">Manage Brands</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{ route('brand.create') }}" class="sub-link">Add New brand</a></li>
        <li class="sub-item"><a href="{{ route('brand.manage') }}" class="sub-link">Manage All Brand</a></li>
    </ul>
 </li>
   <!-- Brand Menu End -->

      <!-- Category Menu start -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Manage Category</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('category.create') }}" class="sub-link">Add New category</a></li>
          <li class="sub-item"><a href="{{ route('category.manage') }}" class="sub-link">Manage All Categories</a></li>
      </ul>
   </li>
     <!-- Category Menu start -->


        <!-- product Menu start -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">Manage Product</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item"><a href="{{ route('product.create') }}" class="sub-link">Add New Product</a></li>
              <li class="sub-item"><a href="{{ route('product.manage') }}" class="sub-link">Manage All Products</a></li>
          </ul>
       </li>
         <!-- product Menu start -->

    </ul>



  {{-- <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label> --}}



  <br>
</div><!-- br-sideleft -->
