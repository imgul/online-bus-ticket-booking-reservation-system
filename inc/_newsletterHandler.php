<?php
if (isset($_POST['mc-email-btn'])) {
    // Form handle
    $email = test_input($_POST['email']);

    // Inster into newsletter
    $sqlNewsletter = "INSERT INTO `newsletter` (`email`) VALUES ('$email')";
    $resultNewsletter = mysqli_query($conn, $sqlNewsletter);
    if ($resultNewsletter) {
        // Success Alert Bootstrap
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> You have been added to our newsletter.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    } else {
        // Error Alert
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> You have not been added to our newsletter.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
}
