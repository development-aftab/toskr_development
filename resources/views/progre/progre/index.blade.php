@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endpush

@section('content')
     <div class="container-fluid Progress">

        <div class="row">
           <h2>Progress</h2>
          {{--  <div class="col-md-3">
                 <div class="inner_col custom_white_box profile ">
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
           </div> --}}
           <div class="col-md-12">
                <div class="custom_white_box project_timline">
                    <h4>Project Timeline</h4>
                    <img src="{{ asset('website') }}/Progress_graph.png">
                </div>
           </div>
        </div>
        {{-- <div class="custom_white_box mt-4 mb-4">
          <div id="top_x_div" style="width: 100%; height: 500px;"></div>
        </div> --}}
        {{-- <div class="custom_white_box mt-4">
          <h4>Statistics</h4>
            <h5>Today<span class="pull-right">09/10</span></h5>
            <div class="progress">
                <div class="progress-bar" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 90%; background: #14a800;" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
            <h5>This Week<span class="pull-right">10/10</span></h5>
            <div class="progress">
                <div class="progress-bar" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 100%; background: #14a800;" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
            <h5>This Month<span class="pull-right">09/10</span></h5>
            <div class="progress">
                <div class="progress-bar" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 90%; background: #14a800;" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
            <h5>Overtim<span class="pull-right">09/10</span></h5>
            <div class="progress">
                <div class="progress-bar" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 90%; background: #14a800;" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
            <h5>Remaining<span class="pull-right">09/10</span></h5>
            <div class="progress">
                <div class="progress-bar" aria-valuenow="85" aria-valuemin="0"
                    aria-valuemax="100" style="width: 90%; background: #14a800;" role="progressbar"><span class="sr-only">85% Complete (success)</span>
                </div>
            </div>
        </div> --}}





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
          ["2010", 44],
          ["2011", 81],
          ["2012", 12],
          ["2013", 10],
          ['2014', 3],
          ['2015', 3],
          ['2016', 3],
          ['2017', 3],
          ['2018', 3],
          ['2019', 3],
          ['2020', 3],
          ['2021', 3]
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 1550,
          legend: { position: 'none' },
          chart: { title: 'Employee Yearly Status',
                   subtitle: '' },
          bars: 'vertical',
          axes: {
            x: {
              0: { side: 'bottom', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
@endpush