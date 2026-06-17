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
