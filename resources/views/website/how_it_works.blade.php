@extends('website.layout.master')
 @section('content')
<section class="how_it_works_banner">

    <div class="container custom-container">
        <div class="row">

            <div class="col-md-12 how_it_works_banner_banner text-center">
                <h1 class="op_h">How It Works</h1>

            </div>

        </div>

    </div>

</section>


<section class="how_it_works_hero">

    <div class="container custom-container">
        <div class="row">

            <div class="col-md-6 sec_1_text">
                <h1>{{ $howit->where('id',1)->first()->title }}</h1>
                <p>{{ $howit->where('id',1)->first()->description }}</p>
                <a href="#!"  data-toggle="modal" data-target="#get_started" data-whatever="@mdo">Get Started</a> 
            </div>
            <div class="col-md-6 sec1_img "><img src="{{ asset('website') }}/{{ $howit->where('id',1)->first()->image }}" alt=""></div>



        </div>


    </div>

</section>

<section class="how_it_works_hero_lower">

    <div class="container custom-container">
        <div class="row">




            <div class="col-md-12 how_it_works_hero_lower_h">
                <div class="hiwh_img">
                    <img src="{{ asset('website') }}/{{ $howit->where('id',2)->first()->image }}" alt="" srcset="">

                </div>
                <div class="hiwh_content">

                    <h1>1. {{ $howit->where('id',2)->first()->title }}</h1>
                    <h3>{{ $howit->where('id',2)->first()->description }}</h3>
                </div>




            </div>

            <div class="col-md-12 how_it_works_hero_lower_h">
                <div class="hiwh_img">
                    <img src="{{ asset('website') }}/{{ $howit->where('id',3)->first()->image }}" alt="" srcset="">

                </div>
                <div class="hiwh_content">

                    <h1>2. {{ $howit->where('id',3)->first()->title }}</h1>
                    <h3>{{ $howit->where('id',3)->first()->description }}</h3>
                </div>




            </div>

            <div class="col-md-12 how_it_works_hero_lower_h">
                <div class="hiwh_img">
                    <img src="{{ asset('website') }}/{{ $howit->where('id',4)->first()->image }}" alt="" srcset="">

                </div>
                <div class="hiwh_content">

                    <h1>3. {{ $howit->where('id',4)->first()->title }}</h1>
                    <h3>{{ $howit->where('id',4)->first()->description }}</h3>
                </div>




            </div>


        </div>


    </div>

</section>

  @endsection