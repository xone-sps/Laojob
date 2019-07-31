        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                            	<a class="nav-link" href="{{route('index.admin')}}"> Dashboard</a>        
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fab fa-fw fa-wpforms"></i>Job</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{route::current()->getName() == 'job' ? 'active' : ''}}" href="{{route('job')}}">All job</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ Route('job.add') }}">Add job</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fab fa-fw fa-wpforms"></i>Province</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{route::current()->getName() == 'province.get' ? 'active' : ''}}" href="{{route('province.index')}}">All Province</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Add job</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                                                          <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fab fa-fw fa-wpforms"></i>District</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{route::current()->getName() == 'district.get' ? 'active' : ''}}" href="{{route('district.get')}}">All District</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Add District</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>