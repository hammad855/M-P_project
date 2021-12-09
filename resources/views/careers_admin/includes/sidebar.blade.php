<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> 
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span> 
                </div>
            </li>                        
           
            <li> 
                <a href="index.html" class="waves-effect active">
                    <i class="linea-icon linea-basic fa-fw" data-icon="v"></i> 
                    <span class="hide-menu"> Dashboard</span>
                </a>
            </li>

            <li> 
                <a href="{{url('/hr-admin/post')}}" class="waves-effect">
                    <i class="linea-icon linea-basic fa-fw" data-icon=">"></i> 
                    <span class="hide-menu"> Post A Job</span>
                </a>
            </li>

            <li> 
                <a href="{{url('/hr-admin/applications')}}" class="waves-effect">
                    <i class="linea-icon linea-basic fa-fw" data-icon="&#xe025;"></i> 
                    <span class="hide-menu"> Users Applied</span>
                </a>
            </li>

            <li> 
                <a href="{{url('/hr-admin/joblisting')}}" class="waves-effect">
                    <i class="linea-icon linea-basic fa-fw" data-icon="u"></i> 
                    <span class="hide-menu">Jobs</span>
                </a>
            </li>
            <li> 
                <a href="{{url('/hr-admin/departments')}}" class="waves-effect">
                    <i class="linea-icon linea-basic fa-fw" data-icon="F"></i> 
                    <span class="hide-menu">Add Department</span>
                </a>
            </li>
            <!-- <li> 
                <a href="{{url('/hr-admin/add_user')}}" class="waves-effect">
                    <i class="linea-icon linea-basic fa-fw" data-icon="F"></i> 
                    <span class="hide-menu">Add User</span>
                </a>
            </li> -->

            <li> 
                <a href="{{url('/hr-admin/users')}}" class="waves-effect">
                    <i class="linea-icon linea-basic fa-fw" data-icon="m"></i> 
                    <span class="hide-menu">User</span>
                </a>
            </li>
        </ul>
    </div>
</div>