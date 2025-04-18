@extends('partials.master')
@section('main')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Bizi Keşfedin</span>
            <h1 class="text-capitalize mb-5 text-lg">Blog</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
      <div class="col-lg-12 col-md-12 mb-5">
          <div class="blog-item">
              <div class="blog-thumb">
                  <img src="images/blog/blog-1.jpg" alt="" class="img-fluid ">
              </div>
  
              <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                      <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div> 
  
                  <h2 class="mt-3 mb-3"><a href="blog-single.html">Choose quality service over cheap service  all type of things</a></h2>
  
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
  
                  <a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
              </div>
          </div>
      </div>
  
      <div class="col-lg-12 col-md-12 mb-5">
          <div class="blog-item">
              <div class="blog-thumb">
                  <img src="images/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>
  
              <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                      <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div> 
  
                  <h2 class="mt-3 mb-3"><a href="blog-single.html">All test cost 25% in always in our laboratory</a></h2>
                  
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
  
                  <a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
              </div>
          </div>
      </div>
  
  
      <div class="col-lg-12 col-md-12 mb-5">
          <div class="blog-item">
              <div class="blog-thumb">
                  <img src="images/blog/blog-4.jpg" alt="" class="img-fluid">
              </div>
  
              <div class="blog-item-content">
                  <div class="blog-item-meta mb-3 mt-4">
                      <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
                  </div> 
                  <h2 class="mt-3 mb-3"><a href="blog-single.html">Get Free consulation from our special surgeon and doctors</a></h2>
  
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>
  
                  <a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
              </div>
          </div>
      </div>
  
      <div class="col-lg-12 col-md-12">
          <nav class="pagination py-2 d-inline-block">
              <div class="nav-links">
                  <span aria-current="page" class="page-numbers current">1</span>
                  <a class="page-numbers" href="#!">2</a>
                  <a class="page-numbers" href="#!">3</a>
                  <a class="page-numbers" href="#!"><i class="icofont-thin-double-right"></i></a>
              </div>
          </nav>
      </div>
  </div>
        </div>
        <div class="col-lg-4">
            <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                <div class="sidebar-widget search mb-3">
                    <h5>Burada Arama Yap</h5>
                    <form action="#" class="search-form">
                        <input type="text" class="form-control" placeholder="ara">
                        <i class="ti-search"></i>
                    </form>
                </div>
        
                <div class="sidebar-widget latest-post mb-3">
                    <h5>Popüler Yazılar</h5>
        
                    <div class="py-2">
                        <span class="text-sm text-muted">03 Mar 2018</span>
                        <h6 class="my-2"><a href="#">Los Angeles'ta Düşünceli Yaşam</a></h6>
                    </div>
        
                    <div class="py-2">
                        <span class="text-sm text-muted">03 Mar 2018</span>
                        <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
                    </div>
        
                    <div class="py-2">
                        <span class="text-sm text-muted">03 Mar 2018</span>
                        <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
                    </div>
                </div>
        
                <div class="sidebar-widget category mb-3">
                    <h5 class="mb-4">Kategoriler</h5>
        
                    <ul class="list-unstyled">
                        <li class="align-items-center">
                            <a href="#">Tıp</a>
                            <span>(14)</span>
                        </li>
                        <li class="align-items-center">
                            <a href="#">Ekipmanlar</a>
                            <span>(2)</span>
                        </li>
                        <li class="align-items-center">
                            <a href="#">Kalp</a>
                            <span>(10)</span>
                        </li>
                        <li class="align-items-center">
                            <a href="#">Ücretsiz Danışmanlık</a>
                            <span>(5)</span>
                        </li>
                        <li class="align-items-center">
                            <a href="#">Laboratuvar Testi</a>
                            <span>(5)</span>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-widget schedule-widget mb-3">
                    <h5 class="mb-4">Çalışma Saatleri</h5>
        
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Pazartesi - Cuma</span>
                            <span>9:00 - 17:00</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Cumartesi</span>
                            <span>9:00 - 16:00</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Pazar</span>
                            <span>Kapalı</span>
                        </li>
                    </ul>
        
                    <div class="sidebar-contatct-info mt-4">
                        <p class="mb-0">Acil Yardıma İhtiyacınız Var mı?</p>
                        <h3>+23-4565-65768</h3>
                    </div>
                </div>
            </div>
        </div> 
      </div>
    </div>
  </section>
  
@endsection