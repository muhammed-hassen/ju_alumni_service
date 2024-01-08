@if(session("success"))
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{session("success")}}
</div>
@endif

@if(session("error"))
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    There is/are some error in  your input
</div>
@endif
@if(count($errors)>0)
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        There is/are some error in  your input
    </div>
@endif