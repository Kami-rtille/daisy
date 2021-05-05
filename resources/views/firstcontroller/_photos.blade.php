
    @foreach($photos as $p)
        <div class="post">
            <div class="photo_container">
            <a class="name" href="users/{{$p->user->id}}">{{$p->user->name}}</a>
            <img src="{{$p->url}}" alt="{{$p->title}}" />
            </div>
            <div class="specs">
            <span class="yellow" >{{$p->title}}</span>
            <span class="lightgreen">{{$p->spec1}}</span>
            <span class="green">{{$p->spec2}}</span>
            </div>
            <!-- <p>{{$p->user->name}}</p> -->
            
        </div>
    @endforeach
