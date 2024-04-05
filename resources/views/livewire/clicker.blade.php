<div style="margin: 50px 0 0 50px">
    <style>
        input{ border: 1px solid #000; margin-bottom: 15px; width: 400px; padding: 10px 20px; outline: none; }
        h4{font-size: 30px; font-weight: 800; margin-bottom: 15px;}
        button{border: 1px solid #000; padding: 10px 30px; font-weight: bold}
    </style>
    <h4>Create User : </h4>
    @if (session()->has('success'))
        <div class="text-green-500 mb-2">
            {{ session('success') }}
        </div>
    @endif
  <form wire:submit='createNewUser'>
    <input wire:model='name' type="text" placeholder="name"> <br>
    @error('name')<span class="text-red-500 text-xs">{{ $message }}</span>@enderror <br>
    <input wire:model='email' type="email" placeholder="email"> <br>
    @error('email')<span class="text-red-500 text-xs">{{ $message }}</span>@enderror <br>
    <input wire:model='password' type="password" placeholder="password"> <br>
    @error('password')<span class="text-red-500 text-xs">{{ $message }}</span>@enderror <br>
    {{-- <button wire:click.prevent='createNewUser'>Create</button> --}}
    <button>Create</button>
  </form>
  <br>
  <hr>
  <hr>
<h3 class="text-green-500 mt-5" style="font-size: 40px; font-weight: 700;">All User Data</h3>
  <table class="border-separate border-collapse border border-slate-400 mt-3">
    <thead>
      <tr>
        <th class="border border-slate-300 ...">ID</th>
        <th class="border border-slate-300 ...">Name</th>
        <th class="border border-slate-300 ...">Email</th>
        <th class="border border-slate-300 ...">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td class="border border-slate-300 ...">{{ $user->id }}</td>
            <td class="border border-slate-300 ...">{{ $user->name }}</td>
            <td class="border border-slate-300 ...">{{ $user->email }}</td>
            <td class="border border-slate-300 ...">
                <button class="btn">Edit</button>
                <button class="btn">Delete</button>
            </td>
          </tr>
      @empty
          <p>User Not Found!</p>
      @endforelse

    </tbody>

  </table>
  <div class="pagination_user mt-6" style="width: 57.5%;">
    {{ $users->links() }}
  </div>
</div>
