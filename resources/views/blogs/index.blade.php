@extends('includes.app')

@section('Breadcrumb')
			<!-- Breadcrumb area -->
			<section class="cr-section breadcrumb-area" data-black-overlay="2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="cr-breadcrumb text-center">
								<h2 class="cr-breadcrumb__title ">BLOG</h2>
								<div class="cr-breadcrumb__tree text-left text-md-left text-center">
									<ul>
										<li><a href="{{ route('home') }}">home</a></li>
										<li>blogs</li>
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



        <main class="page-content">

            <!-- Blogs area -->
            <div class="pg-blogs-area bg--white ptb--150">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-8 col-xl-9">
                            <div class="pg-blogs right--sidebar">
                                <div class="row">
                                    <!-- Start Single Blog -->
                                    <div class="col-12">
                                        <nav class="navbar bg-dark">
            
                                            <div class="navbar-brand text-light"> All Post </div>
                                
                                            <div><select class="form-control "  id="languageSelect" >
                                                <option value="1"> English</option>
                                                <option value="2">  বাংলা</option>
                                                    </option>                                                                
                                            </select></div>

                                
                                
                                        </nav>
                                    </div>

                                    @foreach ($Englishblogs as $blog)
                                        
                                  
                                    <div class="col-lg-6 col-md-6 col-xl-4 English" style="display: none;">
                                        <article class="blog wow fadeInUp">
                                            <div class="blog__thumb">
                                                <a href="{{ route('blog-singleview', $blog->id) }}">
                                                    <img src="{{ asset($blog->image->thumbnail) }}" alt="single blog thumb">
                                                </a>
                                            </div>
                                            <div class="blog__content">

                                                <div class="blog__content__meta">
                                                    <p>{{ $blog->created_at->format('d F, Y') }} - <a href="{{ route('blog-singleview', $blog->id) }}">{{ $blog->author_name }}</a></p>
                                                </div>
                                                <h4 class="blog-title"><a href="{{ route('blog-singleview', $blog->id) }}">{{ $blog->title }} </a></h4>
                                                <p> @php echo substr($blog->description, 0,50) @endphp ... </p>
                                                <a href="{{ route('blog-singleview', $blog->id) }}" class="cr-readmore">Read</a>
                                            </div>
                                        </article>

                                    </div><!-- //Start Single Blog -->
                                        @endforeach

                                        @foreach ($Banglablogs as $blog)
                                            
                                      
                                        <div class="col-lg-6 col-md-6 col-xl-4 Bangla" style="display: none;">
                                            <article class="blog wow fadeInUp">
                                                <div class="blog__thumb">
                                                    <a href="{{ route('blog-singleview', $blog->id) }}">
                                                        <img src="{{ asset($blog->image->thumbnail) }}" alt="single blog thumb">
                                                    </a>
                                                </div>
                                                <div class="blog__content">
    
                                                    <div class="blog__content__meta">
                                                        <p>{{ $blog->created_at->format('d F, Y') }} - <a href="{{ route('blog-singleview', $blog->id) }}">{{ $blog->author_name }}</a></p>
                                                    </div>
                                                    <h4 class="blog-title"><a href="{{ route('blog-singleview', $blog->id) }}">{{ $blog->title }} </a></h4>
                                                    <p> @php echo substr($blog->description, 0,50) @endphp ... </p>
                                                    <a href="{{ route('blog-singleview', $blog->id) }}" class="cr-readmore">Read</a>
                                                </div>
                                            </article>
    
                                        </div><!-- //Start Single Blog -->
                                            @endforeach



                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 Bangla">
                                        <div class="cr-pagination">
                                            <ul>
                
                                             {{$Banglablogs->links()}}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 English">
                                        <div class="cr-pagination">
                                            <ul>
                
                                             {{$Englishblogs->links()}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Widgets Area -->
                        <div class="col-lg-4 col-xl-3">
                            <!-- Sidebar Widgets -->
                            <div class="sidebar widgets">

                            

                                <!-- Single Widget (Recentpost) -->
                                <div class="single-widget wgt-recentpost">
                                    <h4 class="widget-title">Recent Event</h4>
                                    <ul>
                                        @foreach ($events as $event)
                                            
                                        <li>
                                            <div class="wgt-recentpost__thumb">
                                                <a href="{{ route('event-single',$event->id) }}">
                                                    <img src="{{ asset($event->image->thumbnail) }}" alt="event thumb">
                                                </a>
                                            </div>
                                            <div class="wgt-recentpost__content">
                                                <h5><a href="{{ route('event-single',$event->id) }}">{{ $event->title }}</a></h5>
                                                <p><span>{{ $event->vanu  }}</span><span>{{ Carbon\Carbon :: parse($event->date)->format('d F, Y') }}</span></p>
                                            </div>
                                        </li>
                                        
                                        @endforeach
                                    
                                </div><!-- Single Widget (Recentpost) -->


                            </div><!-- //Sidebar Widgets  -->
                        </div><!-- //Sidebar Widgets Area -->
                    </div>
                </div>
            </div><!-- //Blogs area -->

            
        </main><!-- //Page Conent -->




@endsection


@section('customJS')

<script>
     $(document).ready(function(){
         function languageChange() {
            if($("#languageSelect").val()==1)
            { 
                $('.Bangla').hide();
                $('.English').show();
            }
            else
            {
                $('.English').hide();
                $('.Bangla').show();
            }
         }
         languageChange();
         $('#languageSelect').change(function(){
            languageChange();

         });

         

     });

 </script>
    
@endsection