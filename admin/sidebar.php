<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-start" href="./">
        <div class="sidebar-brand-icon">
            <?= $_SESSION['user']['role'] . " " . $_SESSION['user']['first_name'] ?>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="./">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Interface</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link 
        <?= $pageName != "productsAdd" ? "collapsed" : null ?> 
        <?= $pageName != "productsAll" ? "collapsed" : null ?> 
        <?= $pageName != "productsCategory" ? "collapsed" : null ?> 
        <?= $pageName != "productsBrands" ? "collapsed" : null ?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="
        <?= $pageName != "productsAdd" ? false : true ?> 
        <?= $pageName != "productsAll" ? false : true ?> 
        <?= $pageName != "productsBrands" ? false : true ?> 
        <?= $pageName != "productsCategory" ? false : true ?>" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Products</span>
        </a>
        <div id="collapseTwo" class="collapse 
        <?= $pageName != "productsAdd" ? null : "show" ?> 
        <?= $pageName != "productsAll" ? null : "show" ?> 
        <?= $pageName != "productsBrands" ? null : "show" ?> 
        <?= $pageName != "productsCategory" ? null : "show" ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item <?= $pageName == "productsAdd" ? "active" : null ?>" href="./productsAdd">Add New</a>
                <a class="collapse-item <?= $pageName == "productsAll" ? "active" : null ?>" href="./productsAll">All</a>
                <a class="collapse-item <?= $pageName == "productsCategory" ? "active" : null ?>" href="./productsCategory">Category</a>
                <a class="collapse-item <?= $pageName == "productsBrands" ? "active" : null ?>" href="./productsBrands">Brands</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Orders</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Blog</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Blog Section:</h6>
                <a class="collapse-item" href="#">Add New</a>
                <a class="collapse-item" href="#">All</a>
                <a class="collapse-item" href="#">Category</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Addons</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Static Pages</h6>
                <a class="collapse-item" href="#">About</a>
                <a class="collapse-item" href="#">Contact</a>
                <a class="collapse-item" href="#">F.A.Q</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Section:</h6>
                <a class="collapse-item" href="#">All Users</a>
                <a class="collapse-item" href="#">Add new user</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>