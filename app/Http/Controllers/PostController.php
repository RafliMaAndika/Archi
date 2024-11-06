<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post; // Import Post model
use Illuminate\Support\Str;
use Illuminate\View\View; // For view responses
use Illuminate\Http\RedirectResponse; 

class PostController extends Controller
{
    /**
     * Display a paginated list of posts.
     *
     * @return View
     */
    public function index(): View
    {
        // Retrieve latest posts with pagination (6 per page)
        $posts = Post::latest()->paginate(6);

        // Render the view with posts
        return view('admin.posts.Posts', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.posts.create'); // No need to pass users anymore
    }
    
    

    /**
     * Store a newly created post in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
public function store(Request $request): RedirectResponse
{
    // Validate request data
    $validatedData = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'author' => 'required',
        'image' => 'required|image|mimes:jpeg,jpg,png|max:2048', 
    ]);

    // Store the image and get its path
    $imagePath = $request->file('image')->store('images', 'public');

    $post = new Post();
    $post->title = $validatedData['title'];
    $post->body = $validatedData['body'];
    $post->author = $validatedData['author'];
    $post->slug = Str::slug($validatedData['title']);
    $post->image = $imagePath;
    $post->save();

    // Redirect with a success message
    return redirect()->route('admin.posts.index')->with('success', 'Post berhasil ditambahkan.');
}


    public function adminIndex()
    {
        $posts = Post::all(); // Retrieve all posts
        return view('admin.posts.index', compact('posts')); // Pass posts to the view
    }

    /**
     * Show the form for editing a specific post.
     *
     * @param  Post  $post
     * @return View
     */
    public function edit(Post $post): View
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param  Request  $request
     * @param  Post  $post
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Make sure to validate the image
            'is_published' => 'required|boolean',
        ]);

        // If there's a new image, store it and update the path
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Update post with validated data
        $post->update($validatedData);

        // Redirect with a success message
        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil diperbarui.');
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  Post  $post
     * @return RedirectResponse
     */
    public function destroy(Post $post): RedirectResponse
    {
        // Delete the post
        $post->delete();

        // Redirect with a success message
        return redirect()->route('admin.posts.index')->with('success', 'Post berhasil dihapus.');
    }
}
