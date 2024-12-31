<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Blog Post </h1>
        <p class="services_text"></p>
        <div class="services_section_2">
            <div class="row">


                @foreach($post as $post)

                <div class="col-md-4" style="padding: 20px;">
                    <div><img style="margin-bottom: 20px; height:200px; width:350px" src="/postimage/{{$post->image}}" class="services_img"></div>

                    <h3>{{$post->title}}</h3>
                    <p> Post by <b>{{$post->name}}</b></p>

                    <div class="btn_main"><a href="
                    {{url('post_details',$post->id)}}">READ MORE</a></div>
                </div>

                @endforeach


            </div>
        </div>
    </div>
</div>