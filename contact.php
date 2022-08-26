<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact us</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="vh-100 conatiner" style="background-image: url('assets/images/sgp.png'); color: white;">
            <div class="text-center">
                <h1 class="text-light">How Can We Help You?</h1>
                <h3 class="text-light section-title" >Help us to ensure maximum customer satisfaction</h3>
            </div>
            <div class=" d-flex align-items-center justify-content-center">
                <div class="bg-transparent col-md-4">
                    <div class="p-4 rounded shadow-md">
                        <div>
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mt-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                        </div class="mt-3">
                        <div class="mt-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" cols="20" rows="6" class="form-control"
                                placeholder="message"></textarea>
                        </div>
                        <button class="btn btn-success text-warning">
                            Submit Form
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>

</html>
