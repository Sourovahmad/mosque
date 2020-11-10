<!-- Sidebar -->
<ul class="navbar-nav    sidebar sidebar-dark accordion bg-abasas-dark " id="accordionSidebar">

    <!-- Divider -->






    <li class="nav-item active ">
        <a class="nav-link p-3 " href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider m-1 p-0 ">
    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-fw fa-cog  "></i>
            <span>Event</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.event.index') }}">All Events</a>
                <a class="collapse-item" href="{{ route('admin.event.create') }}">New Event</a>
                <a class="collapse-item" href="{{ route('admin.event-category.index') }}">Event Category</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">


    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseSell" aria-expanded="true" aria-controls="collapseSell">
            <i class="fas fa-fw fa-cog"></i>
            <span>Blog</span>
        </a>
        <div id="collapseSell" class="collapse" aria-labelledby="headingSell" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.blog.index') }}">All Blogs </a>
                <a class="collapse-item" href="{{ route('admin.blog.create') }}">New Blog </a>
                <a class="collapse-item" href="{{ route('admin.blog-category.index') }}">Blog Category </a>

            </div>
        </div>
    </li>


    <!-- Divider -->

    <hr class="sidebar-divider m-1 p-0 ">

    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapsePurchase" aria-expanded="true" aria-controls="collapsePurchase">
            <i class="fas fa-fw fa-cog"></i>
            <span>Committee</span>
        </a>
        <div id="collapsePurchase" class="collapse" aria-labelledby="headingPurchase" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ route('admin.committee.index') }}">Committee </a>
                <a class="collapse-item" href="{{ route('admin.designation.index') }}">Designation </a>

            </div>
        </div>
    </li>


    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="{{ route('admin.salat.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Salat</span></a>
    </li>


    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
        <a class="nav-link p-3 " href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>user</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->