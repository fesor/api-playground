<?php

namespace Fesor\ApiPlayground\Api\Query;

use Fesor\ApiPlayground\Api\Model\Comment;
use Fesor\ApiPlayground\Api\Model\Post;
use Fesor\ApiPlayground\Api\Pagination;

class CommentsQuery
{
    public function resolve(Post $post, Pagination $pagination)
    {
        return $post->comments;
    }

    /**
     * Part of some non-existing yet `BatchResolveQuery` interface.
     * Will be called for each item in list, collect promises... do some matic stuff when finish collecting
     */
    public function batchResolve(Post $post, Pagination $pagination)
    {
        // todo: return promise?
    }

    public function transform(Comment $comment)
    {
        return [
            'id' => 1,
            'message' => 'Some message'
        ];
    }
}
