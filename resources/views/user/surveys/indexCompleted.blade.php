@extends('layouts.user')

@section('title')
Completed Surveys
@endsection

@section('search')
<li class="nav-item nav-search d-none d-lg-block w-100">
    <form action="{{route('user.surveys.searchCompleted')}}" method="POST" >
        <div class="input-group">
            @csrf
            <input id="search" type="text" class="form-control" name="search" placeholder="{{__('indexes.search')}}" aria-label="search" aria-describedby="search" required>
            <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                    <button type="submit"><i type="submit" class="mdi mdi-magnify"></i></button>
                </span>
            </div>
        </div>
    </form>
</li>
@endsection

@section('content')
<!-- partial -->

<div class="content-wrapper">
    <div class="mr-md-3 mr-xl-5">
        <h1 class=" text-primary">{{__('indexes.completed_surveys')}}</h1>
        <br>
    </div>
    <div class="row" id="complete">
        
    @if(sizeof($completedSurveys))    
        @foreach($completedSurveys  as $completedSurvey)
        @component('components.cardLink')
        @slot('image')
        @if(isset($completedSurvey->image))
        <img src="/images/surveys/{{ $completedSurvey->image }}"  class='card-img-top w-100' style="max-height: 120px;" alt="Responsive image" />
        @endif
        @endslot

        @slot('name')
        {{ $completedSurvey->name }}
        @endslot
        
        @slot('category')
        {{ $completedSurvey->cate }}
        @endslot 

        @slot('link') 
       {{ url('user/surveys/' .$completedSurvey->completed_id . '/show') }}
        @endslot
        @endcomponent           
        @endforeach
   
    @else
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card border-primary mb-3">
          <div class="card-body">
            <h4 class="mb-md-0 text-info">
                {{__('indexes.no_complet')}}
                
            </h4>
            <div class="row">
                <div class="col-3">
                    
                </div>
                <img class="col-sm-6" src="{{asset('/images/surveys/default.jpg')}}" alt="default">
            </div>
          </div>
        </div>
    </div>
    @endif
    </div>
</div> 
@endsection
