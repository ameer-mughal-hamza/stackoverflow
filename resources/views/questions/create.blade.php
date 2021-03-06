@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="clearfix">
                		<h2 class="pull-left">Ask Question</h2>
                		<a href="{{ route('questions.index') }}" class="btn btn-success pull-right">Back to all questions</a>
                	</div>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('questions.store') }}">
                        @include('questions._form', ['buttonText'=>'Ask a question'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
