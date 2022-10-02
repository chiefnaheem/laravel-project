<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #eee;
            }
            .postpage{
                width: 100%;
                margin: 0 auto;
                background-color: #fff;
                padding: 20px;
                max-width: 800px;
            }
            .postpage form{
                display: flex;
                flex-direction: column;
                gap:80px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="postpage">
    
            <!-- display the form to post into the database  -->
            
            <form action="/postsss" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        

         
        </div>
    </body>
</html>
