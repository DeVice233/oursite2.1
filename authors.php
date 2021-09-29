<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="script.js" defer> </script>
</head>
<?php
function calc()
{
    if (isset($_POST['btnCalc'])){
        $message = "Нечего считать ((((";
        $koef = 1;
        if (isset($_POST['a']) && !empty ($_POST['a']))
        {
            $a = $_POST['a'];
        };
        if (isset($_POST['b']) && !empty ($_POST['b']))
        {
            $b = $_POST['b'];
        };
        if (isset($_POST['action']) && !empty ($_POST['action']))
        {
            $action = $_POST['action'];
        };
        if (isset($_POST['choose']) && !empty ($_POST['choose']))
        {
            $choose = $_POST['choose'];
        };
        switch ($action)
        {
            case 'Доллары': switch ($choose)
            {
                case 'Рубли': $koef = 72.5; break;
                case 'Грiвнi': $koef = 26.5; break;
                case 'Тенге': $koef = 424; break;
            }; break;
            case 'Рубли': switch ($choose)
            {
                case 'Доллары': $koef = 0.014; break;
                case 'Грiвнi': $koef = 0.37; break;
                case 'Тенге': $koef = 5.86; break;
            }; break;
            case 'Грiвнi': switch ($choose)
            {
                case 'Доллары': $koef = 0.038; break;
                case 'Рубли': $koef = 2.7; break;
                case 'Тенге': $koef = 16; break;
            }; break;
            case 'Тенге': switch ($choose)
            {
                case 'Доллары': $koef = 0.0024; break;
                case 'Рубли': $koef= 0.17; break;
                case 'Грiвнi': $koef = 0.06; break;
            }; break;
            default: $message = "WTF? ";
        }
    }
    $message = $a * $koef;
    return $message;
}
?>
<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="guns.html" class="nav-link px-2 text-secondary">Главная страница</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Вопросики</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button id="btn" type="button" class="btn btn-outline-light me-2">Меню</button>
        </div>
      </div>
    </div>
  </header>

<div class="body-container">
    <div class="row row-first" style="width: 90%;">
        <div class="d-flex col-2 Sidebar flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100vh;">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Меню</span>
          </a>
          
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li>
                <a href="main.html" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Главная Страница
                </a>
              </li>
              <li class="nav-item">
                <a href="guns.html" class="nav-link text-white" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Оружие ДумГая
                </a>
              </li>
              <li>
                <a href="enemies.html" class="nav-link text-white">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  Злодеи
                </a>
              </li>
              <li>
                <a href="authors.php" class="nav-link text-white active">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Авторы
                </a>
              </li>
            
            </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://avatars.githubusercontent.com/u/73583155?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="https://github.com/new/project">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="https://github.com/Pasha-kto003">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
          <div class="col-5">
            <div class="card card-first" style="width: 20rem; margin: 10px 200px 10px;">
              <img src="https://avatars.githubusercontent.com/u/73583155?v=4" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Луковников Павел</h5>
                <p class="card-text" style="text-align: center;">На фото представлен один из разработчиков сайта "Pasha-kto003"</p>
                <a href="https://github.com/Pasha-kto003" class="btn btn-outline-dark">Перейти на аккаунт GitHub</a>
              </div>
            </div>
          </div>
          <div class="col-5">
            <div class="card" style="width: 20rem; margin: 10px;">
              <img src="https://avatars.githubusercontent.com/u/73586312?v=4" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Яковенко Максим</h5>
                <p class="card-text" style="text-align: center;">На фото представлен один из разработчиков сайта "Device233"</p>
                <a href="https://github.com/DeVice233" class="btn btn-outline-dark">Перейти на аккаунт GitHub</a>
              </div>
            </div>
          </div>   
    </div>
    <div class="row row-second">
        <div class="col-5">
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label class="from-label">Введите исходное значение</label>
                    <input type="text" class="form-control" name="a">
                    <select class="form-select" name="action">
                        <option value="Доллары">Доллары</option>
                        <option value="Рубли">Рубли</option>
                        <option value="Грiвнi">Грiвнi</option>
                        <option value="Тенге">Тенге</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="from-label">Искомое</label>
                    <br>
                    <?php echo calc();?>
                    <select class="form-select" name="choose">
                        <option value="Доллары">Доллары</option>
                        <option value="Рубли">Рубли</option>
                        <option value="Грiвнi">Грiвнi</option>
                        <option value="Тенге">Тенге</option>
                    </select>
                </div>
        </div>
        <button type="submit" class="btn btn-primary" name="btnCalc">Подсчитать</button>
        </form>
    </div>
   </div>
</div>
<div class="container">
  <footer class="row row-cols-5 py-5 my-5 border-top">
    <div class="col">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <p class="text-muted">© 2021</p>
    </div>

    <div class="col-8">
      <h5 class="text-center">Section</h5>
      <ul class="nav justify-content-center">
        <li class="nav-item "><a href="main.html" class="nav-link">Home</a></li>
        <li class="nav-item "><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item "><a href="authors.html" class="nav-link">About</a></li>
      </ul>
    </div>

  
  </footer>
</div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>