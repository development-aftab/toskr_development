@extends('website.layout.master')
@section('content')
<section class="faq_banner">

    <div class="container custom-container">
        <div class="row">

            <div class="col-md-12 faq_banner text-center">
                <h1 class="op_h">Frequently Asked Questions</h1>

            </div>

        </div>

    </div>

</section>

<section class="faq_hero">

    <div class="container custom-container">
        <div class="row">

            <div class="col-md-12 faq_hero_heading text-center">
                {{-- <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore --}}
                    {{-- et dolore magna aliqua. </h3> --}}


            </div>
            <div class="col-md-12 faq_hero_accordians text-center ac_col_1">

<div class="accordion" id="accordion">
    @foreach ($faq as $element)
       <div class="card">
            <div class="card-header ">
                <a class="card-link text-dark accordian_content collapsed" id="accordian_toggler" data-toggle="collapse" href="#collapse{{$element->id}}" aria-expanded="false"><span class="float-right"><i class="fas fa-chevron-down"></i></span>
                    <p>{{ $element->question }}</p>

                </a>
            </div>
            <div id="collapse{{$element->id}}" class="collapse" data-parent="#accordion" style="">
                <div class="card-body">
                    {{ $element->answer }}
                </div>
            </div>
        </div>
    @endforeach



</div>

</div>

        </div>

    </div>

</section>
@endsection