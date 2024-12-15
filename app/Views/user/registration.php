<div class="container">
    <h1><?= $title ?? '' ?></h1>

    <div class="row">
        <div class="col-md-6 offset-md-3">

            <form action="/registration" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                </div>

                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm password</label>
                    <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="confirm password">
                </div>

                <button type="submit" class="btn btn-warning">Register</button>
            </form>

        </div>
    </div>
</div>
