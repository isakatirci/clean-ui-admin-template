@extends ('layouts.app')

@section('content')
<!-- START: components/notifications-alerts -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Popup Alerts</strong>
      <a
        href="https://github.com/mouse0270/bootstrap-notify"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <p class="text-muted">
            Element: read
            <a href="https://github.com/mouse0270/bootstrap-notify" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <div class="form-group">
            <button id="notify-basic" type="button" class="btn btn-default">Basic</button>
            <button id="notify-passing-title" type="button" class="btn btn-default">
              Passing In A Title
            </button>
            <button id="notify-passing-html" type="button" class="btn btn-default">
              Passing HTML
            </button>
            <button id="notify-url" type="button" class="btn btn-default">Using A URL</button>
          </div>
          <div class="form-group">
            <button id="notify-icomoon-premuim" type="button" class="btn btn-default">
              Using Icomoon Premium
            </button>
            <button id="notify-fontawesome" type="button" class="btn btn-default">
              Using FontAwesome
            </button>
          </div>
          <div class="form-group">
            <button id="notify-center" type="button" class="btn btn-default">Top Center</button>
            <button id="notify-bottom" type="button" class="btn btn-default">Bottom</button>
            <button id="notify-bottom-center" type="button" class="btn btn-default">
              Bottom Center
            </button>
          </div>
          <div class="form-group">
            <button id="notify-default" type="button" class="btn btn-default">Default</button>
            <button id="notify-primary" type="button" class="btn btn-primary">Primary</button>
            <button id="notify-secondary" type="button" class="btn btn-secondary">Secondary</button>
            <button id="notify-success" type="button" class="btn btn-success">Success</button>
            <button id="notify-warning" type="button" class="btn btn-warning">Warning</button>
            <button id="notify-danger" type="button" class="btn btn-danger">Danger</button>
            <button id="notify-info" type="button" class="btn btn-info">Info</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Modal Alerts</strong>
      <a
        href="https://github.com/lipis/bootstrap-sweetalert"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <p class="text-muted">
            Element: read
            <a href="https://github.com/lipis/bootstrap-sweetalert" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <button class="btn btn-default mr-2 mb-2 swal-btn-basic">Basic</button>
          <button class="btn btn-default mr-2 mb-2 swal-btn-text">With Text</button>
          <button class="btn btn-default mr-2 mb-2 swal-btn-success">Success</button>
          <button class="btn btn-default mr-2 mb-2 swal-btn-warning">Warning</button>
          <button class="btn btn-default mr-2 mb-2 swal-btn-cancel">Cancel</button>
          <button class="btn btn-default mr-2 mb-2 swal-btn-info">Info</button>
          <button class="btn btn-default mr-2 mb-2 swal-btn-custom-img">Image</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Default Alerts</strong>
      <a
        href="https://getbootstrap.com/docs/4.2/components/alerts/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Simple Alerts</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/components/alerts/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="alert alert-default" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Good day!</strong> Read
            <a href="#" class="alert-link">this important alert message</a>
          </div>
          <div class="alert alert-primary" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Excellent!</strong> Read
            <a href="#" class="alert-link">this important alert message</a>
          </div>
          <div class="alert alert-secondary" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Good!</strong> Read
            <a href="#" class="alert-link">this important alert message</a>
          </div>
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Well done!</strong> You successfully read
            <a href="#" class="alert-link">this important alert message</a>
          </div>
          <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Heads up!</strong> This
            <a href="#" class="alert-link">alert needs your attention</a>
          </div>
          <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Warning!</strong> Better check yourself, you're
            <a href="#" class="alert-link">not looking too good</a>
          </div>
          <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and
            try submitting again
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Alert with List</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/components/alerts/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="alert alert-default" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p><strong>Read documentation and check devices:</strong></p>
            <ul class="margin-top-10">
              <li>Connections</li>
              <li>Cables & Accessories</li>
              <li>Display & Touch</li>
              <li>Drivers</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: components/notifications-alerts -->

