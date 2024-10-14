<footer class="footer p-3 bg-white mt-4">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h4>NCCFIMO</h4>
                <p class="text-muted">The fellowship operates independently, not being affiliated with <br> or
                    financially supported by any
                    individual</p>
            </div>
            <div class="col-lg-3" id="quick">
                <h6 class="fw-bold text-uppercase">Quick Links</h6>
                <p><a href="#" class="nav-link">About</a></p>
                <p><a href="#" class="nav-link">Profile</a></p>
                <p><a href="#" class="nav-link">Sign Up</a></p>
            </div>
            <div class="col-lg-3" id="contactus">
                <h6 class="fw-bold text-uppercase">Contact Us</h6>
                <p><a href="#" class="nav-link"><span class="me-3"> <svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-telephone-fill"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg></span>J: 08151676347</a></p>
                <p><a href="#" class="nav-link"><span class="me-3"> <svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-telephone-fill"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg></span>B: 08037106044</a></p>
                <p><a href="#" class="nav-link"><span class="me-3"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg></span>Area V Estate, Behind Holy Rosary College,
                        Port-Harcourt Road New Owerri, Owerri Imo State.</a></p>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p class="text-muted">
                Copyright &copy; <span id="year"></span> NCCFIMO
            </p>
        </div>
    </div>
</footer>
<script>
    const year = document.querySelector('#year');

    const date = new Date();

    year.innerHTML = date.getFullYear();
</script>
