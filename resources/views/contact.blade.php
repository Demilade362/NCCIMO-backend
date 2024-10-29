<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - NCCFIMO</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="icon" sizes="32x32" href="icon.png">
</head>

<body>
    <x-navbar :announcements="$announcements" />
    <div class="container">
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-white" data-aos="zoom-in">
                        <div class="card-body">
                            <form action="#" method="POST">

                                <!-- Name field -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your full name" required>
                                </div>

                                <!-- Email field -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your email address" required>
                                </div>

                                <!-- Subject field -->
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject of your message" required>
                                </div>

                                <!-- Message field -->
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Type your message here..."
                                        required></textarea>
                                </div>

                                <!-- Report a Problem checkbox -->
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="reportProblem"
                                        name="reportProblem">
                                    <label class="form-check-label" for="reportProblem">This is a problem report</label>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 container-fluid" id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63547.20151552562!2d6.959340757591885!3d5.4623985904653525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10425bdc10ffe187%3A0x4e292be17b2a2d34!2sHoly%20Rosary%20International%20College%20Owerri!5e0!3m2!1sen!2sng!4v1729464760028!5m2!1sen!2sng"
            class="responsive-iframe" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <x-footer />
</body>

</html>
