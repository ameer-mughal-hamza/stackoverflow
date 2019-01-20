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
                    <form action="{{ route('questions.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="question-title">Question Title</label>
                            <input type="text" name="title" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Enter question title">
                            @if($errors->has('title'))
                                <div class="text-danger">
                                    <strong>{{$errors->first('title')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question-body">Explain your question</label>
                            <textarea name="body" id="question-body" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" placeholder="Enter your explanation here"></textarea>
                            @if($errors->has('body'))
                                <div class="text-danger">
                                    <strong>{{$errors->first('body')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-large">Ask this question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
