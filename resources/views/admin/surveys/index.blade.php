@extends('layouts.admin')

@section('title')
Surveys
@endsection

@section('content')
<!-- partial -->
<script type="text/javascript" src="{{ URL::asset('js/menuCard.js') }}"></script>
<div class="content-wrapper">
    <div class="mr-md-3 mr-xl-5">
        <h1 class=" text-primary">Surveys</h1>
        <br>
    </div>
    @if(sizeof($surveys))
    <div class="row">        
        <div class="col-lg-3 col-md-3 col-sm-1 grid-margin stretch-card">
            <a href="{{ route('admin.surveys.new') }}">
                <div class="card border-primary mb-3">
                    <div height="120px">
                        <img src="{{ asset('/images/components/plus.jpg')}}"  class='card-img-top w-100' style="max-height: 120px;" alt="Responsive image">                
                    </div>
                    <div class="card-body" >   
                        <div class="row">
                            <div class="col-10">
                                <h4>New Survey</h4>                    
                            </div>                        
                        </div>  
                        <h6>Create a new Survey</h6>
                    </div>               
                </div>
            </a>
        </div> 
        <?php $i= 0;?>
        @foreach($surveys  as $survey)
        <?php $i+=1;?>
        @component('components.myCard')
        @slot('image')
        @if(isset($survey->image))
        <img src="/images/surveys/{{ $survey->image }}" class='card-img-top w-100' style="max-height: 120px;" alt="Responsive image" />
        @endif 
        @endslot

        @slot('name')
        @if($survey->fillable == true)
        <i class="mdi mdi-lock-open-outline  text-primary md-5"></i>
        @else
        <i class="mdi mdi-lock menu-icon text-primary md-5"></i>
        @endif 
        {{ $survey->name }}
        
        @endslot
        
        @slot('cardId')
        <?php echo $i; ?>
        @endslot
        
        @slot('buttonId')
        <?php echo "button".$i; ?>
        @endslot

        @slot('buttons')
        @if(isset($survey->editable) && $survey->editable == true)
        <a href="{{ route('admin.surveys.edit', $survey->id) }}" class="dropdown-item">
            <button type="button" class="btn btn-outline-primary btn-sm mr-2 col-12">Edit</button>
        </a>     
        @endif
        @if(isset($survey->fillable))
        @if($survey->fillable == true)
        <a href="{{ route('admin.surveys.closeSurvey', $survey->id) }}" class="dropdown-item">
            <button type="button" class="btn btn-outline-info btn-sm mr-2 col-12">Close</button>
        </a> 
        @else
        <a href="{{ route('admin.surveys.closeSurvey', $survey->id) }}" class="dropdown-item">
            <button type="button" class="btn btn-outline-warning btn-sm mr-2  col-12">Open</button>
        </a> 
        @endif                        
        @endif
        <a href="{{ route('admin.surveys.show', $survey->id) }}" class="dropdown-item">
            <button type="button" class="btn btn-outline-success btn-sm mr-2 col-12">Show</button>
        </a>  
        <form action="{{route('admin.surveys.destroy', $survey->id)}}" id='form-delete{{$survey->id}}' method="POST" class="dropdown-item">
            @csrf
            {{method_field('DELETE')}}
            <button type="button" onclick='conferma({{$survey->id}})' class="btn btn-outline-danger btn-sm  mr-2 col-12">
                Delete
            </button>           
        </form>
        @endslot

        @endcomponent
        @endforeach
    </div>
    @endif
</div> 
<script>
    function conferma(id) {
        if (confirm('Are you sure?')) {
            $('#form-delete'+id).submit();
        }
    }          
</script>
<script>
        $(".cardMenu").click(function(){
            var id = "button"+$(this).attr('id');
            $(".closeCard").each(function(){
                if($(this).attr("id") != id){
                    $("#"+$(this).attr("id")).removeClass("show");
                }
            });
            $("#"+id).toggleClass('show');
        });
</script>

@endsection
