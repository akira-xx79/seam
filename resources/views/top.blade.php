@extends('layouts.app')
@section('content')
<header>
 <nav>
    <ul class="nav justify-content-center">
     <li class="nav-item">
       <a class="nav-link active" href="#">Active</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Link</a>
     </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Disabled</a>
    </li>
  </ul>
</nav>

</header>
<div class="container-fluid p-0">
    <section >
      <img class="img-fluid" src="../storage/seamTOP画像2.svg" alt="top画像" style="width: 100%;">
    </section>
</div>
    <div class="container">
        <div class="row">
              <img  class="img-fluid mx-auto d-block" src="../storage/seam問題画像.svg" alt="問題画像" >
        </div>
     </div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>その悩みSEAMですべて解決出来ます！！</h1>
        </div>
    </div>
</div>





@endsection
