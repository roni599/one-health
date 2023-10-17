<!DOCTYPE html>
<html lang="en">
<!--head-->
@include('frontend.users.components.head');
<!--head-->

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <!--header-->
    @include('frontend.users.components.header')
    <!--header-->
    <!--welcome health-->
    @include('frontend.users.components.welcomeHealth')
    <!--welcome health-->

    <!--our doctor-->
    @include('frontend.users.components.ourDoctors')
    <!--our doctor-->

    <!--latest news-->
    @include('frontend.users.components.latestNews')
    <!--latest news-->

    <!--doctor Appoinment-->
    @include('frontend.users.components.appoinment')
    <!--doctor Appoinment-->

    <!-- .banner-home -->
    @include('frontend.users.components.homebanner')
    <!-- .banner-home -->

    <!--footer-->
    @include('frontend.users.components.footer')
    <!--footer-->

    <!--script-->
    @include('frontend.users.components.script')
    <!--script-->
</body>

</html>
