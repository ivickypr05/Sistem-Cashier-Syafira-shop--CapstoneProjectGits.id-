@extends('layouts.app')

@section('content')

    <br><br><br>
    <style>
        body {
            background-color: rgb(255, 255, 255);
            background-size: cover;
            background-image: no-repeat;
        }
    </style>
    <section class="py-0">
        <div class="container">
            <div class="row" id="profile"></div>

            <div class="banner_section layout_padding">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner">
                      <div class="carousel-item active">
                         <div class="container">
                            <div class="row">
                               <div class="container"><br><br><br><hr>
                                  <h1 class="banner_text"> <p> 
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h1><hr>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
            <div class="container my-5">
                <footer class="text-center text-white ">
                  <div class="container p-3">
                    <section class="">
                      <div class="row">
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                          <div
                               class="bg-image hover-overlay ripple shadow-1-strong rounded"
                               data-ripple-color="light">
                            <img
                                 src="https://i.postimg.cc/gJkmWrKh/1.png"
                                 class="w-100"/>
 
                          </div>
                        </div>
                        
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                          <div
                               class="bg-image hover-overlay ripple shadow-1-strong rounded"
                               data-ripple-color="light">
                            <img
                                 src="https://mdbootstrap.com/img/new/fluid/city/111.jpg"
                                 class="w-100"/>
 
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                          <div
                               class="bg-image hover-overlay ripple shadow-1-strong rounded"
                               data-ripple-color="light" >
                            <img
                                 src="https://mdbootstrap.com/img/new/fluid/city/112.jpg"
                                 class="w-100" />
 
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                          <div
                               class="bg-image hover-overlay ripple shadow-1-strong rounded"
                               data-ripple-color="light" >
                            <img
                                 src="https://mdbootstrap.com/img/new/fluid/city/114.jpg"
                                 class="w-100"/>
 
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                          <div
                               class="bg-image hover-overlay ripple shadow-1-strong rounded"
                               data-ripple-color="light">
                            <img
                                 src="https://mdbootstrap.com/img/new/fluid/city/115.jpg"
                                 class="w-100"/>
 
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                          <div
                               class="bg-image hover-overlay ripple shadow-1-strong rounded"
                               data-ripple-color="light"
                               >
                            <img
                                 src="https://mdbootstrap.com/img/new/fluid/city/116.jpg"
                                 class="w-100"
                                 />
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </footer>
              </div><br><br><br><br>
            <div class="row" id="contact">
                <div class="col-lg-50">
                    <blockquote class="blockquote blockquote-custom p-5 bg-danger shadow rounded">
                        <div class="blockquote-custom-icon bg-dark shadow-sm"><i class="fa fa-quote-left text-light"></i></div>
                        <footer class="site-footer">
                            <div class="container">
                                <div class="col-md pr-md-5 mb-4 mb-md-0 text-light">
                                    <ul class="list-unstyled quick-info mb-4 text-light">
                                    <li><i class="fas fa-location"></i>  Jl. Dwi Pantara, RT.03/RW.01, Argasunya, Kec. Harjamukti, Kota Cirebon, Jawa Barat 45145</a></li>
                                    <li><i class="fa-solid fa-phone"></i>  085294931090</a></li>
                                    <li><i class="fa-solid fa-envelope"></i>  syafira@src.com</a></li>
                                    </ul>
                                    </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0755268190364!2d108.5442965!3d-6.760645099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1de48193cd23%3A0x88cfbe5ae19ff6ea!2sToko%20Safira!5e0!3m2!1sen!2sid!4v1684412941665!5m2!1sen!2sid" 
                                width="980" height="257 " style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </footer>
                    </blockquote>
                </div>
            </div> <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
        </div><br>
        <div class="container text-dark">
            <div class=" align-items-center small">
                <div class="text-center">Copyright &copy; THORNY DEVIL 2023 - All Rights Reserved</div>
            </div>
        </div>
    @endsection
