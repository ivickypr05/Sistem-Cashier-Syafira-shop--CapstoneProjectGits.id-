@extends('layouts.app')

@section('content')
    <br><br><br>
    <style>
        body {
            background-color: grey;
        }
    </style>
    <section class="py-2">
        <div class="container">
            <div class="row" id="profile">
                <div class="col-lg-10 mx-auto">
                    <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                        <img src="https://w7.pngwing.com/pngs/522/396/png-transparent-computer-icons-profile-miscellaneous-logo-profile.png"
                            style="width:200px">
                        <div class="blockquote-custom-icon bg-warning shadow-sm"><i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#"
                                class="text-info">@consequat</a>."</p>
                        <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        </footer>
                    </blockquote>
                </div>
            </div>
            <hr><br>
            <div class="row" id="contact">
                <div class="col-lg-50">
                    <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                        <img src="https://w7.pngwing.com/pngs/522/396/png-transparent-computer-icons-profile-miscellaneous-logo-profile.png"
                            style="width:200px">
                        <div class="blockquote-custom-icon bg-warning shadow-sm"><i class="fa fa-quote-left text-white"></i>
                        </div>
                        <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ."</p>

                        </footer>
                    </blockquote>
                </div>
            </div> <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
        </div><br>
        <div class="container">
            <div class=" align-items-center small">
                <div class="text-center">Copyright &copy; THORNY DEVIL 2023</div>
            </div>
        </div>
    @endsection
