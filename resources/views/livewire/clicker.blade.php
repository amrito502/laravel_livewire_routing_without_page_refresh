<div style="margin: 50px 0 0 50px">
    <style>
        input{ border: 1px solid #000; margin-bottom: 15px; width: 400px; padding: 10px 20px; outline: none; }
        h4{font-size: 30px; font-weight: 800; margin-bottom: 15px;}
        button{border: 1px solid #000; padding: 10px 30px; font-weight: bold}
    </style>
    <h4>Create User : </h4>
  <form wire:submit='createNewUser'>
    <input wire:model='name' type="text" placeholder="name"> <br>
    <input wire:model='email' type="text" placeholder="email"> <br>
    <input wire:model='password' type="password" placeholder="password"> <br>

    {{-- <button wire:click.prevent='createNewUser'>Create</button> --}}
    <button>Create</button>
  </form>
  <hr>

  @forelse ($users as $user)
    <h3>{{ $user->name }}</h3>
  @empty

  @endforelse
</div>
