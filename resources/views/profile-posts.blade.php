<x-profile :sharedData="$sharedData" doctitle="{{$sharedData['username']}}'s Profile">
  <div class="list-group">
    <a href="/post/5c3af3dcc7d0ad0004e53b3d" class="list-group-item list-group-item-action">
      <img class="avatar-tiny" src="https://gravatar.com/avatar/b9408a09298632b5151200f3449434ef?s=128" />
      <strong>Example Post #1</strong> on 0/13/2019
    </a>
    @foreach ($posts as $post)
      <x-post :post="$post" hideAuthor/>
        
    @endforeach
  </div>
</x-profile>