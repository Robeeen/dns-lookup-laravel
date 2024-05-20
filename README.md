First: How to add a new field in Registration form

Add a new dropdown field in Registration form 

1. Create a gender row in the users table, run the following command from project cli.
php artisan make:migration add_gender_field_to_users_table --table=users
2. Check the add_gender_field_to_users_table.php under database/migration/ folder.
3. To run the migration, we need to write following code:
    Schema::table('users', function (Blueprint $table) {
            $table->enum('gender', ['male', 'female', 'others'])->nullable()->after('name');
        });
4. To reverse the migration, we should use this:

5. Then run php artisan migration from cli, then check the database table if the gender row has been created with type-> male/female/others.
6. Then go to User model and add the gender here:
     protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
    ];

7. Then go to Auth->Controller->RegisteredUserController.php and add following under the existing array values:
     $request->validate([
           'gender' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'gender' => $request->gender,
        ]);

8. 
