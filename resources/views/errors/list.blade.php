@if (count($errors) > 0)
    <div class="alert alert-danger position-fixed text-danger" style="right: 10px;bottom: 10px;z-index: 9999; min-width: 250px">
        <a href="#" class="close position-absolute bg-dark text-white m-0 rounded-left h-100 text-center" style="left: 0px;top: 0px;opacity: 0.8;width: 30px;line-height: 50px;text-decoration: none" data-dismiss="alert" aria-label="close">&times;</a>
        <ul style="margin-bottom: 0rem;">
            @foreach ($errors->all() as $error)
                <li class="w-auto">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
