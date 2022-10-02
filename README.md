## Run to install packages
Composer install

## Then to start the server, run:
``
php artisan serve 
``
## Important Endpoint to  get started


## Post a post for users to comment
=> POST: http://127.0.0.1:8000/api/post
Request body looks like this 
{
    "title":"The first post",
    "body":"The beginging of life is more of fun"
}


## Get the post by Id So User can comment on it 
=> GET: http://127.0.0.1:8000/api/post/1

response sample looks like {
    "id": 1,
    "title": "The first post",
    "body": "The beginging of life is more of fun"
}

## Comment on the each post by id 
=> POST: http://127.0.0.1:8000/api/post_comment/1

Request body :{
    "body":"When the going get tough, the tough get going"
}

response body:{
    "body": "When the going get tough, the tough get going",
    "post_id": "1",
    "id": 5
}

## Fetch All the comment on a particular post using it Id 
=> GET : http://127.0.0.1:8000/api/comment/1

Response body:
[
    {
        "id": 1,
        "post_id": "1",
        "body": "Nice way of doing it"
    },
    {
        "id": 2,
        "post_id": "1",
        "body": "We can do better"
    },
    {
        "id": 5,
        "post_id": "1",
        "body": "When the going get tough, the tough get going"
    },
  
]

## Posting Image for comment

=> POST: http://127.0.0.1:8000/api/post_image

## Comment on images using the id 

=> POST: http://127.0.0.1:8000/api/image_comment/1
RequestBody:
{
    "body":"Nice picture, Well done"
}

Response body:

{
    "body": "Nice picture, Well done",
    "post_id": "1",
    "id": 6
}