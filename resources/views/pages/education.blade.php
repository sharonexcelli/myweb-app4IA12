<section id="education">
    <div class="container">
        <div class="col-md-12" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="section-heading">Education</h2>
            <div class="devider"></div>
        </div>
        <div class="row mb-5">
            @foreach ($edus as $edu)
            <div class="col-lg-8" data-aos="fade-right" data-aos-duration="1500">
                <h4 class="mb-0">{{ $edu->name }}</h4>
                <p class="lead">{{ $edu->description }}</p>
            </div>
            <div class="col-lg-4 text-lg-right" data-aos="fade-left" data-aos-duration="1500">
                {{ $edu->since }}
            </div>
            @endforeach
        </div>
    </div>
</section>
