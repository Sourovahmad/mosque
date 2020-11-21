@extends('includes.app')

@section('Breadcrumb')
    <!-- Top Banner -->


    <!-- Breadcrumb area -->
    <section class="cr-section breadcrumb-area" data-black-overlay="2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="cr-breadcrumb text-center">
                        <h2 class="cr-breadcrumb__title">ABOUT</h2>
                        <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>about</li>
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

<section class="cr-section events-area bg--white ptb--150 flower--left-bottom flower--right-top" id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                <div class="section-title text-center">
                    <h2>Masjid Mission center   “ (Haji Camp) ”</h2>
                   
                </div>
                <p><span>Masjid Mission center (Haji Camp) </span>which is a community based non-profit organization that was established in the year of 2012  </p>
                <p>The Mission of the Masjid mission center is to assist the Muslim communities of Jamaica Queens in the fields of social, education, religious development, cultural orientation and other humanitarian programs. We fulfill our mission through a variety of programs and activities including giving to charitable causes and feeding the hungry, hosting meetings and conference for a better understanding, providing cultural and community outreach programs and other services with the collaboration and coordination of local Muslim organizations and other concerned non-profit humanitarian agencies.
                </p>
                <p>Due to largely growing the Muslim communities in the city of New York we established this nonprofit organizations (Masjid Mission center) with your help, support and generous contributions to continue serving and advocate the Muslim communities with dedicated efforts in the fields of religious development, education, social, community development and other humanitarian services including the needs and interests of the community people.
                </p>
                <p>Masjid Mission center is a place where we always gather to worship Allah, learn religious education and knowledge, help each other, socialize, and share our joys and problems</p>
            </div>
        </div>
     
    </div>
