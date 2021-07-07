@extends('layouts.app')
@section('content')
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/top">
            <img src="../storage/navTOPlog2.svg" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/top">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#link-9">特徴</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#link-10">機能</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/top#link-11">料金プラン</a>
                </li>
            </ul>

        </div>
        <h4 class="mr-3">TEL 045-000-0000</h4>
        <button type="button" class="btn btn-danger">お問い合わせ</button>
    </nav>

</header>
<!-- お問合せフォーム -->
<div id="inquiry" class="container-fluid mt-5">
    <div class="row bg-primary text-white p-3">
        <h3 class="font-weight-bold ml-5 pt-2">お問い合せ</h3>
    </div>

    <div class="container p-5">
        <p>お客様のからのご質問をお問い合わせフォームにて受け付けております。<br>
            必要事項をご記入のうえ【送信ボタン】を押してください。
        </p>
        {!! Form::open(['route'=>'confirm','mehod'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="row">
            <h4 id="point" class="p-2 my-3"><strong>お客様情報を入力してください。</strong></h4>
        </div>

        <div class="row border">
            <div class="col-sm-3 bg-light p-3">
                <p class="form-label">会社名<span class="badge badge-danger ml-1">必須</span></p>
            </div>
            <div class="col-sm-9 p-3">{{ Form::text('company-name', null, ['class'=> 'form-control']) }}</div>
        </div>
        @if($errors->has('company-name'))
        <p class="alert alert-danger m-2">{{ $errors->first('company-name') }}</p>
        @endif

        <div class="row border">
            <div class="col-sm-3 bg-light p-3">
                <p class="form-label">お名前<span class="badge badge-danger ml-1">必須</span></p>
            </div>
            <div class="col-sm-9 p-3">{{ Form::text('name', null, ['class'=> 'form-control']) }}</div>
        </div>
        @if($errors->has('name'))
        <p class="alert alert-danger m-2">{{ $errors->first('name') }}</p>
        @endif

        <div class="row border">
            <div class="col-sm-3 bg-light p-3">
                <p class="form-label">フリガナ<span class="badge badge-danger ml-1">必須</span></p>
            </div>
            <div class="col-sm-9 p-3">{{ Form::text('reading-name', null, ['class'=> 'form-control']) }}</div>
        </div>
        @if($errors->has('reading-name'))
        <p class="alert alert-danger m-2">{{ $errors->first('reading-name') }}</p>
        @endif

        <div class="row border">
            <div class="col-sm-3 bg-light p-3">
                <p class="form-label">ご住所<span class="badge badge-success ml-1">任意</span></p>
            </div>
            <div class="col-sm-9 p-3">
                <p class="m-0">郵便番号</p>{!! Form::text('postal_code',null, array('onkeyup'=>"AjaxZip3.zip2addr(this,'','prefecture','address1','address2','address3')")); !!} <br>
                <p class="m-0 pt-3">都道府県</p>{!! Form::select('prefecture', array('', '北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県')) !!} <br>
                <p class="m-0 pt-3">市区町村</p>{!! Form::text('address1', null, ['class'=> 'form-control']); !!} <br>
                <p class="m-0">番地/建物名</p>{!! Form::text('address2', null, ['class'=> 'form-control']); !!}
            </div>
        </div>
        <div class="row border">
            <div class="col-sm-3 bg-light p-3">
                <p class="form-label">電話番号<span class="badge badge-success ml-1">任意</span></p>
            </div>
            <div class="col-sm-9 p-3">{{ Form::text('tel', null, ['class'=> 'form-control']) }}</div>
        </div>
        <div class="row border">
            <div class="col-sm-3 bg-light p-3">
                <p class="form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
            </div>
            <div class="col-sm-9 p-3">{{ Form::text('email', null, ['class'=> 'form-control']) }}</div>
        </div>
        @if($errors->has('email'))
        <p class="alert alert-danger m-2">{{ $errors->first('email') }}</p>
        @endif

        <div class="row">
            <h4 id="point" class="p-2 my-4"><strong>お問い合わせ内容を入力してください。</strong></h4>
        </div>

        <div class="row border">
            <div class="col-sm-3 bg-light p-3">
                <p class="form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
            </div>
            <div class="col-sm-9 p-3"> {{ Form::textarea('contents', null, ['class'=> 'form-control']) }}</div>
        </div>
        @if($errors->has('contents'))
        <p class="alert alert-danger m-2">{{ $errors->first('contents') }}</p>
        @endif

        <div class="text-center m-3">
            <button name="action" type="submit" value="submit" class="btn btn-primary">送信する</button>
        </div>
        {!! Form::close() !!}
    </div>

</div>
</div>

@endsection
