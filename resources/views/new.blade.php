  <td>{{$userCount}} </td>
<td> {{$categoryCount}}</td>
<td> {{$postCount}}</td>

$userCount = User::count();
$postCount = Post::count();
$categoryCount = Category::count();
return view('dashboard', ['userCount' => $userCount, 'postCount' => $postCount, 'categoryCount' => $categoryCount]);
