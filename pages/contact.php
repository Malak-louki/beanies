<?php
$pageTitle = "Contact us ";

if (!empty($_POST)) {
    $subject = trim($_POST['subject']);
    $mail = trim($_POST['mail']);
    $message = trim($_POST['message']);
    if (empty($subject)) { ?>
        <div class="alert alert-danger" role="alert">
            you must define your object
        </div>
    <?php } ?>
    <?php if (empty($mail)) { ?>
        <div class="alert alert-danger" role="alert">
            you must enter your email
        </div>
    <?php } ?>
    <?php if (empty($message)) { ?>
        <div class="alert alert-danger" role="alert">
            enter your message please
        </div>
    <?php } ?>
    <?php
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) { ?>
        <div class="alert alert-danger" role="alert">
            your email is invalid
        </div>
    <?php }
?>
<?php }
var_dump($_POST)
    ?>
<form action="" method="post" class="container">
    <div class="d-flex flex-column gap-2 mt-5">
        <label for="subject" class="form-label">Subject:</label>
        <input type="text" class="form-control" name="subject" id="subject">

        <label for="mail" class="form-label">Email:</label>
        <input type="email" class="form-control" name="mail" id="mail">

        <label for="message" class="form-label">Message:</label>
        <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>