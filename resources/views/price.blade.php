@extends('layouts.app')
@section('content')
<br>
<div class="container-fluid">
    <a name="link-11"></a>
    <div class="container my-5">
        <div class="row m-5">
            <h3 class="font-weight-bold mx-auto">料金プラン</h3>
        </div>
          <p>さまざまな業務状況に合うプランをご用意しました。<br>
             お客様に合うプランをお選びください。<br><br>
             アカウントによる機能制限はございません。</p>
         <div class="row text-center">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title bg-danger text-white rounded p-2">ライト</h5>
        <h4 class="card-text border-bottom py-3"><strong>月額/3万円</strong></h4>
        <h6 class="card-text">ご使用可能人数<strong class="h4">50人</strong></h6>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title bg-danger text-white rounded p-2">ベーシック</h5>
        <h4 class="card-text border-bottom py-3"><strong>月額/6万円</strong></h4>
        <h6 class="card-text">ご使用可能人数<strong class="h4">100人</strong></h6>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title bg-danger text-white rounded p-2">ビジネス</h5>
        <h4 class="card-text border-bottom py-3"><strong>月額/8万円</strong></h4>
        <h6 class="card-text">ご使用可能人数<strong class="h4">150人</strong></h6>

      </div>
    </div>
  </div>
</div>
<div class="row">
<h3 class="font-weight-bold mx-auto my-5">初期費用/オプション</h3>
</div>
<div class="row mx-auto text-center">
<div class="col-sm-5 mx-auto">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title bg-success text-white rounded p-2">初期費用</h5>
        <h4 class="card-text py-4"><strong>7万円</strong></h4>
        <h6 class="card-text　py-4">初期登録作業や担当者様へのレクチャー<br>
      などの料金に成ります。</h6>
      </div>
    </div>
  </div>
  <div class="col-sm-5 mx-auto">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title bg-success text-white rounded p-2">オプション</h5>
        <h4 class="card-text　font-weight-bold py-3"><strong>１項目/3万～5万円</strong></h4></h5>
        <h6 class="card-text pb-2">登録項目の名称変更や項目内容の追加などの<br>編集費用に成ります。<br>
        <samp class="text-danger"><small>※【変更内容に寄って金額が異なります】</small></samp></h6>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
@endsection
