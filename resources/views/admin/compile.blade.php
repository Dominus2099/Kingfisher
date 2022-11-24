@extends('admin.layout.app')
@section('content')
<style>
    
    .pagination {
  display: flex;
  justify-content: center;
}

    .p1 {
  font-family: "Times New Roman", Times, serif;
}

    .p2 {
  font-family: Arial, Helvetica, sans-serif;
}

    .p3 {
  font-family: "Lucida Console", "Courier New", monospace;
}
    .centers {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>

  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/newspaper.css">

<section id="feature_news_section" class="feature_news_section">

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <h3 class="mb-3"></h3>
        </div>
        
                                <h1 class="card-title text-center">Kingfisher Published Articles</h1>
                                <hr>
                                <div class="align-items-center">
                                {{ $articledash->links() }}
                                </div>
                                <hr>

                                {{-- broken Image Format  --}}
                               
                                {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @php $i =1; @endphp
                                        @foreach ( $articledash as $articledashb )
                                      <div class="carousel-item {{ $i == '1' ? 'active':''}}">

                                        @php $i++; @endphp
                                        <img src="{{ asset('/article') }}/{{ $articledashb->main_image }}" alt="...">
                                      </div>
                                   </div>
                                </div> 
                                   @endforeach--}}
                                

                                   @foreach ( $articleimg as $articleimgs )
                                   <div class='col'>
                                    
                                   <img src="{{ asset('article') }}/{{ $articleimgs->thumb_image }}" class="centers" width="700" height="450">
                                   </div>
                                   @endforeach 

                <div class="row-6">
                        <div>
                            
                                    @foreach ( $articledash as $articledashb )
                                    <div class="col-md-3 align-items-center">
                                    <div class="container-fluid py-2">
                                        <div class="d-flex flex-row flex-nowrap">
                                            <div class="d-flex justify-content-evenly">
                                <div class="bg-transparent border-start border-end border-dark">
                                    {{-- <img class="img-fluid" src="{{ asset('/article') }}/{{ $articledashb->main_image }}"> --}}
                                    <div class="card-body">
                                        <h2 class="p1 text-center"><b><i>{{ $articledashb->title }}</i></b></h2>
                                        <hr>
                                        <p class="p1 text-center"><i>{{ $articledashb->creator->name }}, {{ date('F j Y', strtotime($articledashb->created_at)) }}</i></p>
                                        <hr>
                                        <p class="p1">{{ $articledashb->short_description }}</p>
                                        <p class="p1">{!! $articledashb->description !!}</p>
                                    </div>
                                </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>@endforeach 
                                
                        </div>
                        
                    </div><hr> <div class=" text-center">
                        
                            {{ $articledash->links() }}
                            </div>          
        </div>
</div>
</section>
    

    
@endsection