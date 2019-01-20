@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<div class="clearfix">
                		<h2 class="pull-left">Edit Question</h2>
                		<a href="{{ route('questions.index') }}" class="btn btn-success pull-right">Back to all questions</a>
                	</div>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('questions.update',$question->id) }}">
                        {{ method_field('PUT') }}
                        @include('questions._form', ['buttonText'=>'Update Question'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
