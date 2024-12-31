<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <base href="/public">
    <title> Blog Post</title>
    @include('home.homecss')
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include ('home.header')
    </div>

    <div style="text-align:center!important;" class="col-md-12">
        <div><img style="padding: 20px; height:500px; margin:auto;" src="/postimage/{{$post->image}}" class="services_img"></div>

        <h2><b>{{$post->title}}</b></h2>
        <h3>{{$post->description}}</h3>
        <p> Post by <b>{{$post->name}}</b></p>

    </div>



    <!-- footer section start -->
    @include('home.footer')
</body>

</html>