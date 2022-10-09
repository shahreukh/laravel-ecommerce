@extends ('admin.layout.layout')

@section('content')

<!-- top tiles -->
<div class="row tile_count">
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
    <div class="count"> 5</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-clock-o"></i>Total Categories</span>
    <div class="count">12</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Products</span>
    <div class="count green">2,500</div>
</div>
</div>

@endsection