</section>


    <!-- About Details Area -->
    <div class="cr-section about-details-area ptb--120 bg--pattern" id="Who-We-Are">
        <div class="container">
            <div class="about-details">
                <div class="row">
                    <div class="col-12 col-md-3 offset-0 offset-md-2 offset-lg-0 pl-4">
                        <div class="about-details__content">
                            <div class="row">
                                <div class=" col-12 col-lg-12 col-md-12">
                                    <div class="single-block">
                                        <h4 class="single-block__title">Who we are </h4>
                                        <p> Masjid Mission Center (MMC) is a 501(c) religious organization in Jamaica NY - a
                                            community of believers adhering to the Qur'an and the life traditions of Prophet
                                            Muhammad (Peace and Blessing Be Upon Him). </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <!-- About Details Content -->
                        <div class="about-details__content">
                            <div class="row">
                                <div class=" col-12 col-lg-5 col-md-5">
                                    <div class="single-block">
                                        <h4 class="single-block__title">Our Mission and Our Vision</h4>
                                        <p>Masjid Mission Center ( MMC ) is committed to the Islamic way of life based on
                                            the Qur'an and life example of Prophet Muhammad. We serve as a center for
                                            religious development, social, educational, economic, and cultural enrichment.
                                            We believe in the Oneness of God and the oneness of humanity. We are committed
                                            to promoting excellence in community life and human dignity throughout our
                                            neighborhoods, city, country, and global community.</p>
                                    </div>

                                </div>
                                <div class=" col-12 col-lg-7 col-md-7">
                                    <div class="single-block">
                                        <h4 class="single-block__title">Activities & Services</h4>
                                        <p>
                                        <ul>
                                            <li>5 Times Daily Salat & Friday Jummah </li>
                                            <li>Islamic Seminars & Lectures </li>
                                            <li> Weekly Bayan (Lecture) </li>
                                            <li>Weekend Islamic Studies Courses </li>
                                            <li> Islamic Library </li>
                                            <li>Conducting Nikah ( Marriage ) Ceremonies </li>
                                            <li>Distribution of Qurbani meat and zakat ul - Fitr ( charity ) to the
                                                needy
                                            </li>
                                            <li> Collection of Zakat & Sadaqah to distribute to the needy</li>
                                            <li>Hifzul - Quran ( Memorization of the Glorious Quraan </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- //About Details Content -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- //About Details Area -->


    <!-- Team Area -->
    <section class="cr-section team-area ptb--150 bg-image--7 " id="imam" data-black-overlay="8">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="section-title text-center">
                        <h4>Our “Team”</h4>
                        <h2>Meet our Organizer</h2>
                        <p>Islam is the know how to pursue pleasure rationally encounter consequences that are extremely
                            painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <!-- Single Team -->
                @foreach ($imams as $imam)


                    <div class="col-lg-6 col-md-6 col-xl-3">
                        <figure class="team-member wow fadeInUp">
                            <div class="team-member__thumb">
                                <div class="hexagon">
                                    <div class="hexagon__inner1">
                                        <div class="hexagon__inner2">
                                            <img src="{{ asset($imam->image->url) }}" alt="{{ $imam->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member__content">
                                <h3>{{ $imam->name }}</h3>
                                <h5>{{ $imam->designation }}</h5>
                            </figcaption>
                        </figure>
                    </div><!-- //Single Team -->
                @endforeach

                <!-- Single Team -->
                {{-- <div class="col-lg-6 col-md-6 col-xl-3">
                    <figure class="team-member wow fadeInUp">
                        <div class="team-member__thumb">
                            <div class="hexagon">
                                <div class="hexagon__inner1">
                                    <div class="hexagon__inner2">
                                        <img src="images/team/2.jpg" alt="team member 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member__content">
                            <h3>Nahiyan Bin Momen</h3>
                            <h5>Event Organizer</h5>
                        </figcaption>
                    </figure>
                </div><!-- //Single Team -->
                <!-- Single Team -->
                <div class="col-lg-6 col-md-6 col-xl-3">
                    <figure class="team-member wow fadeInUp">
                        <div class="team-member__thumb">
                            <div class="hexagon">
                                <div class="hexagon__inner1">
                                    <div class="hexagon__inner2">
                                        <img src="images/team/4.jpg" alt="team member 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member__content">
                            <h3>Hasib Bin Asfaque</h3>
                            <h5>Imam</h5>
                        </figcaption>
                    </figure>
                </div><!-- //Single Team --> --}}
            </div>

            <div class="cr-pagination text-right">
                <ul>
                    {{ $imams->links() }}
                </ul>
            </div>
        </div>

    </section><!-- //Team Area -->


    {{-- Rules and Regulation Area --}}


    <section class="bg-white flower--right-bottom">
        <div class="container">

            <div class="pt-4 pr-4" >
                <div class="text-center font-weight-bold" style="font-weight: 800; font-size:28px; color:black; padding-top: 20px">Rules and Regulation</div>

            </div>
            <div class="row p-4">

                <div class="col-sm-12 col-md-4  p-4">
                    <div class="nav flex-column nav-pills rules-side-nav" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link  active" id="v-pills-basic-tab" data-toggle="pill" href="#v-pills-basic"
                            role="tab" aria-controls="v-pills-basic" aria-selected="true">Basic</a>
                        <a class="nav-link  " id="v-pills-fundraising-tab" data-toggle="pill" href="#v-pills-fundraising"
                            role="tab" aria-controls="v-pills-fundraising" aria-selected="true">FUNDRAISING</a>
                        <a class="nav-link " id="v-pills-announcement-tab" data-toggle="pill" href="#v-pills-announcement"
                            role="tab" aria-controls="v-pills-announcement" aria-selected="false">ANNOUNCEMENT</a>
                        <a class="nav-link " id="v-pills-posting-tab" data-toggle="pill" href="#v-pills-posting" role="tab"
                            aria-controls="v-pills-posting" aria-selected="false">POSTING NEWS OR ADS ON WEB</a>
                        <a class="nav-link " id="v-pills-organize-tab" data-toggle="pill" href="#v-pills-organize"
                            role="tab" aria-controls="v-pills-organize" aria-selected="false">ORGANIZED PROGRAMS /
                            EVENTS</a>
                        <a class="nav-link " id="v-pills-additional-tab" data-toggle="pill" href="#v-pills-additional"
                            role="tab" aria-controls="v-pills-additional" aria-selected="false">ADDITIONAL REGULATIONS</a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 p-4">

                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel"
                            aria-labelledby="v-pills-basic-tab">
                            <p>
                                In order To ensure the smooth operation of Masjid Mission Center ( MMC ) and to better serve
                                the
                                community, the following policy has been formulated and will be implemented regarding non -
                                MMC
                                / Masjid
                                sponsored programs, announcements, events, and activities.
                            </p>

                            <p>
                                This policy is subject to change without notice. Please see a member of the Masjid Committee
                                of
                                email
                                masjid pncenterusögmail.com for any questions or concerns.
                            </p>
                        </div>
                        <div class="tab-pane fade show" id="v-pills-fundraising" role="tabpanel"
                            aria-labelledby="v-pills-fundraising-tab">
                            <ul>

                                <li> All fund raising requests should be submitted four ( 4 ) months prior to the event</li>
                                <li> The following documents need to be submitted at the time of the request</li>

                                <li> RS tax exemption certificate</li>
                                <li>Certificate of incorporation in home state</li>
                                <li> Signed letter of intent for fundraising on organization's letter head</li>




                                <li> Receipt of funds collected with exact dollar amount should be signed and mailed
                                    promptly
                                    after fundraising event</li>

                                <li>Failure to comply with one or all of these regulations may result in consequences up to
                                    and
                                    including forfeiture of funds collected</li>

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-announcement" role="tabpanel"
                            aria-labelledby="v-pills-announcement-tab">

                            <ul>

                                <li> Friday announcements
                                    <ul>
                                        <li>All announcement requests must be received in writing before Thursday 5:00 p.m.
                                        </li>
                                        <li> Friday announcements may be made by the Imam and/or designated member of the
                                            Masjid
                                            Committee</li>
                                    </ul>
                                </li>


                                <li> General announcements
                                    <ul>
                                        <li>Emergency announcements like newborn, hospitalization, accident, death, and
                                            request
                                            for du'a can be made only with the permission of Imam or a member of the Masjid
                                            Committee</li>
                                        <li> Other announcements apart from those stated above require prior approval from
                                            the
                                            Masjid committee</li>
                                    </ul>
                                </li>
                            </ul>


                        </div>
                        <div class="tab-pane fade" id="v-pills-posting" role="tabpanel"
                            aria-labelledby="v-pills-posting-tab">

                            <ul>
                                <li>Approval of Imam or a member of the Masjid committee.

                                </li>
                                <li>Fees may Apply

                                </li>


                            </ul>



                        </div>
                        <div class="tab-pane fade" id="v-pills-organize" role="tabpanel"
                            aria-labelledby="v-pills-organize-tab">
                            <p>
                                All program/event requests should be made at least four ( 4 ) weeks in advance

                                Those requests will require review and approval of relevant program information ( eg,
                                program
                                summary, presentation, etc by The Masjid Committee and' or Imam. Programs may be recorded
                                and
                                will remain the property of MMC. By agreeing to conduct the program on masjid property, the
                                requester agrees to these conditions and will abide by all masjid policies, rules, and
                                regulations.
                                The approved individual or group responsible for conducting the program will follow the
                                general
                                guidelines of the masjid and should maintain Islamic conduct

                            </p>
                            Approved programs include:
                            <ul>

                                <li> Islamic or religious programs</li>
                                <li>Community or general affairs</li>
                                <li>Dinner or lunch programs</li>

                            </ul>
                            <p>
                                Any program Volating masid policy . Islarnic law , and / or applicable local , state , and /
                                or
                                federal laws will not be permitted . Programs should also meet requirements for IRS code
                                Section
                                501 c ) ( 3 ) for churches of religious houses of worship
                            </p>

                        </div>
                        <div class="tab-pane fade" id="v-pills-additional" role="tabpanel"
                            aria-labelledby="v-pills-additional-tab">
                            <ul>
                                <li>Any activity, program , group , or personal activity violating besic Islamic law ( Sunni
                                    )
                                    is strictly prohibited and will be canceled with or without notice . Any interpretation
                                    of
                                    religious matters will be referred to the Imam </li>
                                <li> All Islamic religious matters require review and approval of Imam of Masjid Mission
                                    Center
                                    ( MMC ) </li>
                                <li>Any activity , program by person or group that may harm , threaten or endanger any other
                                    individual group will not be tolerated . Such an Individual will be appropriately
                                    reprimanded up to and including expulsion from the masjid </li>
                                <li> Any illegal activity by any individual or group will be reported immediately to law
                                    enforcement </li>
                                <li>No masjid property can be borrowed , moved , or rearranged without prior approval from a
                                    member of the Masjid Committee of Imam</li>
                                <li> No personal items should be left outside or inside the masjid without prior approval
                                    from a
                                    member of the Masjid Committee or Imam</li>
                                <li>Sleepover in the masjid including Itikaf requires awareness all relevant rules and
                                    regulations and therefore must be pre - approved by a member of the Masjid Committee and
                                    /
                                    or Imam Requests will not be granted without an advanced request. </li>
                                <li>Vehicles should be parked in a designated parking space . Overnight parking requires
                                    approval of any member of the Masjid Committee. Vehicles parked inappropriately and
                                    parked
                                    overnight without prior approval will be towed at owners expense</li>
                                <li>The requestor assumes full responsibility for the liability of any statement and / or
                                    program carried out during the event and / or by affifiated group member . Opinions
                                    expressed there are not necessarily endorsed by MMC </li>
                                <li class="font-weight:bold"> <span class=""> CELL PHONES AND PAGERS MUST</span> be turned
                                    off
                                    or switched to vibrate during the 5 Daily Prayers and Jummah Prayer. Please show your
                                    respect for Allah ( swt ) and those around you</li>
                                <li> <span class="font-weight-bold"> SHOES</span> are not permitted on the carpeted area an
                                    MUST
                                    be removed and placed in shoe racks upon entry in the Masjid . Shoes left on the tiled
                                    area
                                    can be a safety hazard</li>
                                <li> <span class="font-weight-bold">YOUNG CHILDREN</span> are encouraged at the Masild but,
                                    they
                                    MUST be next to their parents during Prayer. Or any other actions consider unsafe or
                                    distracting to others </li>
                                <li>Buying and selling of any kind in the Masjid shall be barred </li>
                                <li> When anyone finds others dong something wrong , he / she should ask them not to do
                                    quietly
                                    and softly . Everyone shall avoid insulting others openly , or rebuking others , or
                                    quarreling with others</li>
                                <li> Any complaints , suggestions , disputes or disagreements shall be brought to attention
                                    of
                                    the Masjid Committee -MMC Executive Committee</li>

                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>





    <!-- Offer area -->
    <section class="cr-section offer-area ptb--70 bg--pattern ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="section-title text-center">
                        <h2>OUR GALLERY</h2>
                        {{-- <p>It is obligatory upon every muslim to offer their salaah
                            (prayers) five times a day. The image below shows the correct positions of praying in every
                            salah.</p> --}}
                    </div>
                </div>
            </div>

            <div class="row AboutImage">

                @foreach ($galleries as $gallery)

                    <a mt-4 href="{{ route('home') }}/{{ $gallery->image->url }}" data-toggle="lightbox"
                        data-gallery="gallery" class="col-md-4 mt-4 ">
                        <img src="{{ route('home') }}/{{ $gallery->image->thumbnail }}" class="img-fluid rounded AboutImage"
                            style="width: 100%" alt="{{ $gallery->caption }}">
                    </a>
                @endforeach

            </div>
        </div>
    </section><!-- //Offer area -->




@endsection
