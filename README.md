How to create an additional field in laravel 11 Registration form:

Add a new dropdown field in Registration form 

1. Create a gender row in the users table, run the following command from project cli.
php artisan make:migration add_gender_field_to_users_table --table=users
2. Check the add_gender_field_to_users_table.php under database/migration/ folder.
3. To run the migration, we need to write following code:
``` 
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('gender', ['male', 'female', 'others'])->nullable()->after('name');
        });
    }
```  
5. To reverse the migration, we should use this:
```
public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('gender');
        });
    };
```

6. Then run php artisan migration from cli, then check the database table if the gender row has been created with type-> male/female/others.
7. Then go to User model and add the gender here:
```
     protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
    ];
```
8. Then go to Auth->Controller->RegisteredUserController.php and add following under the existing array values:
```
     $request->validate([
           'gender' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'gender' => $request->gender,
        ]);
```
9. Then go to resources->views->Auth->register.blade.php and add following code:
```
   <!-- Gender -->
         <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <x-input-select name="gender" class="block mt-1 w-full"/>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
   [Add this code below the name x-input]
```
9. Now create a input-select.blade.php under views->components folder and paste this code:
```
    <select {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>       
        <option>male</option>
        <option>female</option>
        <option>others</option>    
    </select>
```
10. Now refresh the apps, and click on register, it should display the dropdown menu (select options) and should save the value while registering.
11. Check for the attachements for screenshots.

    Thanks you
    Shams khan.
    20.05.2024

///////////////////////////////////////////////

How to display users table from Database on Admin Dashboard page using Livewire.



How to build multiple user type (admin or user) with
    
