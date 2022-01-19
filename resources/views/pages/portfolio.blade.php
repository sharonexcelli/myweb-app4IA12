<section id="portfolio">
    <div class="container">
        <div class="col-md-12" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="section-heading">Portfolio</h2>
            <div class="devider"></div>
            <h3 class="section-subheading text-muted">
                Side Project
            </h3>
        </div>
        <div class="row">

        @foreach  ($portfolios as $portfolio)

            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
                <div class="card border-0 shadow cardbody-hover">
                    <a href="{{ $portfolio->link }}" class="portfolio-link" >
                        <img src="{{ $portfolio->image }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">{{ $portfolio->title }}</h5>
                        <div class="card-text text-black-50">{{ $portfolio->job }}</div>
                    </a>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</section>
