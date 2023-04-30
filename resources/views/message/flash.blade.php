<?php


// flash message

if (session()->has('success')) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong> " . session()->get('success') . " </strong>
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
