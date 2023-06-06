<x-profile :sharedData="$sharedData">
  <div class="list-group">
    <a href="/post/5c3af3dcc7d0ad0004e53b3d" class="list-group-item list-group-item-action">
      <img class="avatar-tiny" src="https://gravatar.com/avatar/b9408a09298632b5151200f3449434ef?s=128" />
      <strong>Example Post #1</strong> on 0/13/2019
    </a>
    @foreach ($posts as $post)
    <a href="/post/{{$post->id}}" class="list-group-item list-group-item-action">
      <img class="avatar-tiny" src="{{$post->user->avatar}}" />
      <strong>{{$post->title}}</strong> {{$post->created_at->format('n/j/Y')}}
    </a>
        
    @endforeach
  </div>
</x-profile>