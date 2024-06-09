<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->
<!-- Navbar start -->
<div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-white d-none d-lg-block">
        <div class="container px-0">
            <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                <div class="top-info flex-grow-0">
                    <span class="rounded-circle btn-sm-square bg-primary me-2">
                        <i class="fas fa-bolt text-white"></i>
                    </span>
                    <div class="pe-2 me-3 border-end border-dark d-flex align-items-center">
                        <p class="mb-0 text-dark fs-6 fw-normal">Tendência</p>
                    </div>
                    <div class="overflow-hidden" style="width: 735px;">
                        <div id="note" class="ps-2">
                            <img src="{{asset('assets/img/features-fashion.jpg')}}" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt="">
                            <a href="#"><p class="text-dark mb-0 link-hover">Convênio entre a UKB e o banco BCI gera bolsa de estudos aos estudantes.</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @include('home.components.partials.menu1')
</div>
<!-- Navbar End -->
