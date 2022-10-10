<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/starter.css">
    <title>Bootstrap npm starter</title>
  </head>
  <body>
<!--Directive (witin an '@') yield-->
    @yield('content')

    <div class="col-md-8 py-5 px-3 mx-auto">

      {{-- <header class="pb-3 mb-5 border-bottom">
        <h1 class="h4">
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-inline-block mr-2" viewBox="0 0 118 94" role="img"><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            <span>npm starter</span>
          </a>
        </h1>
      </header> --}}

      {{-- <h1>Get started with Bootstrap</h1>
      <div class="col-lg-8 px-0">
        <p class="lead">You've successfully loaded up the Bootstrap npm starter project! It's loaded up with <a href="https://getbootstrap.com/docs/4.6/getting-started/introduction/">Bootstrap 4</a>, <a href="https://icons.getbootstrap.com">Bootstrap Icons</a>, and tooling for compiling our Sass and JavaScript to your needs.</p>
        <p>If this button appears blue and the link appears purple, you've done it!</p>
      </div>

      <button type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#exampleModal">Toggle example modal</button>
      <a href="#" class="text-success">Example link</a>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Success!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              If you're seeing this modal after clicking the button on the page, Bootstrap's CSS and JS are both working properly.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <hr class="my-5 w-25 mx-0">

      <div class="row">
        <div class="col-md-6">
          <h2>Adding Bootstrap Icons</h2>
          <p><a href="https://icons.getbootstrap.com">Bootstrap Icons</a> are included with the SVG sprite here, but there are other <a href="https://icons.getbootstrap.com/#usage">usage options</a>, too. They're styleable with text utilities and more.</p>

          <svg class="bi text-danger" width="32" height="32">
            <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#heart-fill"/>
          </svg>
          <svg class="bi text-dark" width="32" height="32">
            <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#toggles"/>
          </svg>
          <svg class="bi text-primary" width="32" height="32">
            <use xlink:href="node_modules/bootstrap-icons/bootstrap-icons.svg#shop"/>
          </svg>
        </div>

        <div class="col-md-6">
          <h2>Guides</h2>
          <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
          <ul class="icon-list">
            <li><a href="https://getbootstrap.com/docs/4.6/getting-started/introduction">Bootstrap quick start guide</a></li>
            <li><a href="https://getbootstrap.com/docs/4.6/getting-started/webpack">Bootstrap Webpack guide</a></li>
            <li><a href="https://getbootstrap.com/docs/4.6/getting-started/build-tools">Contributing to Bootstrap</a></li>
          </ul>
        </div>
      </div>

      <hr class="my-5">

      <p class="text-muted">Created and open sourced by the Bootstrap team. Licensed MIT.</p>
    </div> --}}

    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script type="module" src="assets/js/starter.js"></script>
  </body>
</html>