<!-- Portfolio Section -->
<section id="portfolio">
    <!-- Page Content -->
    <div class="col-md-12">
        <h2 class="section-heading" data-aos="fade-up" data-aos-duration="1500">Portfolio</h2>
        <h3 class="section-subheading text-muted" data-aos="fade-up" data-aos-duration="1500">
            Side Project
        </h3>
    </div>
    <div class="container">
        <div class="row">
        <!-- Portfolio -->

        @foreach  ($portfolios as $portfolio)

            <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
                <div class="card border-0 shadow cardbody-hover">
                    <img src="{{ $portfolio->image }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">{{ $portfolio->title }}</h5>
                        <div class="card-text text-black-50">{{ $portfolio->job }}</div>
                    </div>
                </div>
            </div>

        @endforeach

        </div>

        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
