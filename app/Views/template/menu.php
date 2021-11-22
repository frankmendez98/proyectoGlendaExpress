<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header center">
                        <div class="dropdown profile-element">
                            <img alt="image" class="img_template" src="<?=base_url();?>/assets/img/logofav.jpg"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Francisco Mendez</span>
                                <span class="text-muted text-xs block">Administrador <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="<?=base_url();?>inicio">Inicio</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?=base_url(route_to('logout'));?>">Salir</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="">
                        <a href="<?=base_url(route_to('tienda_dashboard'));?>"><i class="fa fa-cart-plus"></i> <span class="nav-label">Ir a Tienda</span> <span class="fa arrow"></span></a>
                        
                    </li>
                    <li class="">
                        <a href="index.html"><i class="fa fa-user "></i> <span class="nav-label">Categorias</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?=base_url(route_to('categorias'));?>">Administrar</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="index.html"><i class="fa fa-user "></i> <span class="nav-label">Clientes</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?=base_url(route_to('clientes'));?>">Administrar</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="index.html"><i class="fa fa-briefcase "></i> <span class="nav-label">Paquetes</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?=base_url(route_to('paquetes'));?>">Administrar</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="index.html"><i class="fa fa-truck "></i> <span class="nav-label">Ordenes Online</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?=base_url(route_to('paquetes_online'));?>">Administrar</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li style="padding: 20px">
                    <span class="m-r-sm text-muted welcome-message">Bienvenido a Sistema.</span>
                </li>
                <li>
                    <a href="<?=base_url(route_to('logout'));?>">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>

        </nav>
        </div>
