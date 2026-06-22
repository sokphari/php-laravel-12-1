student
name gender email password
user
name role emmail password
A    admin ..
B    student ..
C    instructor .. 



//route login and registet

route::middleware(['auth:sanctum','role:student'])->controller(NameController)->group(functoin(){
    route::get('/profile',function());
    route::get(/'student',function())
    route::get(/'student'/{id},function())
})
route::middleware(['auth:sanctum','role:admin'])->controller(NameController)->group(functoin(){
    route::get(/'student',function())
    route::get(/'student'/{id},function())
    Route::post('/student',function())
    route::put('/student/{id}')
    route::patch('/student/{id}')
})
route::middleware(['auth:sanctum','role:instructor'])->controller(NameController)->group(functoin(){
    route::get(/'student',function())
    route::get(/'student'/{id},function())
    Route::post('/student',function())
    route::put('/student/{id}')
    route::patch('/student/{id}')
})



And then run seeder your self:
run single seeder
php artisan db:seed --class=DatabaseSeeder
run single  migration
php artisan migrate --path=database/migrations/2024_06_30_145000_create_roles_table.php



fake data
php artisan make:seeder RolesSeeder
{
   public function run(){
    db::table('roles')->insert([
        'roles_name' => 'admin'
        'created_at' => now(),
        'updated_at' => now(),
    ])
    db::table('roles')->insert([
        'roles_name' => 'INSTRUCTOR'
        'created_at' => now(),
        'updated_at' => now(),
    ])
   } 
}
php artisan make:seeder UserSeeder
public function run(){
    db::table('users')->insert([
        'roles_id' => 1,
        'name' => 'sokpheak',
        'email' => 'admin@example.com',
        'password' => bcrypt('password'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    db::table('users')->insert([
        'roles_id' => 1,
        'name' => 'sophak',
        'email' => 'admin@example.com',
        'password' => bcrypt('password'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
php artisan make:seeder StudentSeeder