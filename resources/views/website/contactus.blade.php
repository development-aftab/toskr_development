@extends('website.layout.master')
@section('content')
<section class="contactus_banner">

    <div class="container custom-container">
        <div class="row">

            <div class="col-md-12 contactus_banner text-center">
                <h1 class="op_h">Contact Us</h1>

            </div>

        </div>

    </div>

</section>


<section class="contactus_hero">

    <div class="container custom-container">
        <div class="row">

            <div class="col-md-12 contactus_hero_heading text-center">
                {{-- <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </h3> --}}




            </div>
            <div class=" col-md-12 contactus_hero_form">
                <form method="POST" action="{{ route('contact_us_process') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control Email" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="Phone#">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="state"  class="form-control" placeholder="State">
                           {{--  <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select> --}}
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="message" class="form-control message" placeholder="Message">
                        </div>
                        <div class="col-md-12">
                            <div class="submit_btn">
                                <button type="submit">Submit</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</section>
@endsection