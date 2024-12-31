<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .post_title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }

        .div_center {
            text-align: center;
            padding: 20px;

        }

        label {
            display: inline-block;
            width: 200px;
        }

        .alert {
            padding: 20px;
            background-color: green;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Success!</strong>

                {{session()->get('message')}}
            </div>

            @endif



            <h1 class=post_title>Add Post</h1>

            <div>
                <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_center">
                        <label for="">Post Title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="div_center">
                        <label for="">Post Description</label>
                        <textarea name="description" id=""></textarea>
                    </div>
                    <div class="div_center">
                        <label for="">Add Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_center">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>

            </div>

        </div>


        @include('admin.footer')
</body>

</html>