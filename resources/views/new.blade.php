  <td>{{$userCount}} </td>
<td> {{$categoryCount}}</td>
<td> {{$postCount}}</td>

$userCount = User::count();
$postCount = Post::count();
$categoryCount = Category::count();
return view('dashboard', ['userCount' => $userCount, 'postCount' => $postCount, 'categoryCount' => $categoryCount]);

<!-- commet -->
$datacomment = Comment::all();
return view('blog_list', ['datacomment' => $datacomment]);

<!-- show comment -->
   @foreach($datacomment as $datacomments)

                    <p>{{$datacomments->comment}}</p>

                    @endforeach


<!-- comment -->
  @foreach($comBlog as $comBlogs)
                      <tr>
                          <td>{{ $comBlogs->comment}}</td>
                      </tr>
                      @endforeach
