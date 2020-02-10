@extends('layouts.admin')

@section('title')
Surveys
@endsection

@section('content')
<!-- partial -->

<div class="content-wrapper">
    <div class="mr-md-3 mr-xl-5">
        <h1 class=" text-primary">Surveys</h1>
        <br>
        <h3 class="mb-md-0">{{__('indexes.survey_create_des')}}</h3>
        <br>
    </div>
    <div class="row">        
        <div class="col-lg-3 col-md-3 col-sm-1 grid-margin stretch-card">
            <a href="{{ url('admin/surveys/' .'-1' . '/create') }}">
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
                  
        @foreach($modules  as $module)
        @component('components.cardLink')
        @slot('image')
        @if(isset($module->image))
        <img src="/images/modules/{{ $module->image }}"  class='card-img-top w-100' style="max-height: 120px;" alt="Responsive image" />
        @endif
        @endslot

        @slot('name')
        {{ $module->name }}
        @endslot
        
        @slot('category')

        @endslot 
        
        @slot('link')
        {{ url('admin/surveys/' .$module->id . '/create') }}
        @endslot
        @endcomponent
        @endforeach
       
    </div>
</div> 
<script>
    function conferma(id) {
        if (confirm('Are you sure?')) {
            $('#form-delete'+id).submit();
        }
    }          
</script>
@endsection
