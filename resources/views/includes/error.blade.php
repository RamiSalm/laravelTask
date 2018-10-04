@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger" style='display: flow-root;'>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Oh snap!</strong> {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-dismissible alert-success" style='display: flow-root;'>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Well done!</strong>{{session('success')}}
    </div>
@endif
   
@if(session('error'))
    <div class="alert alert-dismissible alert-warning" style='display: flow-root;'>
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>We face some error try again</strong>{{session('error')}}
    </div>
@endif
    