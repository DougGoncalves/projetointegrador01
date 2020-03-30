@extends('layouts.master_layout')
@section('conteudo')
<ul id="feed"></ul>

<div class="container" style="margin-top:20px;margin-bottom:20px;padding:50px;background-color:#ddd;">
    <div class="row">
      <div class="col-md-3">
        <img src="" class="profile-pic" style="border-radius:50%;">
      </div>
      <div class="col-md-9">
        <h2 class="username"></h2>
        <div class="row">
          <div class="col-md-4">
            <span class="number-of-posts"></span> posts
          </div>
          <div class="col-md-4">
            <span class="followers"></span> followers
          </div>
          <div class="col-md-4">
            <span class="following"></span> following
          </div>
        </div>
        <div class="row" style="margin-top:60px;">
          <h4 class="name"></h4>
        </div>
        <div class="row">
          <h4 class="biography"></h4>
        </div>
        <br><hr><br>
        <div class="row">
          <p>POSTS</p>
        </div>
        <div class="row posts"></div>
      </div>
    </div>
  </div>

  <script src="scripts/instagram.js"></script>
@endsection
