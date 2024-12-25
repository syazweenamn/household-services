<section class="position-relative">
    <div id="ecommerceHero" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($servicecategories as $servicecategory)
                <div class="carousel-item {{ ($loop->index == 0) ? "active" : "" }}">
                
                    <div class="ecommerce-home bg-danger-subtle" style="background-image: url('{{ asset('assets/images/'.strtolower(trim($servicecategory->servicecategory_name, " Services")).'.jpg') }}');">
                    <!-- <div class="ecommerce-home bg-danger-subtle" style="background-image: url('{{ asset('assets/images/pink.jpg') }}');"> -->
 
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-12">
                                    <div class="text-sm-start">
                                        <h1 class="display-4 fw-bold text-capitalize mb-3">{{ $servicecategory->servicecategory_name }}</h1>
                                        
                                        <a href="{{ route('serviceList', ['servicecategory' => $servicecategory->id]) }}" class="btn btn-{{ btnColor($servicecategory->servicecategory_name) }} btn-hover">Book Now <i class="ph-arrow-up-right align-middle ms-1"></i></a>
                                    </div>
                                </div>
                            </div>                                                                      
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#ecommerceHero" data-bs-slide="prev">
            <i class="ph-caret-left"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#ecommerceHero" data-bs-slide="next">
            <i class="ph-caret-right"></i>
        </button>
    </div>
</section>
