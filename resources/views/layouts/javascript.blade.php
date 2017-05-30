<!--[if lt IE 9]>
<script src="{{asset('plugins/respond.min.js')}}"></script>
<script src="{{asset('plugins/excanvas.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/jQuery/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('plugins/jQuery/jquery-1.11.1.min.js')}}"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="{{asset('plugins/jQuery/jquery-2.1.1.min.js')}}"></script>
<!--<![endif]-->
<!-- end: START JAVASCRIPTS -->
<script src="{{asset('plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/blockUI/jquery.blockUI.js')}}"></script>
<script src="{{asset('plugins/iCheck/jquery.icheck.min.js')}}"></script>
<script src="{{asset('plugins/moment/min/moment.min.js')}}"></script>
<script src="{{asset('plugins/perfect-scrollbar/src/jquery.mousewheel.js')}}"></script>
<script src="{{asset('plugins/perfect-scrollbar/src/perfect-scrollbar.js')}}"></script>
<script src="{{asset('plugins/bootbox/bootbox.min.js')}}"></script>
<script src="{{asset('plugins/jquery.scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/ScrollToFixed/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset('plugins/jquery.appear/jquery.appear.js')}}"></script>
<script src="{{asset('plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('plugins/velocity/jquery.velocity.min.js')}}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<script src="{{asset('plugins/toastr/toastr.js')}}"></script>
<script src="{{asset('plugins/bootstrap-modal/js/bootstrap-modal.js')}}"></script>
<script src="{{asset('plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}"></script>
<script src="{{asset('plugins/bootstrapswitch/dist/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@yield('scripts')
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE JAVASCRIPTS  -->
<script src="{{asset('js/main.js')}}"></script>
<!-- end: CORE JAVASCRIPTS  -->
<script>
    jQuery(document).ready(function() {
        Main.init();
    });
</script>