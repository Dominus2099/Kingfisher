@extends('admin.layout.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Update</strong>
            </div>
            <div class="card-body">
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Permissions</h3>
                        </div>
                        @if(count($errors)>0)
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <hr>
                        {{ Form::model($article, ['route' => ['article-update', $article->id],'method'=>'put']) }} 
                            <div class="form-group">
                                {{Form::label('title', 'Title', ['class' => 'control-label mb-1'])}}
                                {{Form::text('title', $article->title,['class'=>'form-control', 'id'=>'title'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('category', 'Category', ['class' => 'control-label mb-1'])}}
                                {{ Form::select('category_id[]', $categories, $article->category_id, ['class'=>'form-control myselect', 'data-placeholder'=>'Select Category']) }}

                            </div>
                            <div class="form-group">
                                {{Form::label('short_description', 'Short Description', ['class' => 'control-label mb-1'])}}
                                {{Form::textarea('short_description', $article->short_description,['class'=>'form-control', 'id'=>'short_description'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('description', 'Description', ['class' => 'control-label mb-1'])}}
                                {{Form::textarea('description', $article->description,['class'=>'form-control', 'id'=>'description'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('image', 'Image', ['class' => 'control-label mb-1'])}}
                                {{Form::file('img',['class'=>'form-control'])}}
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Update</span>
                                    <span id="payment-button-sending" style="display:none;">Updating…</span>
                                </button>
                            </div>
                        
                        {{  Form::close()  }}
                    </div>
                </div>
            </div>
        </div> <!-- .card -->
    </div>
</div>
@endsection