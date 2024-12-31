<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->

    <title> Blog Post</title>
    <style type="text/css">
        .div_deg {

            text-align: center !important;
            margin: 10px;


        }

        .form_deg {
            display: inline-block;
            position: relative;
            left: 0px;
            width: 400px;
            height: auto;
            border-radius: 40px;
            background: #ecf0f3;
            box-shadow: 13px 13px 20px #cbced1,
                -13px -13px 20px #ffffff;
        }

        label {
            display: inline-block;
            width: 200px;
            color: black;
            font-size: 16px;
            font-weight: bold;
        }

        .field_deg {
            padding: 20px;
        }
    </style>
    @include('home.homecss')



</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include ('home.header')
    </div>

    <div class="div_deg">
        <h1 style=" text-align:center; font-weight:900; font-size:22px;">Add Post</h1>
        <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data" class="form_deg">


            @csrf
            <div class="field_deg">
                <label for="">Post Title</label>
                <input type="text" name=title>
            </div>

            <div class="field_deg">
                <label for="">Description</label>
                <textarea name="description"></textarea>
            </div>

            <div class="field_deg">
                <label for="">Add Image</label>
                <input type="file" name=image>
            </div>

            <div class="field_deg">
                <input style="color:black" type="submit" value="Add Post" class="btn btn-outline-secondary">
            </div>

        </form>
    </div>



    <!-- footer section start -->
    @include('home.footer')
</body>

</html>