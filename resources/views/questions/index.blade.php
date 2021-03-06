@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="clearfix">
                		<h2 class="pull-left">All Questions</h2>
                		<a href="{{ route('questions.create') }}" class="btn btn-success pull-right">Ask Question</a>
                	</div>
                </div>
                <div class="panel-body">
					@include('layouts._messages')
                    @foreach($questions as $question)
                    	<div class="media">
                    		<div class="col-md-2 counters text-center">
                    			<div class="vote">
                    				<strong>{{ $question->votes }}</strong> {{ str_plural('vote',$question->votes) }}
                    			</div>
                    			<div class="answer {{ $question->status }}">
                    				<strong>{{ $question->answers }}</strong> {{ str_plural('answer',$question->answers) }}
                    			</div>
                    			<div class="status">
                    				{{ $question->views . " " . str_plural('view',$question->views) }}
                    			</div>
                    		</div>
                    		<div class="col-md-10">
                    			<div class="media-body">
									<div class="clearfix">
										<div class="pull-left">
												<h3 class="mt-0">
													<a href="{{ $question->url }}">
														{{ $question->title }}
													</a>
												</h3>
										</div>
										<div class="pull-right">
											<a href="{{ route('questions.edit', $question->id) }}" class="btn btn-success btn-sm">Edit</a>
										</div>
									</div>
                    			<p class="lead">Asked by 
                    				<a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                    				<small>{{$question->created_date}}</small>
                    			</p>
                    			{{ str_limit($question->body,250) }}
                    		</div>
                    		</div>
                    	</div>
                    	<hr>
                    @endforeach
                    <div class="text-center">
                    	{{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
