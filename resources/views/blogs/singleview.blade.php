@extends('includes.app')
@section('Breadcrumb')
<!-- Top Banner -->


<!-- Breadcrumb area -->
<section class="cr-section breadcrumb-area" data-black-overlay="2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="cr-breadcrumb text-center">
                    <h2 class="cr-breadcrumb__title">BLOG DETAILS</h2>
                    <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                        <ul>
                            <li>Blog</li>
                            <li> {{ $blog ->title }}</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- //Breadcrumb area -->

<!-- //Top Banner -->
@endsection


@section('content')


<!-- Page Conent -->
<main class="page-content">

    <!-- Blogs area -->
    <div class="pg-blog-details-area bg--white ptb--150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class="blog-details">
                        <div class="blog-details__thumb">


                            @if (is_null($blog->video))
                            <img src="{{ asset($blog->image->url) }} " alt="Single blog Details" style="width: 100%">
                            @else
                            <div class="embed-responsive embed-responsive-16by9">
                                @php
                                echo $blog->video ;
                                @endphp
                            </div>
                            @endif
                        </div>
                        <h2 class="blog-details__title">{{ $blog->title }}</h2>
                        <div class="blog-details__meta">
                            <ul>
                                <li><span>By: </span>{{ $blog->author_name }}</li>
                                <li><span>Date : {{ $blog->created_at->format('d F, Y') }}</span> </li>
                                <li><span>Category: {{ $blog->category->name }}</li>
                            </ul>
                        </div>
                        <div class="blog-details__content clearfix">
                            @php
                            echo $blog->description
                            @endphp
                        </div>

                    </div>
                </div>

                <!-- Sidebar Widgets Area -->
                <div class="col-lg-4 col-xl-3">
                    <!-- Sidebar Widgets -->
                    <div class="sidebar widgets">



                        <!-- Single Widget (Recentpost) -->
                        <div class="single-widget wgt-recentpost">
                            <h4 class="widget-title">Recent Blogs</h4>
                            <ul>
                                @foreach ($blogs as $blog)


                                <li>
                                    <div class="wgt-recentpost__thumb">
                                        <a href="{{ route('blog-singleview',$blog->id) }}">
                                            <img src="{{ asset($blog->image->thumbnail) }}" alt="Blog thumb">
                                        </a>
                                    </div>
                                    <div class="wgt-recentpost__content">
                                        <h5><a href="{{ route('blog-singleview',$blog->id) }}">{{ $blog->title }}</a>
                                        </h5>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div><!-- Single Widget (Recentpost) -->



                    </div><!-- //Sidebar Widgets  -->
                </div><!-- //Sidebar Widgets Area -->
            </div>
        </div>
    </div><!-- //Blogs area -->

</main><!-- //Page Conent -->




@endsection
