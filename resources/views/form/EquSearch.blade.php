@extends('share.layout')

@section('pagetitle','備品検索')

@section('content')
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">検索条件</h3>
  </div>
  <div class="box-body">

    <!-- 検索フォーム -->
    <form role="form" action="" method="post">
    <!-- CSRF保護 -->
    @csrf
      <div class="form-group">
        <label　class="col-sm-2 control-label">備品ID</label>
        <input type="text" class="form-control" placeholder="namber ..." name='equ_id' value="{{ old('equ_id') }}">
      </div>
      <div class="form-group">
        <label>備品名称</label>
        <input type="text" class="form-control" placeholder="name ..." name='equ_name' value="{{ old('equ_name') }}">
      </div>
      <div class="form-group">
        <label>カテゴリ</label>
          {!! Form::select('Pull_equ', $cate, old('Pull_equ'),
                    ['class' => 'form-control','name' =>'cate_equ']) !!}
      </div>
      <div class="form-group">
        <label>使用拠点</label>
          {!! Form::select('Pull_base', $base, old('Pull_base'),
                    ['class' => 'form-control','name' =>'use_base']) !!}
      </div>
      <div class="form-group">
        <label>ラベルNo</label>
        <input type="text" class="form-control" placeholder="label ..." name='label'>
      </div>
      <div class="form-group">
        <label>IPアドレス</label>
        <input type="text" class="form-control" placeholder="ipadress ..." name='ipadress'>
      </div>
      <div class="form-group">
        <label>使用者</label>
        <input type="text" class="form-control" placeholder="use_name_hf ..." name='use_name'>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-default">検索</button>
      </div>
    </form>
  </div>
</div>
@if($equ != null)
<!-- テーブル一覧 -->
<div class="box">
  <div class="dataTables_wrapper form-inline dt-bootstrap">
    <table class="table table-bordered table-hover dataTable">
      <!-- ヘッダー -->
      <thead>
        <tr>
          <th></th>
          <th class="sorting_asc">備品ID</th>
          <th class="sorting">備品名</th>
          <th class="sorting">カテゴリ</th>
          <th class="sorting">拠点</th>
          <th class="sorting">IPアドレス</th>
          <th class="sorting">使用者</th>
        </tr>
      </thead>

      <!-- 表示データ -->
      <tbody>
        @foreach($equ as $row)
        <tr role="row">
          <form action="" method="post">
            <!-- CSRF保護 -->
            @csrf
            <td width="50px"><button type="submit" class="btn btn-block btn-primary" value='{{$row->id}}'>詳細</button></td>
          </form>
          <td>{{$row->id}}</td>
          <td>{{$row->equ_name_hf}}</td>
          <td>{{$row->category_equ_id}}</td>
          <td>{{$row->use_base_in_hs}}</td>
          <td>{{$row->ip_adrs_en_hs}}</td>
          <td>{{$row->use_name_hf}}</td>
        </tr>
        @endforeach
      </tbody>

    </table>
    {{$equ->links()}}
  </div>
</div>
@endif
@endsection
