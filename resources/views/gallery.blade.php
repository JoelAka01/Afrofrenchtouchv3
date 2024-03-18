@extends('layout.master')

@section('contenu')
          <!--section 1-->
    <section class="espace">

        <h1 class="gallery">
            GALLERY 2024
        </h1>

    </section>

     <!--section 1-->
  
    <section class="container">

        <h2 class="style-h2">MALTA 2023</h2>

        <div class="containerrrr"> 
            
            <img src={{ asset('frontend/assets/photo1.jpg')}} alt="photo 1">
            <img src={{ asset('frontend/assets/photo2.jpg')}} alt="photo 2">
            <img src={{ asset('frontend/assets/photo3.jpg')}} alt="photo 3">
            <img src={{ asset('frontend/assets/photo4.jpg')}} alt="photo 4">
            <img src={{ asset('frontend/assets/photo5.jpg')}} alt="photo 5">
        </div>


        <div class="containerrrr"> 
            
            <img src={{ asset('frontend/assets/photo6.jpg')}}  alt="photo 6">
            <img src={{ asset('frontend/assets/photo7.jpg')}}  alt="photo 7">
            <img src={{ asset('frontend/assets/photo8.jpg')}}  alt="photo 8">
            <img src={{ asset('frontend/assets/photo9.jpg')}}  alt="photo 9">
            <img src={{ asset('frontend/assets/photo10.jpg')}}  alt="photo 10">
            <img src={{ asset('frontend/assets/photo11.jpg')}}  alt="photo 11">


        </div>


    </section>

     <!--section 3-->

    <section class="container">

        <h2 class="style-h2">SKI 2024</h2>


        <div class="containerrrr">

            <img src={{ asset('frontend/assets/photo12.jpg')}} alt="photo 12">
            <img src={{ asset('frontend/assets/photo13.jpg')}} alt="photo 13">
            <img src={{ asset('frontend/assets/photo14.jpg')}} alt="photo 14">
            <img src={{ asset('frontend/assets/photo15.jpg')}} alt="photo 15">
            <img src={{ asset('frontend/assets/photo16.jpg')}} alt="photo 16">
            <img src={{ asset('frontend/assets/photo17.jpg')}} alt="photo 17">
 

        </div>

    </section>

@endsection