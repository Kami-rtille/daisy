
    @foreach($photos as $p)
            <div class="photo_container">
            <img src="{{$p->url}}" alt="{{$p->title}}" />
            </div>
            <span>{{$p->title}} -- {{$p->note}}</span>
            <!-- <p>{{$p->user->name}}</p> -->
            <a href="users/{{$p->user->id}}">{{$p->user->name}}</a>
    @endforeach
