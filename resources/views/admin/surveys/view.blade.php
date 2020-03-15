@extends('layouts.admin')

@section('title')
Answer Survey
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body dashboard-tabs">
                    <ul class="nav nav-tabs px-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link" id="global-tab" data-toggle="tab" href="#global" role="tab" aria-controls="global" aria-selected="false">Global</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <br>                              
                            <div class="row">
                                <div class="col-9">
                                     <h2 class="text-primary">{{ $completedSurvey->name }}</h2>   
                                </div>
                                <div class="col-3">
                                    <a href="{{ route('admin.surveys.show', $completedSurvey->id) }}"
                                        <button class="btn btn-outline-info align-top">
                                            Go back
                                        </button>
                                    </a>   
                              </div>
                            </div>
                            <br>
                            <h5>{{ $completedSurvey->description }}</h5> 
                            <br>
                            <h4>User: {{ $user->name }} {{ $user->surname }}</h4>                   
                            <br>
                            @foreach($questions as $question)                  
                            <input type="hidden" name='id{{ $loop->iteration }}' value='{{$question->answer_id}}'>
                            <div class="card border-primary mb-3">
                                <div class="card-header">
                                    {{ $question->name }}
                                    <a data-toggle="modal" data-target="#ModalQuestion">
                                        <i class="mdi mdi-comment-question-outline"></i>
                                    </a>
                                </div>
                                <div class="card-body"> 
                                    @php
                                     $max = $question->max_rate;
                                     @endphp
                                    @for ($t = 0; $t < $question->max_rate; $t=$t+5)                                 
                                    @php $tmp = min(5,($max)); @endphp
                                    <div class="row"> 
                                        <div class="col-1 form-check"></div>
                                        @for ($j = 1; $j <= $tmp; $j++)
                                        <div class="col-2">
                                            {{ $j +$t}}
                                        </div>
                                        @endfor                                
                                    </div>
                                    <div class="row">   
                                        <div class="col-1 form-check"></div>
                                        @for ($j = 1; $j <= $tmp; $j++)
                                        @if( ($j +$t)== $question->correct_answer)                                        
                                        <div class="col-2 form-check form-check-success">
                                            <label class="form-check-label">                                    
                                                <input type="radio" class="form-check-input" name="question{{ $loop->iteration }} {{ $j +$t}}" value=" {{ $j +$t}}" checked>    
                                            </label> 
                                        </div>                                      
                                        @elseif(($j +$t)== $question->value)
                                        <div class="col-2 form-check">
                                            <label class="form-check-label">                                
                                                <input type="radio" class="form-check-input" name="question{{ $loop->iteration }} {{ $j +$t}}" value=" {{ $j +$t}}" checked>    
                                            </label> 
                                        </div>
                                        @else
                                        <div class="col-2 form-check">
                                            <label class="form-check-label">                                
                                                <input type="radio" class="form-check-input" name="question{{ $loop->iteration }}{{$j}}" value="{{ $j }}" disabled>    
                                            </label> 
                                        </div>
                                        @endif
                                        @endfor
                                    </div>
                                     @php $max=$max-5; @endphp
                                    @endfor
                                    <div class="row">
                                        <div class="col-6 form-check">
                                            <label class="form-check-label"> 
                                                <p id="label_left_show" class='float-left'>{{ $question->label_left }}</p>
                                            </label>
                                        </div>
                                        <div class="col-6 form-check">
                                            <label class="form-check-label"> 
                                                <p id="label_left_show" class='float-right'>{{ $question->label_right }}</p>
                                            </label>
                                        </div>
                                    </div>                                
                                </div>
                            </div>                                   
                            @endforeach 
                             <div class="modal fade" id="ModalQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title text-primary" id="exampleModalLongTitle">Help</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                The correct answer is the green one and the one selected by the user is the blue one. If there is no blue one, it means that the answer was guessed by the user and that he selected the answer marked in green.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                              
                        <div class="tab-pane fade" id="global" role="tabpanel" aria-labelledby="global-tab">
                            <br>
                            <div class="row">
                                <div class="col-9">
                                     <h2 class="text-primary">{{ $completedSurvey->name }}</h2>   
                                </div>
                                <div class="col-3">
                                    <a href="{{ route('admin.surveys.show', $completedSurvey->id) }}"
                                        <button class="btn btn-outline-info align-top">
                                            Go back
                                        </button>
                                    </a>   
                              </div>
                            </div>   
                            <br>
                            <h5>{{ $completedSurvey->description }}</h5> 
                            <br>
                            <h4>User: {{ $user->name }} {{ $user->surname }}</h4>                   
                            <br>
                            <div class="row">
                                <div class="col-lg-6 grid-margin stretch-card">
                                    <div class="card border-primary">
                                        <div class="card-body">
                                            <h5>Correct answers</h5>
                                            <canvas id="correctAnswers"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 grid-margin stretch-card">
                                    <div class="card border-primary">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                Total score
                                                 <a data-toggle="modal" data-target="#ModalScore">
                                                    <i class="mdi mdi-comment-question-outline"></i>
                                                </a>
                                            </h5>
                                            <p>{{number_format($score,2)}}</p>
                                        </div>
                                    </div>
                                </div>
                                @component('components.scoreModal')
                                    @slot('id')
                                    ModalScore
                                    @endslot
                                 @endcomponent
                            </div>
                        </div>                        
                    </div> 
                </div>                
            </div>
        </div>
    </div>
</div>
<script>

    $(function () {
    /* ChartJS
     * -------
     * Data and config for chartjs
     */
    //Barcharts
    'use strict';
        



            var doughnutPieData = {
            datasets: [{
            data: [{{$correctAnswers}}, {{$wrongAnswers}}],
                    backgroundColor: [
                            'rgba(0,128,0, 0.5)',
                            'rgba(255,0,0, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                            'rgba(0,128,0,1)',
                            'rgba(255,0,0, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                    ],
            }],
                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: [
                            'Correct',
                            'Wrong',
                    ]
            };
            var doughnutPieOptions = {
            responsive: true,
                    animation: {
                    animateScale: true,
                            animateRotate: true
                    },
                    tooltips: {
                    callbacks: {
                    label: function(tooltipItem, data) {
                    //get the concerned dataset
                    var dataset = data.datasets[tooltipItem.datasetIndex];
                            //calculate the total of this data set
                            var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                            return previousValue + currentValue;
                            });
                            //get the current items value
                            var currentValue = dataset.data[tooltipItem.index];
                            //calculate the precentage based on the total and current item, also this does a rough rounding to give a whole number
                            var percentage = Math.floor(((currentValue / total) * 100) + 0.5);
                            return "#" + currentValue + "   " + percentage + "%";
                    }
                    }
                    }
            };
            if ($("#correctAnswers").length) {
    var correctAnswersCanvas = $("#correctAnswers").get(0).getContext("2d");
            var correctAnswers = new Chart(correctAnswersCanvas, {
            type: 'doughnut',
                    data: doughnutPieData,
                    options: doughnutPieOptions
            });
    }




   
    });

</script>
@endsection

