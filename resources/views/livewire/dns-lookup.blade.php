
<div>

    <form wire:submit="createNewuser" action="">
        <input wire:model="name" type="text" placeholder="name" />
        <input wire:model="email" type="email" placeholder="email" />
        <input wire:model="password" type="password" placeholder="Password" />

        <button>Create</button>
    </form>

    <hr>

@foreach($users as $user)
<p>{{$user->name}}</p>

@endforeach
    
</div>
