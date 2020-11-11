@extends('includes.app')

@section('Breadcrumb')

<!-- Breadcrumb area -->
<section class="cr-section breadcrumb-area" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="cr-breadcrumb text-center">
                    <h2 class="cr-breadcrumb__title">Gallery</h2>
                    <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- //Breadcrumb area -->



@endsection

@section('content')


        @php
            $itr = 1;
            $count = $galleries->count();
        @endphp
        @foreach($galleries as $gallery)
            <div class="col-md-3 col-sm-12 mb-4" style="" id="MyColum">

                <img src="{{ asset($gallery->image->thumbnail) }}" style="width:100%; height:100%;  border:1px solid #ddd;
        border-radius: 4px;
        padding: 5px; " onclick="openModal();currentSlide({{ $itr++ }})" class="hover-shadow cursor">
            </div>

        @endforeach
    

    </div>

</div>



@endsection
