@extends('layouts.nav')

@section('content')

    <div class="container">
      <div class="row">
        @foreach($plans as $pl)
        <div class="col-sm-4">
          <div class="card subscription-card">
            <h3>{{ $pl->name }}</h3>
            <h5>${{ $pl->amount }}</h5>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="{{ $pl->id }}">Subscribe</button>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body" style="text-align:center;">
          <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection