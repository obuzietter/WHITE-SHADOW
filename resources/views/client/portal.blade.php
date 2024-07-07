<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client - Portal</title>
    <link rel="stylesheet" href="/css/client/client.css">
    <script src="/js/client/client.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">


</head>

<body>
    <header>
        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16" id="open">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
        <h1>Client Portal</h1>
    </header>
    <main>
        <aside id="side-menu">

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-lg"
                viewBox="0 0 16 16" id="close">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
            </svg>
            <ul>
                <li id="gallery-menu">
                    <i class="bi bi-image fs-4"></i>
                    My gallery
                </li>
                <li id="reviews-menu">
                    <i class="bi bi-journal-bookmark-fill fs-4"></i>
                    My Reviews

                </li>
                <li id="transactions-menu">
                    <i class="bi bi-cash fs-4"></i>
                    My Transactions
                </li>
                <li id="sessions-menu">
                    <i class="bi bi-card-checklist fs-4"></i>
                    Book A Session
                </li>
            </ul>
        </aside>
        <div class="sections">
            <section class="my-gallery" id="my-gallery">
                <div class="title">
                    <h1>My Gallery</h1>
                </div>
                <hr>
                <div class="body">
                    <div class="gallery">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="/img/gallery/gallery-1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">11 <sup>th</sup> May, 2024
                                </h5>
                                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                <a href="#" class="btn btn-primary">See Gallery </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="my-reviews" id="my-reviews">
                <div class="title">
                    <h1>My Reviews</h1>
                </div>
                <hr>
                <div class="body">
                    <div class="reviews">
                        <div class="card">
                            <div class="card-header">
                                Review
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                        ante.</p>
                                    <footer class="blockquote-footer">2024-07-02<cite title="Source Title"></cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <dialog class="mod" id="mod">

                        <form method="dialog">
                            <h2>Submit A Review</h2>
                            <hr>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">

                            </div>
                            <div class="form-group mt-10">
                                <label for="exampleFormControlTextarea1">What do you have to say?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" id="close-btn">Submit</button>
                        </form>
                    </dialog>


                    <div class="new-review">
                        <button type="button" class="btn btn-success" id="open-btn">New Review</button>
                    </div>
                </div>

            </section>
            <section class="my-transactions" id="my-transactions">
                <div class="title">
                    <h1>My Transactions</h1>
                </div>
                <hr>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">ID</th>
                            <th scope="col">Transaction Desc</th>
                            <th scope="col">Amount Due</th>
                            <th scope="col">Paid</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Wedding 11 May, 2024</td>
                                <td>KES 50,000.00</td>
                                <td>KES 30,000.00</td>
                                <td>KES 20,000.00</td>
                                <td>PENDING</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Wedding 11 May, 2024</td>
                                <td>KES 50,000.00</td>
                                <td>KES 30,000.00</td>
                                <td>KES 20,000.00</td>
                                <td>PENDING</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Wedding 11 May, 2024</td>
                                <td>KES 50,000.00</td>
                                <td>KES 30,000.00</td>
                                <td>KES 20,000.00</td>
                                <td>PENDING</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="my-sessions" id="my-sessions">
                <div class="title">
                    <h1>My Sessions</h1>
                </div>
                <hr>
                <div class="body">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Service</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Location</th>
                            <th scope="col">Extra Info</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Romelu Lukaku</td>
                                <td>0111521101</td>
                                <td>Wedding Photography</td>
                                <td>12-08-2024</td>
                                <td>0700hrs - 1800hrs</td>
                                <td>Paradise Gardens</td>
                                <td>You should have at least 3 Shooters</td>
                            </tr>
                            <tr>
                                <td>Romelu Lukaku</td>
                                <td>0111521101</td>
                                <td>Wedding Photography</td>
                                <td>12-08-2024</td>
                                <td>0700hrs - 1800hrs</td>
                                <td>Paradise Gardens</td>
                                <td>You should have at least 3 Shooters</td>
                            </tr>
                        </tbody>
                    </table>
                    <dialog class="mod" id="booking-modal">

                        <form method="dialog">
                            <h2>Book A Session</h2>
                            <hr>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone"
                                    placeholder="Enter your phone number" required>
                            </div>
                            <div class="form-group">
                                <label for="service">Select Service</label>
                                <select class="form-control custom-select" id="service" required>
                                    <option value="" hidden>Choose a service</option>
                                    <option value="portrait">Portrait Photography</option>
                                    <option value="wedding">Wedding Photography</option>
                                    <option value="event">Event Photography</option>
                                    <option value="product">Product Photography</option>
                                    <option value="realestate">Real Estate Photography</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Preferred Date</label>
                                <input type="date" class="form-control" id="date"
                                    placeholder="What is the date of the occasion?" required>
                            </div>
                            <div class="form-group">
                                <label for="time">Preferred Time</label>
                                <input type="time" class="form-control" id="time"
                                    placeholder="What is the starting time?" required>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location"
                                    placeholder="Enter the location of the shoot" required>
                            </div>
                            <div class="form-group">
                                <label for="details">Additional Details</label>
                                <textarea class="form-control" id="details" rows="3" placeholder="Any additional details or requests"></textarea>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary" id="booking-btn-close">Submit</button>
                        </form>
                    </dialog>
                    <div class="book-session">
                        <button type="button" class="btn btn-success" id="booking-btn">Book A Session</button>
                    </div>
                </div>
            </section>
        </div>

    </main>
    <footer>

    </footer>

</body>

</html>
