@extends('frontend.master')
@section('content')
        <section class="hero-banner pos-rel z-1">
            <div class="container">
                <div class="slick hero-banner-slider">
                    <div class="hero-banner-slider-item pos-rel">
                        <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="banner img">
                        <article class="max-w-40 pos-abs">
                            <h1 class="text-white">Banner Title</h1>
                            <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, placeat unde eum commodi quam tempora dignissimos suscipit delectus maxime ipsam?</p>
                            <a href="#" class="btn btn-white btn-outline pill text-white">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>
                    <div class="hero-banner-slider-item pos-rel">
                        <img src="http://nra.org.np/assets/image/nra_cover1.jpg" alt="banner img">
                        <!-- <article class="max-w-40 pos-abs">
                            <h1 class="text-white">Banner Title</h1>
                            <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, placeat unde eum commodi quam tempora dignissimos suscipit delectus maxime ipsam?</p>
                            <a href="#" class="btn btn-white btn-outline rounded text-white">Read More</a>
                        </article> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner end -->

        <!-- features start -->
        <!-- <section class="feature section-padding-50">
            <div class="container">
                <div class="grid grid-cols-5 grid-gap-30">
                    <div class="card card--feature feature-first-card">
                        <article class="card__body card--feature__body">
                            <p class="mb-o"><span class="bg-third dash-line"></span> <span class="text-uppercase">What we do</span></p>
                            <h3>We Give Exchange</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, obcaecati?</p>
                        </article>
                        <a href="#" class="btn btn-outline-third pill">Discover More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="card card--feature">
                        <figure class="card__img card--feature__img">
                            <img src="{{ asset('assets/image/information.png') }}" alt="">
                        </figure>
                        <article class="card__body card--feature__body">
                            <h3>Consumer Information</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, obcaecati?</p>
                        </article>
                        <a href="#" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="card card--feature">
                        <figure class="card__img card--feature__img">
                            <img src="{{ asset('assets/image/calendar.png') }}" alt="">
                        </figure>
                        <article class="card__body card--feature__body">
                            <h3>Events & Activities</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, obcaecati?</p>
                        </article>
                        <a href="#" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="card card--feature">
                        <figure class="card__img card--feature__img">
                            <img src="{{ asset('assets/image/presentation.png') }}" alt="">
                        </figure>
                        <article class="card__body card--feature__body">
                            <h3>Traning & Development</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, obcaecati?</p>
                        </article>
                        <a href="#" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="card card--feature">
                        <figure class="card__img card--feature__img">
                            <img src="{{ asset('assets/image/directory.png') }}" alt="">
                        </figure>
                        <article class="card__body card--feature__body">
                            <h3>Member Directory</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, obcaecati?</p>
                        </article>
                        <a href="#" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- features end -->

        <!-- Ad start -->
        <!-- <section class="ad">
            <div class="container">
                <div class="grid grid-cols-2 grid-gap-10">
                    <figure class="ad__box">
                        <img src="assets/image/terpstock-dbk-ad.jpg" alt="ad">
                    </figure>
                    <figure class="ad__box">
                        <img src="assets/image/terpstock-dbk-ad.jpg" alt="ad">
                    </figure>
                </div>
            </div>
        </section> -->
        <!-- Ad end -->

        <!-- article start -->
        <section class="article home-article section-padding-50">
            <div class="container">
                <div class="grid grid-cols-2-1 grid-gap-30 article-wrapper bg-light-grey">
                    <article>
                        <h2>Message From President</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil earum laborum, odio vero unde assumenda. Eligendi modi porro earum quasi, quas consectetur unde suscipit similique fuga nisi eum pariatur voluptas?</p>
                        <a href="#" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                    </article>
                    <figure>
                        <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <!-- article end -->
        
        <!-- Ad start -->
        <section class="ad">
            <div class="container">
                <div class="grid grid-cols-2 grid-gap-10">
                    <figure class="ad__box">
                        <img src="assets/image/terpstock-dbk-ad.jpg" alt="ad">
                    </figure>
                    <figure class="ad__box">
                        <img src="assets/image/terpstock-dbk-ad.jpg" alt="ad">
                    </figure>
                </div>
            </div>
        </section>
        <!-- Ad end -->

        <!-- table start -->
        <section class="table-data section-padding-50">
            <div class="container">
                <form action="" class="exchange-rate">
                    <div class="grid grid-cols-2-1 grid-gap-30">
                        <h2 class="text-right">Today's Exchange Rate</h2>
                        <input placeholder="Choose date" type="text" name="checkIn" id="datepicker" value="" class="calendar"><i class="fa fa-calendar icon"></i>
                    </div>
                </form>
                <div class="grid grid-cols-2 grid-gap-30">
                    <div class="table-data-content bg-secondary">
                        <article class="text-center">
                            <h2>10 AM Exchange Rate</h2>
                            <p><span class="section-date">June-21-2021</span></p>
                        </article>
                        <div class="table-responsive">
                            <table class="table bg-secondary th-border">
                                <thead>
                                    <tr>
                                        <th>Currency</th>
                                        <th>Unit</th>
                                        <th>Buying Rate</th>
                                        <th>Selling Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>USD</td>
                                        <td>1</td>
                                        <td>103</td>
                                        <td>105</td>
                                    </tr>
                                    <tr>
                                        <td>AUS</td>
                                        <td>1</td>
                                        <td>89</td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td>EUR</td>
                                        <td>1</td>
                                        <td>79</td>
                                        <td>80</td>
                                    </tr>
                                    <tr>
                                        <td>CAD</td>
                                        <td>1</td>
                                        <td>96</td>
                                        <td>98</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="table-data-content bg-secondary">
                        <article class="text-center">
                            <h2>2 PM Exchange Rate</h2>
                            <p><span class="section-date">June-21-2021</span></p>
                        </article>
                        <div class="table-responsive">
                            <table class="table bg-secondary th-bg-third">
                                <thead>
                                    <tr>
                                        <th>Currency</th>
                                        <th>Unit</th>
                                        <th>Buying Rate</th>
                                        <th>Selling Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>USD</td>
                                        <td>1</td>
                                        <td>103</td>
                                        <td>105</td>
                                    </tr>
                                    <tr>
                                        <td>AUS</td>
                                        <td>1</td>
                                        <td>89</td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td>EUR</td>
                                        <td>1</td>
                                        <td>79</td>
                                        <td>80</td>
                                    </tr>
                                    <tr>
                                        <td>CAD</td>
                                        <td>1</td>
                                        <td>96</td>
                                        <td>98</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- table end -->

        <!-- news-list start -->
        <section class="news section-padding-50">
            <div class="container">
                <article>
                    <h2>News</h2>
                </article>
                <div class="grid grid-cols-3 grid-gap-30">
                    <div class="card card--img-cover card--news pos-rel">
                        <figure class="pos-rel">
                            <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                        </figure>
                        <article class="pos-abs">
                            <h3>Remittance equal to annual budget</h3>
                            <div class="card__meta-date">June-21-2021</div>
                            <p>Remittance income of the country in the current fiscal year will be almost equal to the annual budget of Nepal......</p>
                            <a href="#" class="btn btn-white btn-outline text-white pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </article>
                    </div>
                    <div class="news-list grid-span-2">
                        <div class="card card--news-list flex flex-cols-1-3">
                            <figure>
                                <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                            </figure>
                            <article>
                                <h3>Remittance equal to annual budget</h3>
                                <div class="card__meta-date">June-21-2021</div>
                                <p>Remittance income of the country in the current fiscal year will be almost equal to the annual budget of Nepal......</p>
                                <a href="#" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </article>
                        </div>
                        <div class="card card--news-list flex flex-cols-1-3">
                            <figure>
                                <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                            </figure>
                            <article>
                                <h3>Remittance equal to annual budget</h3>
                                <div class="card__meta-date">June-21-2021</div>
                                <p>Remittance income of the country in the current fiscal year will be almost equal to the annual budget of Nepal......</p>
                                <a href="#" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </article>
                        </div>
                        <div class="card card--news-list flex flex-cols-1-3">
                            <figure>
                                <img src="https://cdn.pixabay.com/photo/2021/06/13/07/33/mountain-pass-6332476_960_720.jpg" alt="">
                            </figure>
                            <article>
                                <h3>Remittance equal to annual budget</h3>
                                <div class="card__meta-date">June-21-2021</div>
                                <p>Remittance income of the country in the current fiscal year will be almost equal to the annual budget of Nepal......</p>
                                <a href="#" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-list end -->

        <!-- Teams start -->
        <section class="teams-list section-padding-50">
            <div class="container">
                <article class="section__header">
                    <h2>OFFICE BEARERS</h2>
                </article>
                <div class="grid grid-cols-3 grid-gap-30">
                    <div class="card card--team">
                        <figure class="card__img">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="circle" alt="team">
                        </figure>
                        <article class="card__body text-center">
                            <h3>Name Here</h3>
                            <div class="card__meta flex flex-content-between">
                                <div class="card__meta-designation">Designation <br> <span class="text">Project Manager</span></div>
                                <div class="card__meta-designation">Location <br> <span class="text">Koteshwor, Kathmandu, Nepal</span></div>
                            </div>
                        </article>
                    </div>
                    <div class="card card--team">
                        <figure class="card__img">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="circle" alt="team">
                        </figure>
                        <article class="card__body text-center">
                            <h3>Name Here</h3>
                            <div class="card__meta flex flex-content-between">
                                <div class="card__meta-designation">Designation <br> <span class="text">Project Manager</span></div>
                                <div class="card__meta-designation">Location <br> <span class="text">Koteshwor, Kathmandu, Nepal</span></div>
                            </div>
                        </article>
                    </div>
                    <div class="card card--team">
                        <figure class="card__img">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="circle" alt="team">
                        </figure>
                        <article class="card__body text-center">
                            <h3>Name Here</h3>
                            <div class="card__meta flex flex-content-between">
                                <div class="card__meta-designation">Designation <br> <span class="text">Project Manager</span></div>
                                <div class="card__meta-designation">Location <br> <span class="text">Koteshwor, Kathmandu, Nepal</span></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Teams end -->
@endsection
        