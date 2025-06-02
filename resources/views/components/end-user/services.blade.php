<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
    <div class="container">
        <div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                    Our services
                </h2>
                <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                    Convenient Laundry Services in NYC
                </p>
                <p class="m-0 mt-4 text-body text-lg leading-8">
                    Experience the power of eco-friendly laundry with our premium detergents
                </p>
            </div>
        </div>
        <div>
            <div
                class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
                @foreach ($services as $service)
                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="{{ asset('app') }}/assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3"
                                    alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                {{ $service->title }}
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="text-center pt-7">
            <a href="javascript:;"
                class="btn btn-lg btn-primary text-white icon-link icon-link-hover text-sm leading-6 fw-semibold">
                Learn more
                <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
                <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
            </a>
        </div>
    </div>
</div>
