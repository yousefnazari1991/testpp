@if(Session::has('flash_message'))
    <div class="position-relative" style="min-width: 250px;">
        <div class="alert alert-success position-fixed" style="right: 10px;bottom: 10px;z-index: 9999;">
            <a href="#" class="close position-absolute bg-dark text-white m-0 rounded-left h-100 text-center" style="left: 0px;top: 0px;opacity: 0.8;width: 30px;line-height: 50px;text-decoration: none" data-dismiss="alert" aria-label="close">&times;</a>
            <em> {!! session('flash_message') !!}</em>
            <i class="fa fa-check-circle text-success"></i>
        </div>
    </div>
@endif

