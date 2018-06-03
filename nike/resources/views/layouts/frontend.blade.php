<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Nike Project</title>
    </head>

    <body id="home">
   
                  
                  
     
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top mt-0 ">
          <div class="container">
             <a href="index.html" class="navbar-brand">
              <img  src="img/logo.jpg" width="120" height="60" alt="">
                   <h3 class="d-inline align-middle"></h3></a>  <!-- MAKE a IMG NEW IMG --> 
              <button class="navbar-toggler" data-toggle='collapse' data-target="#navbarNav">
                  <span class="navbar-toggler-icon">
                      
                  </span>
              </button>
              <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item px-2">
                          <a href="{{url('/')}}" class="nav-link active">Home</a>
                      </li>
                      <li class="nav-item px-2">
                          <a href="{{route('men')}}" class="nav-link">Men</a>
                      </li>
                      <li class="nav-item px-2">
                          <a href="{{route('women')}}" class="nav-link">Woman</a>
                      </li>
                      <li class="nav-item px-2">
                          <a href="{{route('kids')}}" class="nav-link">Kids</a>
                      </li>
                  </ul>
              
                   <ul class="navbar-nav ml-auto">
                        @if(Auth::guest())
                      <li class="nav-item dropdown mr-3">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                          <div class="dropdown-menu">
                    
                              <a href="{{route('register1')}}" class="dropdown-item"><i class="fa fa-user-circle"></i>Register</a>
                       
                               <a href="{{route('login1')}}" class="dropdown-item"><i class="fa fa-gear"></i>Login</a>
                                 @else

                                 <li class=" nav-item dropdown mr-3">
                               {{ Auth::user()->name }}
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="caret"></span>
                                </a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                              @endif
                          </div>
                       <li class="nav-item">
                          <div class="input-group">
                    <input name="search" type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-light">Search</button>
                    </span>
                   </div>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
@yield('content')
    <div class="row">
       
        <div class="col-sm-12 m-auto">

        <!-- Carousel -->
        
        <div id="slider4" class="carousel slide  " data-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-target="#slider4" data-slide-to="0"></li>
            <li data-target="#slider4" data-slide-to="1"></li>
            <li data-target="#slider4" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid carousel-img" src="img/banner1.jpg" alt="First Slide" width="100%">
              <div class="carousel-caption d-none d-md-block">
                <h3>Slide One</h3>
                <p>.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/banner2.jpg" alt="Second Slide" width="100%">
              <div class="carousel-caption d-none d-md-block ">
                <h3>Slide Two</h3>
                <p ></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid img-overlay" src="img/banner3.jpg" alt="Third Slide" width="100%">
              <div class="carousel-caption d-none d-md-block">
                <h3>Slide Three</h3>
                <p>.</p>
              </div>
            </div>
          </div>
          <a href="#slider4" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>

          <a href="#slider4" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
    
     <!--- NEW COLLECTION -->
       
         <section id="new-collection-section">
             <div class="container">
                 <div class="row">
                     <div class="col text-center">
                         <div class="py-5">
                             <h1 class="display-4">NEW COLLECTION</h1>
                             <p class="lead">
                                
                             </p>
                             <a href="#" class="btn btn-secondary">Find Out More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section> 
         
        
                <!-- MAN -->          
<section id="men">
    <div class="dark-overlay">
      <div class="home-inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-lg-block">
              <h1 class="display-4"><strong></strong> <strong></strong></h1>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                 
                </div>
              </div>

              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                 
                </div>
              </div>

              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
     
     
      <!-- WOMAN -->               
<section id="woman">
    <div class="dark-overlay">
      <div class="home-inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 d-lg-block">
              <h1 class="display-4"> <strong></strong>  <strong></strong></h1>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                
                </div>
                <div class="p-4 align-self-end">
                 
                </div>
              </div>

              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  
                </div>
                <div class="p-4 align-self-end">
               
                </div>
              </div>

              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  
                </div>
                <div class="p-4 align-self-end">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

          <!-- KIDS -->               
