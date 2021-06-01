<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * List of posts
     *
     * Get list of post in paginated way
     *
     * @Response(
     *    code: 200
     *    ref: P(Post)
     * )
     */
    public function index() {}


    /**
     * Find a post of id
     *
     * @Response(
     *    code: 200
     *    ref: Post
     * )
     */
    public function find($id) {}


    /**
     * Create new post
     *
     * @Response(
     *    code: 201
     *    description: New created post
     *    ref: Post
     * )
     */
    public function create(CreatePostRequest $request) {}


    /**
     * Create new post
     *
     * @Response(
     *    code: 200
     *    description: updated post
     *    ref: Post
     * )
     */
    public function update(UpdatePostRequest $request) {}


    /**
     * Delete post
     *
     * @Response(
     *    code: 204
     * )
     */
    public function delete($id) {}


    /**
     * You can even leave comment
     */
    public function test() {}
}
