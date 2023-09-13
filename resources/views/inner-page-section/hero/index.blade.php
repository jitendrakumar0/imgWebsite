<!-- top banner section -->
<div class="container-fluid overflow-hidden top_banner position-relative" style="--bg:url({{GETFOLDERPATH()}}/hero.webp);">
    <div class="container py-5 position-relative zi-2">
        <div class="row pt-4">
            <div class="col-12">
                <div class="row pt-4 align-items-center">
                <div class="col-lg-6 py-lg-5 pt-md-5 pb-md-4 py-4 order-lg-0 order-md-1 order-1">
                    <div class="row pt-3 text-lg-start text-md-center text-center position-relative">
                        <div class="col-12">
                            <div class="row mx-0 pb-2">
                                <h1 class="d-none invisible">@yield('hero_hiddenHeading')</h1>
                                <div class="col-12 heading fs-md-14 fs-12 left text-white">@yield('hero_heading')</div>
                            </div>
                        </div>
                        <div class="col-12 fw-500 fs-lg-16 fs-md-16 fs-sm-15 fs-14 text-white mt-3 mb-lg-3">@yield('hero_tagline')</div>
                        <div class="col-12 pt-3">
                            @yield('hero_btn')
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-5 top_banner-left-part">
                    <div class="row justify-content-lg-end justify-content-md-center justify-content-center">
                        <div class="col-lg-8 col-md-5 col-7 position-relative">
                            @yield('hero_img')
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