<section id="kids">
    <div class="dark-overlay">
      <div class="home-inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-8  d-lg-block">
              <h1 class="display-4">Airmax <strong>better</strong> than <strong>others</strong></h1>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                
                </div>
              </div>

              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                  
                </div>
                <div class="p-4 align-self-end">
                  
                 
                </div>
              </div>

              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
                                                                              
          
     <!--- SALES -->
       
         <section id="sales-section">
             <div class="container">
                 <div class="row">
                     <div class="col text-center">
                         <div class="py-5">
                            <h1 class="display-4">Sales</h1>
                             <p class="lead">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex hic fuga odit, velit recusanda.
                             </p>
                             <a href="#" class="btn btn-secondary">Find Out More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>           
                     @yield('page')
  
       <!---Footer -->
       <footer id="main-footer" class="py-5 bg-dark text-white">
               <div class="container">
                   <div class="row text-center">
                     
                       <div class="col-md-6 mr-auto">
                           <ul class="list-unstyled"> 
                          <li class="px-2">
                          <a href="index.html" class="nav-link text-white ">Home</a>
                         </li>
                        <li class="px-2">
                          <a href="men.html" class="nav-link text-white">Men</a>
                         </li>
                          <li class=" px-2">
                          <a href="#woman" class="nav-link text-white">Woman</a>
                           </li>
                          <li class=" px-2">
                          <a href="#kids" class="nav-link text-white">Kids</a>

                           </ul>
                       </div>
                         <div class="col-md-6 ml-auto ">
                         <ul class="list-unstyled">
                             <li>
                                 <a class="btn btn-social-icon btn-twitter">
                                   <span class="fa fa-twitter"></span>
                                 </a>
                             </li>
                             <li>
                                 <a class="btn btn-social-icon btn-facebook">
                                   <span class="fa fa-facebook"></span>
                                 </a>
                             </li>
                         </ul>
                          <button class="btn btn-success px-3 mb-2" data-toggle="modal" data-target="#contactModal">Contact Us</button>
                           <button class="btn btn-success px-3 mb-2" data-toggle="modal" data-target="#AboutModal">About Us</button>
                          
                          
                           <p class="lead">Copyright &copy; 2018</p>
                       </div>
                   </div>
               </div>
           </footer> 
           
        <!--- CONTACT US MODAL -->   
            
        <div class="modal fade text-dark" id="contactModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalTitle">Contact US</h5>
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- ABOUT -->
        <div class="modal fade text-dark" id="AboutModal">
           <div class="modal-dialog">
           <div id="creators" class="my-5 text-center">
           <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                           <div class="modal-header">
                        <h5 class="modal-title" id="contactModalTitle">About US</h5>
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/edi.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                                <h3>Edi Valentinov</h3>
                                <h5 class="text-muted">CodeGuru</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quasi?</p>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="#" class=""><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="p-4">
                                         <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="p-4">
                                         <a href="#" class=""><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                           <div class="card">
                            <div class="card-body">
                                <img src="img/ilian.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                                <h3>Ilian Vasilev</h3>
                                <h5 class="text-muted">CodeGuru</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat id odit optio mollitia doloremque ipsum nulla commodi tempora eveniet sit.</p>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-4">
                                        <a href="#" class=""><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="p-4">
                                         <a href="#" class=""><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="p-4">
                                         <a href="#" class=""><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
                 <div class="modal-footer">
                        <h1 class="display-4"><strong>Thanks </strong>for visiting <strong>us </strong></h1>
                    </div>
            </div>
            </div>
        </div> 
        </div>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script>
    $('.carousel').carousel({
      interval:3000,
      keyboard: true,
      pause:'hover',
      wrap:true
    });

    $('#slider4').on('slide.bs.carousel', function(){
      console.log('slide');
    });
    $('#slider4').on('slid.bs.carousel', function(){
      console.log('slid');
    });
  </script>
    </body>
</html>