@extends('layouts.master')

@push('css')
    <link href="{{asset('plugins/components/switchery/dist/switchery.min.css')}}" rel="stylesheet" />

@endpush

@section('content')
    <div class="container-fluid Notification">
    	<h2> Setting </h2>
        <div class="row custom_white_box">
        	<div class="col-md-12">
        		<h4>Notification</h4>
        		<form>
        			
        			<div class="form-group switchery-demo mb-3">
        			  <label>Show Notification 1</label>
        			   <input type="checkbox" checked class="js-switch" data-color="#fff3e7" data-size="small" />
					</div>
					 
					<div class="form-group switchery-demo mb-3">
        			 <label>Show Notification 2</label>
        			  <input type="checkbox" checked class="js-switch" data-color="#fff3e7" data-size="small" />
					</div>
					
					<div class="form-group switchery-demo mb-3">
        			  <label>Show Notification 3</label>
        			   <input type="checkbox" checked class="js-switch" data-color="#fff3e7" data-size="small" />
					</div>
        		</form>
        	</div>
        </div>




    </div>
@endsection

@push('js')
    <script src="{{asset('plugins/components/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('plugins/components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });

        });
    </script>
@endpush

