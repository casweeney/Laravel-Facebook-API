<html>
    <head>
        <title>Laravel Facebook SDK</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <script type="text/javascript" src="/js/bootstrap.js"></script>
    </head>
    <body>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h3 class="mb-3"><strong>Make Page Post</strong></h3>
                    <form method="POST" action="/page">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea style="resize: none;" class="form-control" placeholder="Write your post" name="message" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-info" type="submit">Post to Facebook Page</button>
                        <a class="btn btn-secondary" href="/">Home</a>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </body>
</html>