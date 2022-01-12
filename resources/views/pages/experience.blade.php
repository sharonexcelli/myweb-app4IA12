{{-- <section id="experience" class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="font-weight-light">
            EXPERIENCE
        </h2>
        <hr class="mb-5" style="border-top: 1px solid #FFFFFF">
        @foreach ($experiences as $experience)
        <div class="row mb-5">
            <div class="col-lg-8">
                <h4 class="mb-0">{{ $experience->title }}</h4>
                <p class="lead">{{ $experience->loc }}</p>
                <p>
                    {{ $experience->description }}
                </p>
            </div>
            <div class="col-lg-4 text-lg-right">
                {{ $experience->since }}
            </div>
        </div>
        @endforeach
    </div>
</section> --}}



<section id="experience">
    <div class="container">
        <div class="col-md-12">
            <h2 class="section-heading" data-aos="fade-up" data-aos-duration="1500">Experience</h2>
        </div>

        @foreach ($experiences as $experience)

        <div class="row mb-5">
            <div class="col-lg-8" data-aos="fade-right" data-aos-duration="1500">
                <h4 class="mb-0">{{ $experience->title }}</h4>
                <p class="lead">{{ $experience->loc }}</p>
                <p>
                    {{ $experience->description }}
                </p>
            </div>
            <div class="col-lg-4 text-lg-right" data-aos="fade-left" data-aos-duration="1500">
                {{ $experience->since }}
            </div>
        </div>

        @endforeach

    </div>
</section>
