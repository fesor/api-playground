Instagram like API
==========================

Schema example

```graphql
enum Resize {
  CROP
  ENLARGE
}

type Pagination {
    after: Int
    after: String
}

type ThumbParams {
    width: Int!
    height: Int!
    resize: Resize!
}

interface Author {
    id: String!
    name: String!
    profilePic(thumb: ThumbParams): String!
}

type Comment {
    id: String!
    message: String!
    author: Author!
}

type Post {
    id: String!
    image: (thumb: ThumbParams): String!
    hashtags: [String]!
    comments(pagination: Pagination): [Comment]!
    author: Author!
}

query {
    post(id: String!): Post!
    mostFavoritePosts(pagination: Pagination): [Post]!
}
```

