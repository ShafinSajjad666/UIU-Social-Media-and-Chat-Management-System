<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    @include('home.homecss')
    <style type="text/css">
        .post_deg {
            padding: 30px;
            text-align: center;
            background-color: #1E1E1E;

        }

        .title_deg {
            font-size: 30px;
            font-weight: bold;
            padding: 15px;
            color: white;
        }

        .des_deg {
            font-size: 18px;
            font-weight: bold;
            padding: 15px;
            color: white;

        }

        .img_deg {
            height: 200px;
            width: 300px;
            padding: 30px;
            margin: auto;

        }
    </style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include ('home.header')

        @if(session()->has('message'))
        <div class="alert alert-danger">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Success!</strong>

            {{session()->get('message')}}
        </div>

        @endif

    </div>
    @foreach($data as $data)
    <div class="post_deg">
        <img class="img_deg" src="/postimage/{{$data->image}}" alt="Image not added">
        <h4 class="title_deg"><b style="text-decoration: underline dotted;">Title:</b> {{$data->title}}</h4>
        <p class="des_deg">{{$data->description}}</p>

        <a onclick="return confirm('Are you sure to delete this?')" href="{{url('my_post_del',$data->id)}}" class="btn btn-danger">Delete</a>
    </div>

    @endforeach


    <!-- footer section start -->
    @include('home.footer')
</body>

</html>