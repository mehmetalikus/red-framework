# 13 KB MVC BASED PHP <strike>FRAMEWORK</strike>

<ul>
	<li>MVC</li>
	<li>CACHE</li>
	<li>HELPERS</li>
	<li>ROUTING</li>
	<li>...</li>
</ul>

<p>
	Do not use on your real/important project. Its too early for this.
</p>


# SIMPLE TIPS
 

Anonymous Functions
```php
Route::get("/user/{id}", function(Int $id): Void{
	echo "User Id : " . $id;
}, "GET|POST");
```
Using Controlllers

```php
class User extends Controller
{
	public function getAll(){
 		$usersModel = $this->model('UserModel');
		$users = $usersModel->getAll();
		echo json_encode($users, JSON_UNESCAPED_UNICODE);
	}

}
```
```php 
	// (url, controllerName@Method, method = get)
	Route::get("/user/all", "User@getAll");
```
