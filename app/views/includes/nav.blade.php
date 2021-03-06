
<body onload="set_interval()"
onmousemove="reset_interval()"
onclick="reset_interval()"
onkeypress="reset_interval()"
onscroll="reset_interval()">


    

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"  >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand"  href="{{ URL::to('dashboard')}}" > <font color='blue'><b>{{Organization::getOrganizationName()}}</b></font></a>
            </div>
            <!-- /.navbar-header -->

        

            <ul class="nav navbar-top-links navbar-right">
         
               
                
               

                 

                <li  >
                    <a  href="{{ URL::to('dashboard')}}">
                        <i class="fa fa-home fa-fw"></i>  {{{ Lang::get('messages.nav.dashboard') }}}
                    </a>
                    
                </li>



                 <li  >
                    <a  href="{{ URL::to('morgue')}}">
                        <i class="fa fa-list fa-fw"></i>  {{{ Lang::get('messages.nav.morgue') }}}
                    </a>
                    
                </li>


                <li  >
                    <a  href="{{ URL::to('payrollmgmt')}}">
                        <i class="fa fa-file fa-fw"></i>  {{{ Lang::get('messages.nav.payroll') }}}
                    </a>
                    
                </li>


                <li  >
                    <a  href="{{ URL::to('leavemgmt')}}">
                        <i class="fa fa-list fa-fw"></i>  {{{ Lang::get('messages.nav.leave') }}}
                    </a>
                    
                </li>

<!--

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-file fa-fw"></i>  {{{ Lang::get('messages.nav.payroll_leave') }}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li  >
                    <a  href="{{ URL::to('payrollmgmt')}}">
                        <i class="fa fa-file fa-fw"></i>  {{{ Lang::get('messages.nav.payroll') }}}
                    </a>
                    
                </li>

                       
                        <li class="divider"></li>
                        <li  >
                    <a  href="{{ URL::to('leavemgmt')}}">
                        <i class="fa fa-list fa-fw"></i>  {{{ Lang::get('messages.nav.leave') }}}
                    </a>
                    
                </li>

                       

                        
                        
                    </ul>
                    <!-- /.dropdown-user
                </li>
                <!-- /.dropdown -->


                <!-- 

                <li  >
                    <a  href="{{ URL::to('erpmgmt')}}">
                        <i class="fa fa-tasks fa-fw"></i>  {{{ Lang::get('messages.nav.erp') }}}
                    </a>
                    
                </li>
-->

<!--

                <li  >
                    <a  href="{{ URL::to('cbsmgmt')}}">
                        <i class="fa fa-qrcode fa-fw"></i>  {{{ Lang::get('messages.nav.cbs') }}}
                    </a>
                    
                </li>

-->

                 

                 <li  >
                    <a  href="{{ URL::to('accounts')}}">
                        <i class="fa fa-file fa-fw"></i>  {{{ Lang::get('messages.nav.accounting') }}} 
                    </a>
                    
                </li>

                

               

                

               <li class="dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-cogs fa-fw"></i>  {{{ Lang::get('messages.nav.administration') }}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ URL::to('organizations') }}"><i class="fa fa-home fa-fw"></i>  Organization</a>
                             <li class="divider"></li>
                       
                        <li><a href="{{ URL::to('system') }}"><i class="fa fa-sign-out fa-fw"></i> System</a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->




                
                

           

                



                


                <!-- /.dropdown -->
               
                <li class="dropdown" style="background-color:white;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  {{ Confide::user()->username}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ URL::to('users/profile/'.Confide::user()->id ) }}"><i class="fa fa-user fa-fw"></i>  Profile</a>
                        </li>

                       
                        <li class="divider"></li>
                        <li><a href="{{ URL::to('users/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>


                       

                        
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->


                <li>
                    

                        
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                       
                        


                        @if (Session::get('lang') == 'ks')
                            Kiswahili
                        @elseif (Session::get('lang') == 'en')
                            English
                        @else
                           Language
                        @endif 


                         <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>

                            {{link_to_route('language.select', 'English', array('en'))}}

                        </li>

                       
                        <li class="divider"></li>

                         <li>

                            {{link_to_route('language.select', 'Kiswahili', array('ks'))}}

                        </li>

                       
                        <li class="divider"></li>
                        


                       

                        
                        
                    </ul>

                    

                   

                </li>


                
            
            </ul>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
