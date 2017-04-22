<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body>
  <div class="loader"></div>
  <div id="myDiv">
    <div class="header">
      <div class="bg-color">
        @include('layouts.partials.mainheader')
        @include('layouts.partials.bannertwo')
      </div>
    </div>
    <!--  Contains page content -->
        @include('layouts.partials.feature')
        @include('layouts.partials.service')
        @include('layouts.partials.solutions')
        @include('layouts.partials.testimonial')
        @include('layouts.partials.productos')
        @include('layouts.partials.blog')
        @include('layouts.partials.contact')
    <!-- Contains page content -->
      @include('layouts.partials.footer')
      <div id="btncollapzion" class=" btn_collapzion"></div>
  </div>
  @section('scripts')
      @include('layouts.partials.scripts')
  @show
</body>
</html>
