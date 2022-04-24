<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="card text-center">
            <h1 class="card-header"><span><?php echo $title ?></span></h1>          
            <div class="container" >       
                <div class="table table-hover">
                    <div class="table table-hover">
                        <dl class="">
                            <dt  scope="col">Title</dt>
                            <dd><?php echo $book['title']; ?></dd>
                            <dt  scope="col">Edition</dt>
                            <dd><?php echo $book['edition']; ?></dd>
                            <dt  scope="col">Copyright ©</dt>
                            <dd><?php echo $book['copyright']; ?></dd>
                            <dt  scope="col">Language</dt>
                            <dd><?php echo $book['language']; ?></dd>
                            <dt  scope="col">Pages</dt>
                            <dd><?php echo $book['pages']; ?></dd>
                            <dt  scope="col">Author</dt>
                            <dd><?php echo $book['author']; ?></dd>
                            <dt  scope="col">Publisher</dt>
                            <dd><?php echo $book['publisher']; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <a type="button" role="button" class="btn btn-primary" href="/book">Back</a>
        </div>
        
        <footer class="py-3 my3">
            <p class="text-center text-muted">© 2022 Escuela de Informática, Lic</p>
        </footer>

    </body>
</html>