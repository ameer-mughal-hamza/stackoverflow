{{ csrf_field() }}
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" name="title" value="{{ old('title',$question->title) }}" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Enter question title">
    @if($errors->has('title'))
        <div class="text-danger">
            <strong>{{$errors->first('title')}}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">Explain your question</label>
    <textarea name="body" id="question-body" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" placeholder="Enter your explanation here">{{old('body',$question->body)}}</textarea>
    @if($errors->has('body'))
        <div class="text-danger">
            <strong>{{$errors->first('body')}}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success btn-large">{{ $buttonText }}</button>
</div>