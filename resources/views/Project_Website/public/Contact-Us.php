<?php

use App\Hydrator\EntityHydrator;

require_once '../src/setup.php';

$contacted = false;
if (isset($_POST['name'], $_POST['email'], $_POST['title'], $_POST['comment'])) {

        $formUser = [
            'name' => strip_tags($_POST['name']),
            'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            'title' => strip_tags($_POST['title']),
            'comment' => strip_tags($_POST['comment']),

        ];
        $hydrator = new EntityHydrator();
        $formUser = $hydrator->hydrateContact($formUser);

        $contact = $dbProvider->createContact($formUser);
        $contacted = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'Margins/Header.php'; ?>
    <title>Contact Us</title>
</head>
<br>
<body class="p-4">
<div class="container">
        <div class="jumbotron">
<?php include 'Nav_Bar/Nav-Bar.php'; ?>
    <div class="container d-flex justify-content-center align-items-center">
        <h1>Contact Us!</h1>
    </div>
    <?php if ($contacted): ?>
        <div class="alert alert-success">Thank you for contacting us, we shall reply ASAP! Click <a href="Project_Website.php" title="projectWebsite">here</a>to return to main page</div>
    <?php endif; ?>
    <form method="post">
      <div class="row">
          <div class="container d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="title" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="comment">Your Comment</label>
                    <input type="comment" name="comment" id="comment" class="form-control">
                </div>
                <div class="col-md-12 text-center">
                    <input type="submit" class="btn btn-primary">
                </div>
                </div>
            </div>
      </div>
    </form>
    </div>

</div>


<?php include 'Margins/Footer.php' ?>
</body>
</html>

