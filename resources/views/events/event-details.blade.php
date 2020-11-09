@extends('includes.app')

@section('Breadcrumb')
<!-- Top Banner -->

<!-- Breadcrumb area -->
<section class="cr-section breadcrumb-area" data-black-overlay="7">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="cr-breadcrumb text-center">
					<h2 class="cr-breadcrumb__title">Event Details</h2>
					<div class="cr-breadcrumb__tree text-left text-md-left text-center">
						<ul>
							<li><a href="{{ route('home') }}">Events</a></li>
							<li>Event</li>
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

        <!-- Event Details Area -->
        <div class="event-details-area ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="event-details">
                            <div class="event-details__thumb">
                                <img src="{{ asset('abasas/images/event/single-event/1.jpg ')}}" alt="Single event Details">	
                            </div>
                            <h2 class="event-details__title">{{ $event->title }}</h2>
                            <div class="event-details__meta">
                                <ul>
                                    <li><span>Date:</span> {{Carbon\Carbon::parse( $event->date )->format('d F, Y')}}</li>
                                    <li><span>Vanu :</span> {{ $event->vanu}}</li>
                                    <li><span>Time :</span>{{Carbon\Carbon::parse($event->start_time)->format('h:i:a')  }} - {{Carbon\Carbon::parse($event->end_time)->format('h:i:a')  }}</li>
                                </ul>
                            </div>
                            <div class="event-details__content">

                               <p>{{ $event->description }}</p>

                            </div>
                            <div class="calltoaction d-flex justify-content-left justify-content-md-center flex-wrap felx-md-nowrap">
                                <h3>Let’ s join the event, know about Salat...</h3>
                                <a href="#" class="cr-btn cr-btn--sm cr-btn--transparent"><span>Buy Ticket</span></a>
                            </div>
                            <div class="event-details__speakers">
                                <h3>Our Speakers</h3>
                                <p>know is  to pursue pleasure ratio because those who do not know how to pursue pleasure rationally counter consequences that are extremely painful</p>
                                <div class="speakers">
                                    <!-- Single Speaker -->
                                    <div class="single-speaker">
                                        <div class="single-speaker__thumb">
                                            <div class="hexagon">
                                                <div class="hexagon__inner1">
                                                    <div class="hexagon__inner2">
                                                        <img src="images/event/speaker/1.jpg" alt="speaker 1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="signle-speaker__content">
                                            <h5>Sawad Bin Maksud</h5>
                                            <span>Presedent</span>
                                        </div>
                                    </div><!-- //Single Speaker -->
                                    <!-- Single Speaker -->
                                    <div class="single-speaker">
                                        <div class="single-speaker__thumb">
                                            <div class="hexagon">
                                                <div class="hexagon__inner1">
                                                    <div class="hexagon__inner2">
                                                        <img src="images/event/speaker/2.jpg" alt="speaker 1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="signle-speaker__content">
                                            <h5>Julfiker Amin Ali</h5>
                                            <span>Quran Teacher</span>
                                        </div>
                                    </div><!-- //Single Speaker -->
                                </div>
                            </div>
                            <div class="event-details__footer d-flex justify-content-between align-items-center flex-wrap">
                                <div class="social-icons social-icons--rounded">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="cr-pagination2">
                                    <ul>
                                        <li>
                                            <a href="event-details.html"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="event-details.html"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="event-details__commentsection">
                                <div class="row">
                                    <div class="col-xl-10 col-12">
                                        <div class="small-title">
                                            <h4>Comments</h4>
                                            <p>know is  to pursue pleasure ratio because those who do not know how to pursue pleasure rationally counter consequences that are extremely painful</p>
                                        </div>
                                        <!-- Event Details Commentlist -->
                                        <div class="commentlist">
                                            <!-- Single Comment -->
                                            <div class="single-comment">
                                                <div class="single-comment__thumb">
                                                    <div class="hexagon">
                                                        <div class="hexagon__inner1">
                                                            <div class="hexagon__inner2">
                                                                <img src="images/commenter/1.png" alt="commenter image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-comment__content">
                                                    <p>know is  to pursue pleasure ratio because those who do not know how to pursue pleasure rationally counter consequences that are extremely painful</p>
                                                    <ul class="single-comment__meta">
                                                        <li class="sch__name">
                                                            <span>By: </span>
                                                            <a href="blog-grid-right-sidebar.html"> Stwart Momen</a>
                                                        </li>
                                                        <li class="sch__date">
                                                            <span>15 December, 2017</span>
                                                        </li>
                                                        <li>
                                                            <a href="#">Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- //Single Comment -->
                                            <!-- Single Comment -->
                                            <div class="single-comment reply">
                                                <div class="single-comment__thumb">
                                                    <div class="hexagon">
                                                        <div class="hexagon__inner1">
                                                            <div class="hexagon__inner2">
                                                                <img src="images/commenter/2.png" alt="commenter image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-comment__content">
                                                    <p>know is  to pursue pleasure ratio because those who do not know how to pursue pleasure rationally counter consequences</p>
                                                    <ul class="single-comment__meta">
                                                        <li class="sch__name">
                                                            <span>By: </span>
                                                            <a href="blog-grid-right-sidebar.html"> Alex Sharif </a>
                                                        </li>
                                                        <li class="sch__date">
                                                            <span>14 December, 2017 </span>
                                                        </li>
                                                        <li>
                                                            <a href="#">Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- //Single Comment -->
                                            <!-- Single Comment -->
                                            <div class="single-comment">
                                                <div class="single-comment__thumb">
                                                    <div class="hexagon">
                                                        <div class="hexagon__inner1">
                                                            <div class="hexagon__inner2">
                                                                <img src="images/commenter/3.png" alt="commenter image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-comment__content">
                                                    <p>know is  to pursue pleasure ratio because those who do not know how to pursue pleasure rationally counter consequences that are extremely painful</p>
                                                    <ul class="single-comment__meta">
                                                        <li class="sch__name">
                                                            <span>By: </span>
                                                            <a href="blog-grid-right-sidebar.html"> Jhon Maksud</a>
                                                        </li>
                                                        <li class="sch__date">
                                                            <span>13 December, 2017</span>
                                                        </li>
                                                        <li>
                                                            <a href="#">Reply</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- //Single Comment -->

                                        </div><!-- //Event Details Commentlist -->
                                    </div>
                                </div>

                                <!-- Event Details Commentbox -->
                                <div class="event-details__commentbox">
                                    <div class="small-title">
                                        <h4>Leave your reply</h4>
                                        <p>know is  to pursue pleasure ratio because those who do not know how to pursue pleasure rationally counter consequences that are extremely painful</p>
                                    </div>
                                    <div class="comment-box">
                                        <form action="#">
                                            <div class="single-input">
                                                <input type="text" id="comment-name" placeholder="Enter your name">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" placeholder="Your email">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" placeholder="Phone">
                                            </div>
                                            <div class="single-input">
                                                <input type="text" placeholder="Subject">
                                            </div>
                                            <div class="single-input textarea">
                                                <textarea cols="3" rows="3" placeholder="Write your comment here"></textarea>
                                            </div>
                                            <div class="single-input button">
                                                <button type="submit" class="cr-btn cr-btn--grey"><span>Submit now</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- //Event Details Commentbox -->	
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widgets Area -->
                    <div class="col-lg-4 col-xl-3">
                        <!-- Sidebar Widgets -->
                        <div class="sidebar widgets">


                            <!-- Single Widget (Categories) -->
                            <div class="single-widget wgt-categories">
                                <h4 class="widget-title">Event Categories</h4>
                                <ul>

                                    @foreach ($eventCategories as $eventCategory )
   
                                    <li><a href="events.html">{{ $eventCategory->name }} <span class="fa fa-eye"></span></a></li>


                                    @endforeach

                                </ul>
                            </div><!-- //Single Widget (Categories) -->

                            <!-- Single Widget (Recentpost) -->
                            <div class="single-widget wgt-recentpost">
                                <h4 class="widget-title">Recent Event</h4>
                                <ul>
                                    <li>
                                        <div class="wgt-recentpost__thumb">
                                            <a href="#">
                                                <img src="images/event/sidebar-event/1.png" alt="event thumb">
                                            </a>
                                        </div>
                                        <div class="wgt-recentpost__content">
                                            <h5><a href="event-details.html">Al-Quran Learning</a></h5>
                                            <p><span>Central Mosque, NY city</span><span>12 October, 2017</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-recentpost__thumb">
                                            <a href="#">
                                                <img src="images/event/sidebar-event/2.png" alt="event thumb">
                                            </a>
                                        </div>
                                        <div class="wgt-recentpost__content">
                                            <h5><a href="event-details.html">Sadaqah Collection</a></h5>
                                            <p><span>City Center hall, NY city</span><span>10 October, 2017</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wgt-recentpost__thumb">
                                            <a href="#">
                                                <img src="images/event/sidebar-event/3.png" alt="event thumb">
                                            </a>
                                        </div>
                                        <div class="wgt-recentpost__content">
                                            <h5><a href="event-details.html">History of Islam</a></h5>
                                            <p><span>Central Mosque, NY city</span><span>08 October, 2017</span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- Single Widget (Recentpost) -->

                            <!-- Single Widget (Advertisement) -->
                            <div class="single-widget wgt-advertisement">
                                <a href="#"><img src="images/others-jpg/sidebar-advertisement.jpg" alt="sidebar advertisement"></a>
                            </div><!-- //Single Widget (Advertisement) -->

                            <!-- Single Widget (Archives) -->
                            <div class="single-widget wgt-archives">
                                <h4 class="widget-title">Event Archives</h4>
                                <ul>
                                    <li><a href="events.html">September, 2017</a></li>
                                    <li><a href="events.html">August, 2017</a></li>
                                    <li><a href="events.html">July, 2017</a></li>
                                    <li><a href="events.html">June, 2017</a></li>
                                    <li><a href="events.html">May, 2017</a></li>
                                    <li><a href="events.html">April, 2017</a></li>
                                    <li><a href="events.html">March, 2017</a></li>
                                </ul>
                            </div><!-- Single Widget (Archives) -->

                            <!-- Single Widget (Tags) -->
                            <div class="single-widget wgt-tags">
                                <h4 class="widget-title">Event Tags</h4>
                                <ul>
                                    <li><a href="events.html">Salat</a></li>
                                    <li><a href="events.html">Ramadan</a></li>
                                    <li><a href="events.html">Sadaqah</a></li>
                                    <li><a href="events.html">Sunnah</a></li>
                                    <li><a href="events.html">Al-Quran</a></li>
                                    <li><a href="events.html">Islam</a></li>
                                    <li><a href="events.html">Iman</a></li>
                                    <li><a href="events.html">Hadiah</a></li>
                                </ul>
                            </div><!-- Single Widget (Tags) -->

                        </div><!-- //Sidebar Widgets  -->
                    </div><!-- //Sidebar Widgets Area -->

                </div>
            </div>
        </div><!-- //Event Details Area -->

    </main><!-- //Page Conent -->

    
@endsection