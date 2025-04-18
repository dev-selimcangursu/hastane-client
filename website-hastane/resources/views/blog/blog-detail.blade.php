@extends('partials.master')
@section('main')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Blog</span>
            <h1 class="text-capitalize mb-5 text-lg">Blog Detayı</h1>
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
      <div class="col-lg-12 mb-5">
          <div class="single-blog-item">
              <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">
  
              <div class="blog-item-content mt-5">
                  <div class="blog-item-meta mb-3">
                      <span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i> Equipment</span>
                      <span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> 28th January 2019</span>
                  </div>
  
                  <h2 class="mb-4 text-md"><a href="blog-single.html">Healthy environment to care with modern equipment</a></h2>
  
                  <p class="lead mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
                      pariatur repudiandae!</p>
  
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil
                      nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam
                      voluptate in beatae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae iure officia nihil nemo,
                      repudiandae itaque similique praesentium non aut nesciunt facere nulla, sequi sunt nam temporibus atque earum,
                      ratione, labore.</p>
  
                  <blockquote class="quote">
                      A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.
                  </blockquote>
  
  
                  <p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the emotional sensation of
                      stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically.
                  </p>
  
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt
                      quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto
                      expedita sapiente.</p>
  
                  <div class="mt-5 clearfix">
                      <ul class="float-left list-inline tag-option">
                          <li class="list-inline-item"><a href="#!">Advancher</a></li>
                          <li class="list-inline-item"><a href="#!">Landscape</a></li>
                          <li class="list-inline-item"><a href="#!">Travel</a></li>
                      </ul>
  
                      <ul class="float-right list-inline">
                          <li class="list-inline-item"> Share: </li>
                          <li class="list-inline-item"><a href="#!"><i class="icofont-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="#!"><i class="icofont-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#!"><i class="icofont-pinterest"></i></a></li>
                          <li class="list-inline-item"><a href="#!"><i class="icofont-linkedin"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
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