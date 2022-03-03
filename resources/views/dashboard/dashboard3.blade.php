@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row Progress">
           <h2>Progress</h2>
           <div class="col-md-4">
                 <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid img-circle person-image">
                 <h4>M Omer</h4>
                 <p>2734 West Fork treet,EASTON 02334</p>
                 <div class="icons_box">
                   <span><i class="fa fa-book"></i> 85</span>
                   <span><i class="fa fa-paperclip"></i> 48</span>
                   <span><i class="fa fa-star-o"></i> 4.5</span>
                 </div>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
           </div>
           <div class="col-md-8">
             <h4>Project Timeline</h4>
             
           </div>
        </div>
        <div >
          <h4>Employee Yearly Status</h4>
          <div id="top_x_div" style="width: 900px; height: 500px;"></div>
        </div>
        <div class="custom_white_box mt-4">
          <h4>Statistics</h4>
            <h5>Today<span class="pull-right">09/10</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 90%" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
            <h5>This Week<span class="pull-right">10/10</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 100%" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
            <h5>This Month<span class="pull-right">09/10</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 90%" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
            <h5>Overtim<span class="pull-right">09/10</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-inverse" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 90%" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
            <h5>Remaining<span class="pull-right">09/10</span></h5>
            <div class="progress">
                <div class="progress-bar progress-bar-inverse" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 90%" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
        </div>





    </div>
@endsection

@push('js')
    <script src="{{asset('js/jasny-bootstrap.js')}}"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],
          ["King's pawn (e4)", 44],
          ["Queen's pawn (d4)", 31],
          ["Knight to King 3 (Nf3)", 12],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
@endpush
