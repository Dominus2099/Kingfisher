@extends('publication.writer.layout.app')
@section('content')

<style>

    .progress {
        height: 35px;
    }
    
    </style>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Continue Work</strong>
            </div>
            <div class="card-body">
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:18%">
                            <h3>Writer</h3>
                            </div>
                        </div>
                        <br>
                        <div class="card-title">
                            <h3 class="text-center">Article</h3>
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
                        {{ Form::model($article, ['route' => ['draft-update', $article->id],'method'=>'put']) }} 
                            <div class="form-group">
                                {{Form::label('title', 'Title', ['class' => 'control-label mb-1'])}}
                                {{Form::text('title', $article->title,['class'=>'form-control', 'id'=>'title'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('category', 'Category', ['class' => 'control-label mb-1'])}}
                                {{ Form::select('category_id', $categories, $article->category_id, ['class'=>'form-control myselect', 'data-placeholder'=>'Select Category']) }}

                            </div>
                            <div class="form-group">
                                {{Form::label('short_description', 'Short Description', ['class' => 'control-label mb-1'])}}
                                {{Form::textarea('short_description', $article->short_description,['class'=>'form-control', 'id'=>'short_description'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('description', 'Description', ['class' => 'control-label mb-1'])}}
                                {{Form::textarea('description', $article->description,['class'=>'form-control', 'id'=>'article-ckeditor'])}}
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Submit</span>
                                    <span id="payment-button-sending" style="display:none;">Submitting…</span>
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