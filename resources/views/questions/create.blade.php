@extends('layouts.app')

@section('content')


<div class="container" style="margin-top: 50px; overflow: auto;font-family: arial;">
  <h3>Ask Question</h3>
</div>
<div class="container border">
<form action="index" method="POST">

  {{ csrf_field() }}
  <div class="form-group mt-4">
    <label for="title"><strong>Title</strong><sup style="color: red;">*</sup></label>
    <input type="text" class="form-control" id="titleq" placeholder="Enter a short and proper title for your question" name="title">
  </div>
  <div class="form-group">
    <label for="description"><strong>Description</strong><sup style="color: red;">*</sup></label>
    <textarea class="form-control" id="descriptionq" placeholder="Enter a detailed description of what problems you're facing and steps to replicate" rows="10"style="resize: none;" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="Tags"><strong>Add Tags</strong></label>
    <input type="text" class="form-control"placeholder="tag1,tag2,tag3" name="tags">
    <small id="emailHelp" class="form-text text-muted">Tags will help to find your question faster.Add comma seprated tags.For ex:codetrek,bootstrap,frontend</small>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Post Your Question</button>
</form>
</div>

@endsection