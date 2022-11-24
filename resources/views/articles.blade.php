
@extends('layout.app')
@section('content')

<style>

.d-md-flex {
    display: flex!important;
}
</style>

<div class="container">

<div class="row">
<div class="col-md-8">
    <div class="entity_wrapper">
    <div class="entity_title header_green">
        <h1><a>Articles test</a></h1>
    </div>
    <!-- entity_title -->
    @foreach($articles as $key=>$article)
    @if($key === 0)

    <div class="entity_thumb">
        <a href="{{ url('/content') }}/{{ $article->slug }}">
            <img class="img-responsive" src="{{ asset('/article') }}/{{ $article->main_image }}" alt="{{ $article->title }} image">
        </a>
    </div>
    <!-- entity_thumb -->

    <div class="entity_title">
        <a href="{{ url('/content') }}/{{ $article->slug }}"><h3>{{ str_limit($article->title, 25, '...') }}</h3></a>
    </div>
    <!-- entity_title -->
    <div class="entity_meta">
        <a>{{ date('F j Y', strtotime($article->created_at)) }}</a>, by: <a>{{ $article->creator->name }}</a>
    </div>
    <!-- entity_meta -->
    
    <div class="entity_content">{{ str_limit($article->short_description, 200, '...') }}</div>
    <!-- entity_content -->
    <hr>
</div>
<!-- entity_wrapper -->
<div class="row">
    @else
    @if($key === 1)
    @endif
    <div class="col-md-9" data-aos="fade-up">
        
            <div class="d-md-flex post-entry-2 half" class="me-4 thumbnail">
                <a href="{{ url('/content') }}/{{ $article->slug }}">
                    <img class="img-fluid" src="{{ asset('/article') }}/{{ $article->thumb_image }}" alt="{{ $article->title }} image">
                </a>
            </div>
            <!-- top_article_img -->

            
                <h5><a href="{{ url('/content') }}/{{ $article->slug }}">{{ str_limit($article->title, 25, '...') }}</a></h5>
            
            <!-- category_article_title -->

            
                <a>{{ date('F j Y', strtotime($article->created_at)) }}</a>, by: <a>{{ $article->creator->name }}</a>
            
            <!-- article_date -->

            
            <!-- category_article_content -->

        
        <!-- category_article_body -->
        <hr>
    </div>
    <!-- col-md-6 -->
    @if($loop->last)
    @endif
    @endif
    @endforeach
</div>
<!-- row -->
    <div class="h5">
        {{ $articles->links() }}
        {{-- pagination --}}
    </div>

<div class="widget_advertisement">
    <img class="img-responsive" src="assets/img/category_advertisement.jpg" alt="feature-top">
</div>
<!-- widget_advertisement -->
</div>
<!-- col-md-8 -->

<div class="col-md-4">
    <div class="widget">
        <div class="widget_title widget_black">
            <h2><a href="#">Popular News</a></h2>
        </div>
        @foreach ($shareData['popular'] as $popular)
            <div class="media">
                <div class="media-left">
                    <a href="{{ '/content' }}/{{ $popular->slug }}"><img class="media-object" src="{{ asset('article/') }}/{{ $popular->list_image }}" alt="{{ $popular->title }} image"></a>
                </div>
                <div class="media-body">
                    <h3 class="media-heading">
                        <a href="{{ '/content' }}/{{ $popular->slug }}" >{{ str_limit($popular->title, 20, '...') }}</a>
                    </h3> 
                    <span class="media-date"><a>{{ date('F j Y', strtotime($popular->created_at)) }}</a>
                    <br>by: <a>{{ $popular->creator->name }}</a>
                    </span>
                    <div class="widget_article_social">
                        <span>
                            Total Views: <a> {{ $popular->view_count }}</a>
                        </span> 
                    </div>
                </div>
            </div>
        @endforeach
        <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
    </div>
    <!-- Popular News -->

{{-- <div class="widget hidden-xs m30">
    <img class="img-responsive adv_img" src="assets/img/right_add1.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add2.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add3.jpg" alt="add_one">
    <img class="img-responsive adv_img" src="assets/img/right_add4.jpg" alt="add_one">
</div> --}}
<!-- Advertisement -->

{{-- <div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add5.jpg" alt="add_one">
</div> --}}
<!-- Advertisement -->

{{-- <div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/right_add6.jpg" alt="add_one">
</div> --}}
<!-- Advertisement -->


{{-- <div class="widget hidden-xs m30">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
    <img class="img-responsive add_img" src="assets/img/right_add7.jpg" alt="add_one">
</div> --}}
<!--Advertisement -->

{{-- <div class="widget hidden-xs m30">
    <img class="img-responsive widget_img" src="assets/img/podcast.jpg" alt="add_one">
</div> --}}
<!--Advertisement-->
</div>
<!-- col-md-4 -->

</div>
<!-- row -->

</div>
<!-- container -->
@endsection