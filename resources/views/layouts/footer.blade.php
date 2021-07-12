<link rel="stylesheet" href="{{url('public/templates/default')}}/css/lib/font-awesome/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<style>
.footer{
background: #222222;

}

.lia {
  text-decoration: none;
  color: #FFFFFF;
}

.lia:hover{
  color: #18B5FC;
}

.foo{
  color: #FFF;
}

.mr-2 > a{
 color:#FFF;
}

</style>

<section class="footer">
<footer class="text-white text-center text-md-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                <img src="/img/logo unpaders.png" width="150" height="40">
                    <p class="foo">
                      Unpaders.id © 2020
                    </p>
            </div>

            <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="{{url('/disclaimer')}}" class="lia" style="text-decoration: none;">DISCLAIMER</a>
                  </li>
                  <li>
                    <a href="{{url('/kontributor')}}" class="lia" style="text-decoration: none;">KETENTUAN KONTRIBUTOR</a>
                  </li>
                  <li>
                    <a href="{{url('/kontak')}}" class="lia" style="text-decoration: none;">KONTAK REDAKSI</a>
                  </li>
                  <li>
                    <a href="{{url('/')}}" class="lia" style="text-decoration: none;">RSS</a>
                  </li>
                  <li>
                    <a href="{{url('/tentang')}}" class="lia" style="text-decoration: none;">TENTANG UNPADERS.ID</a>
                  </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <div class="row">
                <p class="text-uppercase mb-0">Follow Us</p>
                </div>
                <div class="row">
                    <div class="mr-2"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></div>
                    <div class="mr-2"><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></div>
                    <div class="mr-2"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                    <div class="mr-2"><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>