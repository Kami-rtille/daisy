
    @foreach($photos as $p)
        <div class="post">
            <div class="photo_container">
            <a class="name" href="users/{{$p->user->id}}">{{$p->user->name}}</a>
            <img src="{{$p->url}}" alt="{{$p->title}}" />
            </div>
            <span>{{$p->title}}</span>
            <span>{{$p->spec1}}</span>
            <span>{{$p->spec2}}</span>

            <!-- <p>{{$p->user->name}}</p> -->
            
        </div>
    @endforeach