<!-- Page Scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      // Sweet Alert
      $('.swal-btn-basic').on('click', function(e) {
        e.preventDefault()
        swal("Here's a message!")
      })

      $('.swal-btn-text').on('click', function(e) {
        e.preventDefault()
        swal({
          title: "Here's a message!",
          text: "It's pretty, isn't it?",
        })
      })

      $('.swal-btn-success').on('click', function(e) {
        e.preventDefault()
        swal({
          title: 'Good job!',
          text: 'You clicked the button!',
          type: 'success',
          confirmButtonClass: 'btn-success',
          confirmButtonText: 'Success',
        })
      })

      $('.swal-btn-warning').on('click', function(e) {
        e.preventDefault()
        swal(
          {
            title: 'Are you sure?',
            text: 'Your will not be able to recover this file!',
            type: 'warning',
            showCancelButton: true,
            cancelButtonClass: 'btn-default',
            confirmButtonClass: 'btn-warning',
            confirmButtonText: 'Remove',
            closeOnConfirm: false,
          },
          function() {
            swal({
              title: 'Deleted!',
              text: 'File has been deleted',
              type: 'success',
              confirmButtonClass: 'btn-success',
            })
          },
        )
      })

      $('.swal-btn-cancel').on('click', function(e) {
        e.preventDefault()
        swal(
          {
            title: 'Are you sure?',
            text: 'You will not be able to recover this imaginary file!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn-danger',
            confirmButtonText: 'Yes, remove it',
            cancelButtonText: 'Cancel',
            closeOnConfirm: false,
            closeOnCancel: false,
          },
          function(isConfirm) {
            if (isConfirm) {
              swal({
                title: 'Deleted!',
                text: 'Your imaginary file has been deleted.',
                type: 'success',
                confirmButtonClass: 'btn-success',
              })
            } else {
              swal({
                title: 'Cancelled',
                text: 'Your imaginary file is safe :)',
                type: 'error',
                confirmButtonClass: 'btn-danger',
              })
            }
          },
        )
      })

      $('.swal-btn-custom-img').on('click', function(e) {
        e.preventDefault()
        swal({
          title: 'Sweet!',
          text: "Here's a custom image.",
          confirmButtonClass: 'btn-success',
          imageUrl: '/cleanui/components/dummy-assets/common/img/avatars/1.jpg',
        })
      })

      $('.swal-btn-info').on('click', function(e) {
        e.preventDefault()
        swal({
          title: 'Are you sure?',
          text: 'Your will not be able to recover this imaginary file!',
          type: 'info',
          showCancelButton: true,
          cancelButtonClass: 'btn-default',
          confirmButtonText: 'Info',
          confirmButtonClass: 'btn-primary',
        })
      })

      // Bootstrap Notify
      $('#notify-basic').on('click', function() {
        $.notify('Hello World')
      })

      $('#notify-passing-title').on('click', function() {
        $.notify({
          title: 'Welcome:',
          message: 'This plugin has been provided to you by Robert McIntosh aka mouse0270',
        })
      })

      $('#notify-passing-html').on('click', function() {
        $.notify({
          title: '<strong>Welcome:</strong> ',
          message:
            'This plugin has been provided to you by Robert McIntosh aka <a href="https://twitter.com/Mouse0270" target="_blank">@mouse0270</a>',
        })
      })

      $('#notify-url').on('click', function() {
        $.notify({
          message: 'Check out my twitter account by clicking on this notification!',
          url: 'https://twitter.com/Mouse0270',
        })
      })

      $('#notify-icomoon-premuim').on('click', function() {
        $.notify({
          icon: 'icmn-database',
          message: 'Everyone loves font icons! Use them in your notification!',
        })
      })

      $('#notify-fontawesome').on('click', function() {
        $.notify({
          icon: 'fa fa-star',
          title: 'Title',
          message: 'Everyone loves font icons! Use them in your notification!',
        })
      })

      $('#notify-center').on('click', function() {
        $.notify(
          {
            icon: 'font-icon font-icon-warning',
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            placement: {
              align: 'center',
            },
          },
        )
      })

      $('#notify-bottom').on('click', function() {
        $.notify(
          {
            icon: 'font-icon font-icon-warning',
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            placement: {
              from: 'bottom',
            },
          },
        )
      })

      $('#notify-bottom-center').on('click', function() {
        $.notify(
          {
            icon: 'font-icon font-icon-warning',
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            placement: {
              from: 'bottom',
              align: 'center',
            },
          },
        )
      })

      $('#notify-default').on('click', function() {
        $.notify(
          {
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            type: 'default',
          },
        )
      })

      $('#notify-primary').on('click', function() {
        $.notify(
          {
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            type: 'primary',
          },
        )
      })

      $('#notify-secondary').on('click', function() {
        $.notify(
          {
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            type: 'secondary',
          },
        )
      })

      $('#notify-success').on('click', function() {
        $.notify(
          {
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            type: 'success',
          },
        )
      })

      $('#notify-warning').on('click', function() {
        $.notify(
          {
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            type: 'warning',
          },
        )
      })

      $('#notify-danger').on('click', function() {
        $.notify(
          {
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            type: 'danger',
          },
        )
      })

      $('#notify-info').on('click', function() {
        $.notify(
          {
            title: '<strong>Heads up!</strong>',
            message: 'You can use any of bootstraps other alert styles as well by default.',
          },
          {
            type: 'info',
          },
        )
      })
    })
  })(jQuery)
</script>
<!-- End Page Scripts -->

@endsection