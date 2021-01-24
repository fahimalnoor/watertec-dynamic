<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="text-center">
                    <div class="image">
                        <a href="{{url('/admin')}}"><img src="{{asset('public/backend/assets/img-icon/n.jpg')}}" class="img-circle"></a>
                        <div class="dot"></div>
                        <div class="dropdown-admin">
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Admin
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Admin</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{url('/admin')}}" class="nav-link active">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <i class=""></i>
                                <p>
                                    Logo
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('logo.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Logo</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <i class=""></i>
                                <p>
                                    Slider
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('slider.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Slider Image</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <i class=""></i>
                                <p>
                                    Sections
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.1') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-1 Sliders</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.2') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-2 Sample Products</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.3') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-3 About</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.4') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-4 Gallary</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.5') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-5 Logos</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.6') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-6 Products </p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.7') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-7 Collections</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.8') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-8 Videos</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('section.9') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Section-9 Contacts</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/admin/categories/add')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/subcategories/add')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Sub-Category</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <i class=""></i>
                                <p>
                                    Menu
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('menu.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Menu</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('submenu.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Sub Menu</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <i class=""></i>
                                <p>
                                    Product
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('product.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Product</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('product.manage') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Product</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                               <i class="nav-icon far fa-chart-bar"></i>
                                <i class=""></i>
                                <p>
                                    Blog
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('blog.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Blog</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope-open"></i>
                                <p>
                                    Contact Us
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('contact.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Contact</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>