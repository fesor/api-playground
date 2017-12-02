<?php

namespace Fesor\ApiPlayground\Api\Query;

use Fesor\ApiPlayground\Api\Model\Post;
use Fesor\ApiPlayground\Api\Pagination;
use Fesor\ApiPlayground\Api\ThumbParams;

class MostFavoritePostsQuery
{
    /**
     * Resolves value which will be transformed and used for child fields
     */
    public function resolve(Pagination $pagination)
    {
        return new Post();
    }

    /**
     * transforms value to plain array format (or anything which can be json encoded)
     */
    public function transform(Post $post)
    {
        return [
            'id' => $post->id,
            'hashTags' => $post->hashTags,
        ];
    }

    public function images(Post $post, ThumbParams $params) {
        return '/200x240/some/image.jpg';
    }
}
