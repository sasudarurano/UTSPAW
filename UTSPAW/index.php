<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.navbar {
  background-color: white;
}
.nav-link {
  color: black;
  font-size: 1rem;
  font-weight: 700;
  cursor: pointer;
  text-decoration: none;
}
.nav-link:hover {
  color: white;
  background-color: black;
}
.navbar-brand {
  font-size: 1.25rem;
  font-weight: 800;
  color: black;
  cursor: pointer;
  text-decoration: none;
}

#navbar.scroll-hide {
  transform: translateY(-100%);
  transition: transform 0.3s ease-in-out;
}

#navbar.scroll-show {
  transform: translateY(0);
  transition: transform 0.3s ease-in-out;
}
</style>

</head>
<body>
 
<h1 class="text-center">Hotel Darren</h1>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-on-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index1.php">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="result.php">My Registration</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<main>
<div class="card" style="width:40rem;">
    <img src="https://source.unsplash.com/500x300/?lake" class="card-img-left w-35 float-start mt-3" alt="..." style="width: 260px; margin-left: 20px;">
    <div class="card-body"  style="height: 200px;">
        <h2>Hotel Nama</h2>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Corrupti, quos cupiditate pariatur autem consequuntur id in velit vero deleniti et 
            dignissimos aliquid ipsum qui soluta rem aliquam. Dolor, animi distinctio?</p>
    </div>
</div>


</main>

<footer class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
               
            </div>
            <div class="col-md-6">
             
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <p>
                    &copy; 2024 Copyright by Urano <br />
                    All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
