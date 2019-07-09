<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Easy Deal | Admin Panel</title>
    {{-- Link css and others links CDN --}}
    @include('Frontend.Layout.LayoutPartials.LayoutLinks')
  </head>
  <body>

    {{-- add admin navbar --}}
    @include('Backend.Admin.AdminPartials.AdminNavbar')

    {{-- add admin sidebar and content --}}
    @include('Backend.Admin.AdminPartials.AdminSidebar')

    {{-- yield section --}}
    @yield('AdminContent')

    <br>
    <hr>
    <br>

    <div>
      {{-- add footer ---}}
      @include('Frontend.Layout.LayoutPartials.LayoutFooter')
    </div>
    
  </body>
</html>
