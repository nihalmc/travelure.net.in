<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="Dashboard">

    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">



    <title>Travelure.Tours  - Admin Panel--</title>



    <!-- Bootstrap core CSS -->

    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet">

    <!--external css-->

    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/zabuto_calendar.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/sweetalert.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/gritter/css/jquery.gritter.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/lineicons/style.css') }}">

     <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/jquery.dataTables.css') }}">

      <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/default.css') }}">



    <!-- Custom styles for this template -->

    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet">



    <script src="{{ asset('admin/js/chart-master/Chart.js') }}"></script>

    <script src="{{ asset('admin/js/jquery.js') }}"></script>

     <script src="{{ asset('admin/js/jquery.1.9.1.min.js') }}"></script>

     <script type="text/javascript" src="{{ asset('admin/js/gritter/js/jquery.gritter.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/gritter-conf.js') }}"></script>

        <script type="text/javascript" src="{{ asset('admin/js/sweetalert.min.js') }}"></script>

  </head>



  <body>



  <section id="container" >

      <!-- **********************************************************************************************************************************************************

      TOP BAR CONTENT & NOTIFICATIONS

      *********************************************************************************************************************************************************** -->

      <!--header start-->

      <header class="header black-bg">

              <div class="sidebar-toggle-box">

                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>

              </div>

            <!--logo start-->

            <a href="" class="logo"><b>Travelure.Tours </b></a>

            <!--logo end-->



            <div class="top-menu">

            	<ul class="nav pull-right top-menu">

                    <li> <form class="form-inline" method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button class="btn btn-dark logout" type="submit">Logout</button>
                    </form>
                </li>

            	</ul>

            </div>

        </header>

      <!--header end-->



      <!-- **********************************************************************************************************************************************************

      MAIN SIDEBAR MENU

      *********************************************************************************************************************************************************** -->

      <!--sidebar start-->

      <aside>

          <div id="sidebar"  class="nav-collapse ">

              <!-- sidebar menu start-->

              <ul class="sidebar-menu" id="nav-accordion">




              	  <h5 class="centered"></h5>
                      <li class="sub-menu">

                      <a href="" >

                          <i class="fa fa-file-text"></i>

                          <span>Home slider</span>

                      </a>

                      <ul class="sub">


                          <li><a  href="{{ route('homesliders.create') }}">Add </a></li>

                          <li><a  href="{{ route('homesliders.index') }}">List </a></li>






                      </ul>

                  </li>


   <li class="sub-menu">

                 <a href="{{ route('abouts.edit') }}" >

                          <i class="fa fa-file-text"></i>

                          <span>About Us </span>

                      </a>
                      </li>


                      <li class="sub-menu">

                      <a href="javascript:;" >

                         <i class="fa fa-users"></i>

                          <span>Hotels</span>

                      </a>

                      <ul class="sub">


                            <li class="sub-menu"><a  href="{{ route('destination.index') }}">
                             <span>Destinations</span>
                             </a>


                             </li>
                             <li class="sub-menu"><a  href="javascript:;">
                             <span>Hotels/Resorts</span>
                             </a>
                             <ul class="sub">
                             <li><a  href="{{ route('hotels.create') }}">Add </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('hotels.index') }}">List </a></li>
                             </ul>
                              <ul class="sub">
                             <li><a  href="{{ route('galleries.index') }}">Gallery </a></li>
                             </ul>
                             </li>





                      </ul>

                  </li>









                   <li class="sub-menu">

                      <a href="javascript:;" >

                         <i class="fa fa-users"></i>

                          <span>Tour Packages</span>

                      </a>

                      <ul class="sub">
                                 <li class="sub-menu"><a  href="javascript:;">
                             <span>Kerala Tour Packages </span>
                             </a>
                             <ul class="sub">
                             <li><a  href="{{ route('kpackage_types.show') }}">Kerala Package types </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('keralapackages.create')}}">Add </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('keralapackages.index')}}">List </a></li>
                             </ul>
                              <ul class="sub">
                             <li><a  href="{{ route('packagegalleries.display')}}">Gallery </a></li>
                             </ul>
                             </li>

                             </li>
                             <li class="sub-menu"><a  href="javascript:;">
                             <span>Ayurveda Packages </span>
                             </a>
                              <ul class="sub">
                             <li><a  href="{{ route('Ayupackage_types.show') }}">Ayurveda Package types </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('ayurvedapackages.create') }}">Add </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('ayurvedapackages.index') }}">List </a></li>
                             </ul>
                              <ul class="sub">
                             <li><a  href="{{ route('ayurvedapackagegalleries.display') }}">Gallery </a></li>
                             </ul>
                             </li>
                             </li>


                             <li class="sub-menu"><a  href="javascript:;">
                             <span>InternationalL Tour Packages </span>
                             </a>
                              <ul class="sub">
                             <li><a  href="{{ route('kinternationaltype.show') }}">International Package types </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('internationalpackages.create') }}">Add </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('internationalpackages.index') }}">List </a></li>
                             </ul>
                              <ul class="sub">
                             <li><a  href="{{ route('internationalgalleries.display') }}">Gallery </a></li>
                             </ul>
                             </li>

                             </li>
                             <li class="sub-menu"><a  href="javascript:;">
                             <span>Kerala HouseBoats Packages </span>
                             </a>
                              <ul class="sub">
                             <li><a  href="{{ route('khouseboatspackages.show') }}">Kerala HouseBoats Package types </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('houseboatspackages.create') }}">Add </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('houseboatspackages.index') }}">List </a></li>
                             </ul>
                              <ul class="sub">
                             <li><a  href="{{ route('houseboatspackagesgalleries.display') }}">Gallery </a></li>
                             </ul>
                             </li>

                             </li>
                             <li class="sub-menu"><a  href="javascript:;">
                             <span>Students Tour Packages </span>
                             </a>
                              <ul class="sub">
                             <li><a  href="{{ route('kstudentspackages.show') }}">Students Package types </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('studentspackages.create') }}">Add </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('studentspackages.index') }}">List </a></li>
                             </ul>
                              <ul class="sub">
                             <li><a  href="{{ route('studentsgalleries.display') }}">Gallery </a></li>
                             </ul>
                             </li>

                             </li>
                             <li class="sub-menu"><a  >
                             <span>Kalari Tour Packages </span>
                             </a>
                              <ul class="sub">
                             <li><a  href="{{ route('kkalaripackages.show') }}">Kalari Package types </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('kalaripackages.create') }}">Add </a></li>
                             </ul>
                             <ul class="sub">
                             <li><a  href="{{ route('kalaripackages.index') }}">List </a></li>
                             </ul>
                              <ul class="sub">
                             <li><a  href="{{ route('kalarigalleries.display') }}">Gallery </a></li>
                             </ul>
                             </li>

                             </li>






                      </ul>

                  </li>



 <li class="sub-menu">

                 <a href="{{ route('testimonials.index')}}" >

                          <i class="fa fa-file-text"></i>

                          <span>Testimonials </span>

                      </a>
                      </li>

                       <li class="sub-menu">

                 <a href="{{ route('career.edit')}}" >

                          <i class="fa fa-file-text"></i>

                          <span> Career </span>

                      </a>
                      </li>



                  <li class="sub-menu">

                      <a href="{{ route('change.password.form') }}" >



                          <span>Change Password </span>

                      </a>
                      </li>




              </ul>


              <!-- sidebar menu end-->

          </div>

      </aside>

      <!--sidebar end-->



      <!-- **********************************************************************************************************************************************************

      MAIN CONTENT

      *********************************************************************************************************************************************************** -->

      <!--main content start-->

      <section id="main-content">

          <section class="wrapper">

            @yield('content')

        </section>
    </section>

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
           Travelure.tours
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

   <!-- js placed at the end of the document so the pages load faster -->


  <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/js/jquery.sparkline.js') }}"></script>


  <!--common script for all pages-->
  <script src="{{ asset('admin/js/common-scripts.js') }}"></script>



  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!--script for this page-->
  <script src="{{ asset('admin/js/sparkline-chart.js') }}"></script>
  <script src="{{ asset('admin/js/zabuto_calendar.js') }}"></script>

 

  <script type="application/javascript">
      $(document).ready(function () {





          $("#date-popover").popover({html: true, trigger: "manual"});
          $("#date-popover").hide();
          $("#date-popover").click(function (e) {
              $(this).hide();
          });

          $("#my-calendar").zabuto_calendar({
              action: function () {
                  return myDateFunction(this.id, false);
              },
              action_nav: function () {
                  return myNavFunction(this.id);
              },
              ajax: {
                  url: "show_data.php?action=1",
                  modal: true
              },
              legend: [
                  {type: "text", label: "Special event", badge: "00"},
                  {type: "block", label: "Regular event", }
              ]
          });
      });


      function myNavFunction(id) {
          $("#date-popover").hide();
          var nav = $("#" + id).data("navigation");
          var to = $("#" + id).data("to");
          console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
      }
  </script>
 {{-- <script type='text/javascript'>alert('')</script>"; --}}




</body>
</html>
