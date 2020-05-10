<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active" style="padding-top: 20px;">
                    <a href="{{url('/')}}/admin/category"><i class="menu-icon fa fa-laptop"></i>Danh mục </a>
                </li>
                <li class="menu-title"></li>
                <!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="{{url('/')}}/admin/category" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-bookmark"></i> Danh mục sản phẩm</a>

                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-address-card-o" @if( Request::is('admin/author/*')) active @endif></i>Tác giả</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list-ol"></i><a href="{{url('/')}}/admin/author">Danh sách tác giả</a></li>
                        <li><i class="fa fas fa-plus-circle"></i><a href="{{url('/')}}/admin/author/create">Thêm tác giả</a></li>
                    </ul>
                </li>


                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book" @if( Request::is('admin/product/*')) active @endif></i>Sản phẩm</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list-ol"></i><a href="{{url('/')}}/admin/product">Danh sách sản phẩm</a></li>
                        <li><i class="fa fas fa-plus-circle"></i><a href="{{url('/')}}/admin/product/create">Thêm sản phẩm mới</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs" @if( Request::is('admin/option/*')) active @endif></i>Tùy chỉnh</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list-ol"></i><a href="{{url('/')}}/admin/option">Danh sách tùy chỉnh</a></li>
                        <li><i class="fa fas fa-plus-circle"></i><a href="{{url('/')}}/admin/option/create">Thêm tùy chỉnh</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-comments" @if( Request::is('admin/feedback/*')) active @endif></i>Phản hồi khách hàng</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list-ol"></i><a href="{{url('/')}}/admin/feedback">Danh sách phản hồi</a></li>
                    </ul>
                </li>
                @can('show')
                <li class="menu-item-has-children dropdown @if( Request::is('admin/user/*') || Request::is('admin/user/') ) active @endif">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Thành viên</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="{{url('/')}}/admin/user/create">Thêm thành viên</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('/')}}/admin/user">Danh sách</a></li>
                    </ul>
                </li>
                @endcan
                <li class="menu-item-has-children dropdown @if( Request::is('admin/list/*') || Request::is('admin/list/') ) active @endif">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Khách Hàng</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{url('/')}}/admin/list">Danh sách</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</aside>
