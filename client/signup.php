<div class="container">
    <h1 class="offset-sm-3">Signup</h1>
    <form class="mt-4" method="POST" action="./server/requests.php">
        <div class="col-6 mb-3 offset-sm-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="username">
        </div>

        <div class="col-6 mb-4 offset-sm-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="col-6 mb-4 offset-sm-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputEmail1" name="password">
        </div>

        <div class="col-6 mb-4 offset-sm-3">
            <label for="exampleInputEmail1" class="form-label">Adress</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="address">
        </div>
        
        <button type="submit" class="btn btn-primary offset-sm-3 " name="signup">Submit</button>
    </form>
</div>