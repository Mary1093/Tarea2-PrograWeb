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
                <div  class="table table-hover">
                    <div class="table table-hover">
                        <dl class="">
                            <dt scope="col">Author</dt>
                            <dd><?php echo $author['author']; ?></dd>
                            <dt scope="col">Nationality</dt>
                            <dd><?php echo $author['nationality']; ?></dd>
                            <dt scope="col">Birth Year</dt>
                            <dd><?php echo $author['birth_year']; ?></dd>
                            <dt scope="col">Fields</dt>
                            <dd><?php echo $author['fields']; ?></dd>
                        </dl>
                    </div>
                </div>
                <div>
                <h3 class="card-header"><span> Books</span></h3>
                    <div  class="container">
                        <ul class="nav flex-column">
                            <?php foreach ($author['books'] as $book) { ?>
                            <li class="nav-item"> <a href="book/<?php echo $book['books__book_id'] ?>"><?php echo $book['books__title']; ?></a></li>
                            <?php } ?>
                        </ul>
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