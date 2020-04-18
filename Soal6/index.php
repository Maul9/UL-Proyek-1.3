<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ARKADEMY COFFEE SHOP</title>
</head>
<body>
<!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top bayang">
    <div class="container">
      <a class="navbar-brand" href=""><img src="assets/img/arkademy-logo.png" width="8%"><span class="judul"><span style="color: #00FF00;">ARKADEMY</span> COFFEE SHOP</span></a>
      <button class="nav-link btn text-white pr-5 pl-5" data-toggle="modal" data-target="#exampleModal" style="background-color: #00FF00;">ADD</button>
    </div>
  </nav>

<!-- TABLE -->
  <div class="container pt-5">
    <table class="table table-borderless mr-3 ml-3 mt-5 text-center bayang">
      <thead class="text-white" style="background-color: #CECECE;">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Cashier</th>
          <th scope="col">Product</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Pevita Pearce</td>
          <td>Latte</td>
          <td>Drink</td>
          <td>Rp. 10.000</td>
          <td><a href="/arkademy-static/edit.php" style="color: #ACE087;">Edit</a> 
            | <a href="" style="color: #F75865;">Delete</a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Raisa Adriana</td>
          <td>Cake</td>
          <td>Food</td>
          <td>Rp. 15.000</td>
          <td><a href="/arkademy-static/edit.php" style="color: #ACE087;">Edit</a> 
            | <a href="" style="color: #F75865;">Delete</a>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Raisa Adriana</td>
          <td>Fried Rice</td>
          <td>Food</td>
          <td>Rp. 30.000</td>
          <td><a href="/arkademy-static/edit.php" style="color: #ACE087;">Edit</a> 
            | <a href="" style="color: #F75865;">Delete</a>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Pevita Pearce</td>
          <td>Gudeg</td>
          <td>Food</td>
          <td>Rp. 35.000</td>
          <td><a href="/arkademy-static/edit.php" style="color: #ACE087;">Edit</a> 
            | <a href="" style="color: #F75865;">Delete</a>
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Joko Purwadi</td>
          <td>Ice Tea</td>
          <td>Drink</td>
          <td>Rp. 55.000</td>
          <td><a href="/arkademy-static/edit.php" style="color: #ACE087;">Edit</a> 
            | <a href="" style="color: #F75865;">Delete</a>
          </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Maulana Wijayakusuma</td>
          <td>Noodle soup</td>
          <td>Food</td>
          <td>Rp. 15.000</td>
          <td><a href="/arkademy-static/edit.php" style="color: #ACE087;">Edit</a> 
            | <a href="" style="color: #F75865;">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>

<!-- Modal Add -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">ADD</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pl-5 pr-5">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cashier Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Product Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Category">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Price">
              </div>
          </div>
          <div class="modal-footer">
          <button class="btn text-white pr-5 pl-5" style="background-color: #00FF00;">ADD</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>





















<!-- SCRIPT BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>