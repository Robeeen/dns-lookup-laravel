<div>
<div class="flex flex-row w-screen">
<div class="basis-6/12">
    <form wire:submit.prevent="createNewuser">       
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                <input wire:model="name" type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="your name" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input wire:model="email" type="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your gender</label>
                <select wire:model="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="default">Selecte Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>                
                </select>
            <div>
                <!-- //@json($gender) -->
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input wire:model="password" type="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="strong password" required />
            <div>
        <button type="submit" style="padding: 5px; border: 1px solid; font-weight:bold;margin-top: 10px; margin-bottom: 15px; background: blue; color: white; width:100%">Create</button>
        </form><!-- end of form -->
</div>
</div>
</div>
<div class="flex flex-row w-screen">
<div class="basis-6/12">
    <form></form>

<table class="table-fixed mb-5">
    <thead>
        <tr>
            <th class="w-1/2 px-4 py-2">Name</th>
            <th class="w-1/2 px-4 py-2">Email</th>
            <th class="w-1/2 px-4 py-2">Gender</th>
        </tr>
    </thead>
    <tbody>
            @foreach($users as $user)
            <tr >
                <td wire:key="{{$user->id}}" class="border px-4 py-2">{{$user->name}}</td>
                <td wire:key="{{$user->id}}" class="border px-4 py-2">{{$user->email}}</td>
                <td wire:key="{{$user->id}}" class="border px-4 py-2">{{$user->gender}}</td>
            </tr>
            @endforeach
    </tbody>
</table>
        

</div>


</div>
</div>


