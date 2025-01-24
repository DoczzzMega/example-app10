<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
        ];

        $posts = array_fill(0,10, $post);

        return view('user.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        $title = $request->input('title');
//
//        $content = $request->input('content');


        $validated = $request->validate([

            'title' => ['required', 'string', 'max:255'],

            'content' => ['required', 'string', 'max:10000'],

            'published_at' => ['nullable', 'string', 'date'],

            'published' => ['nullable', 'boolean'],

        ]);


        $post = Post::query()->create([

//            'user_id' => Auth::id(),  // при наличии аутентификации можно взять ID из сессии

            'user_id' => User::query()->value('id'), //value('id') возьмет первое попавшееся значение из колонки ID

            'title' => $validated['title'],

            'content' => $validated['content'],

//            'published_at' => $validated['published_at'] ?? null,

            'published_at' => new Carbon($validated['published_at'] ?? null), //если null - подставит текущую дату

            'published' => $validated['published'] ?? false,

        ]);



//        $post = Post::query()->firstOrCreate([                //если пост с таким заголовком у юзера есть вернет его
//
//            'user_id' => User::query()->value('id'),
//
//            'title' => $validated['title'],
//
//        ],[
//
//            'content' => $validated['content'],
//
//            'published_at' => new Carbon($validated['published_at'] ?? null),
//
//            'published' => $validated['published'] ?? false,
//
//        ]);


        // Обект запроса не должен уходить дальше контроллера
        // CreatePost::run($request->all);                       // Сервис создани поста и валидация внутри

//        $validated = validator($request->all(), [
//
//            'title' => ['required', 'string', 'max:255'],
//            'content' => ['required', 'string', 'max:10000'],
//
//        ])->validate();


        // СВОЯ ФУНКЦИЯ ХЕЛПЕР

//        $validated = validate($request->all(), [
//
//            'title' => ['required', 'string', 'max:255'],
//            'content' => ['required', 'string', 'max:10000'],
//
//        ]);

        if(! true) {
            return back()->withInput()->withErrors([
                'account' => 'Недостаточно средств'
            ]);
        }

//        if($order->amount > $account->balance)

//        if (true) {
//            throw ValidationException::withMessages([
//                'account' => 'Недостаточно средств'
//            ]);
//        }

        alert('Создан новый пост', 'primary');

        return redirect()->route('user.posts.show', 123);

        return 'Сохраниенить новость';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
        ];

        return view('user.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, temporibus.',
        ];

        return view('user.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post)
    {
        $validated = validate($request->all(), [

            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:10000'],

        ]);

        alert('Сохранено');

        return back();

//        return redirect()->back();

//        return redirect()->route('user.posts.show', 123);

        return 'Редактировать одну новость';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $post)
    {

        return redirect()->route('user.posts');

        return 'Удалить одну новость';
    }

    public function like(string $post)
    {
        return 'Поставить лайк';
    }
}
