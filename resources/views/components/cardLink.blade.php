<div class="col-lg-3 col-md-3 col-sm-1 grid-margin stretch-card">
    <style>
        div.cardM:hover  {color: blue; border-width:3px !important; border-color: red;}
    </style>
    <a href="{{ $link }}">
        <div class="card border-primary mb-3 cardM">
            <div height="120px">
              {{$image}} 
            </div>
            <div class="card-body" >   
                <div class="row">
                    <div class="col-12">
                        <h4>{{$name}}</h4>      
                        <h5>{{$category}}</h5>   
                    </div>                        
                </div>  
            </div>               
        </div>
    </a>
</div> 