
    @foreach($photos as $p)
        <div class="post">
            <div class="photo_container">
            <a class="name" href="users/{{$p->user->id}}">{{$p->user->name}}</a>
            <img src="{{$p->url}}" alt="{{$p->title}}" />
            </div>
            <span>{{$p->title}}</span>
            <!-- <p>{{$p->user->name}}</p> -->
            
        </div>
    @endforeach
