@extends ('layouts.app')

@section('content')
<!-- START: tables/basic-tables -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Basic Tables</strong>
      <a
        href="https://getbootstrap.com/docs/4.2/content/tables/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Default</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/content/tables/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Username</th>
                <th style="width: 200px">Levels</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <input type="checkbox" />
                </th>
                <td>
                  <a
                    href="javascript: void(0);"
                    class="cui-utils-link-underlined cui-utils-link-blue"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="User #1"
                    >Mark</a
                  >
                </td>
                <td>@mdo</td>
                <td>
                  <div class="cui-utils-steps-inline d-block">
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >1</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >2</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >3</a
                    >
                  </div>
                </td>
              </tr>
              <tr class="active">
                <th scope="row">
                  <input type="checkbox" />
                </th>
                <td>
                  <a
                    href="javascript: void(0);"
                    class="cui-utils-link-underlined cui-utils-link-blue"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="User #2"
                    >Jacob</a
                  >
                </td>
                <td>@fat</td>
                <td>
                  <div class="cui-utils-steps-inline d-block">
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >1</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >2</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step">3</a>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox" />
                </th>
                <td>
                  <a
                    href="javascript: void(0);"
                    class="cui-utils-link-underlined cui-utils-link-blue"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="User #3"
                    >Larry</a
                  >
                </td>
                <td>@twitter</td>
                <td>
                  <div class="cui-utils-steps-inline d-block">
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-primary"
                      >1</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step">2</a>
                    <a href="javascript: void(0);" class="cui-utils-step">3</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Inverse</strong></h5>
        <p class="text-muted">Modifier: <code>.table-inverse</code></p>
        <div class="mb-5">
          <table class="table table-inverse">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Default Thead</strong></h5>
        <p class="text-muted">Modifier: <code>.thead-default</code></p>
        <div class="mb-5">
          <table class="table">
            <thead class="thead-default">
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Username</th>
                <th style="width: 200px">Progress</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>@mdo</td>
                <td>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-striped progress-bar-animated"
                      role="progressbar"
                      style="width: 10%"
                      aria-valuenow="10"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>@fat</td>
                <td>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                      role="progressbar"
                      style="width: 25%"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>@twitter</td>
                <td>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                      role="progressbar"
                      style="width: 75%"
                      aria-valuenow="75"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Inverse Thead</strong></h5>
        <p class="text-muted">Modifier: <code>.thead-inverse</code></p>
        <div class="mb-5">
          <table class="table">
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Striped</strong></h5>
        <p class="text-muted">Modifier: <code>.table-striped</code></p>
        <div class="mb-5">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th style="width: 200px">Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>
                  <small class="text-uppercase text-default">Checked by:</small>
                  <br />
                  Mark
                </td>
                <td>
                  <small class="text-uppercase text-default">Available:</small>
                  <br />
                  Otto
                </td>
                <td>
                  <small class="text-uppercase text-default">Last known:</small>
                  <br />
                  @mdo
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>
                  <small class="text-uppercase text-default">Checked by:</small>
                  <br />
                  Jacob
                </td>
                <td>
                  <small class="text-uppercase text-default">Available:</small>
                  <br />
                  Thornton
                </td>
                <td>
                  <small class="text-uppercase text-default">Last known:</small>
                  <br />
                  @fat
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>
                  <small class="text-uppercase text-default">Checked by:</small>
                  <br />
                  Larry
                </td>
                <td>
                  <small class="text-uppercase text-default">Available:</small>
                  <br />
                  the Bird
                </td>
                <td>
                  <small class="text-uppercase text-default">Last known:</small>
                  <br />
                  @twitter
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Hover</strong></h5>
        <p class="text-muted">Modifier: <code>.table-hover</code></p>
        <div class="mb-5">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>
                  <small class="text-uppercase text-default">Checked by:</small>
                  <br />
                  Mark
                </td>
                <td>
                  <small class="text-uppercase text-default">Available:</small>
                  <br />
                  Otto
                </td>
                <td>
                  <small class="text-uppercase text-default">Last known:</small>
                  <br />
                  @mdo
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>
                  <small class="text-uppercase text-default">Checked by:</small>
                  <br />
                  Jacob
                </td>
                <td>
                  <small class="text-uppercase text-default">Available:</small>
                  <br />
                  Thornton
                </td>
                <td>
                  <small class="text-uppercase text-default">Last known:</small>
                  <br />
                  @fat
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>
                  <small class="text-uppercase text-default">Checked by:</small>
                  <br />
                  Larry
                </td>
                <td>
                  <small class="text-uppercase text-default">Available:</small>
                  <br />
                  the Bird
                </td>
                <td>
                  <small class="text-uppercase text-default">Last known:</small>
                  <br />
                  @twitter
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-black"><strong>Responsive Table</strong></h5>
        <p class="text-muted">Outer element: <code>.table-responsive</code></p>
        <div class="table-responsive mb-5">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Damon</td>
                <td>5516 Adolfo Green</td>
                <td>Littelhaven</td>
                <td>85</td>
                <td>2014/06/13</td>
                <td>$553,536</td>
              </tr>
              <tr>
                <td>Torrey</td>
                <td>1995 Richie Neck</td>
                <td>West Sedrickstad</td>
                <td>77</td>
                <td>2014/09/12</td>
                <td>$243,577</td>
              </tr>
              <tr>
                <td>Elliott_Becker</td>
                <td>8417 Orion Parkway</td>
                <td>Streichside</td>
                <td>83</td>
                <td>2014/08/28</td>
                <td>$447,592</td>
              </tr>
              <tr>
                <td>Yasmine</td>
                <td>67284 Kreiger Freeway</td>
                <td>Stoltenbergside</td>
                <td>8</td>
                <td>2014/12/12</td>
                <td>$358,369</td>
              </tr>
              <tr>
                <td>Ada.Hoppe</td>
                <td>69842 Peyton Viaduct</td>
                <td>South Geovannyburgh</td>
                <td>89</td>
                <td>2013/05/13</td>
                <td>$211,76</td>
              </tr>
              <tr>
                <td>Sammie</td>
                <td>46406 Powlowski Common</td>
                <td>Cristmouth</td>
                <td>51</td>
                <td>2014/03/29</td>
                <td>$345,739</td>
              </tr>
              <tr>
                <td>Terrance.Borer</td>
                <td>1568 Richmond Bypass</td>
                <td>Schillerfort</td>
                <td>46</td>
                <td>2014/10/27</td>
                <td>$634,073</td>
              </tr>
              <tr>
                <td>August</td>
                <td>731 Stiedemann Crossing</td>
                <td>Rolfsonborough</td>
                <td>98</td>
                <td>2013/11/12</td>
                <td>$203,952</td>
              </tr>
              <tr>
                <td>Mckenna.Herman</td>
                <td>63204 Hegmann Keys</td>
                <td>New Isobelview</td>
                <td>2</td>
                <td>2013/08/12</td>
                <td>$702,091</td>
              </tr>
              <tr>
                <td>Gunnar</td>
                <td>92873 Barney Club</td>
                <td>Beierview</td>
                <td>82</td>
                <td>2014/03/29</td>
                <td>$569,778</td>
              </tr>
              <tr>
                <td>Jarvis.Simonis</td>
                <td>0778 Elvis Spurs</td>
                <td>Harrisfurt</td>
                <td>62</td>
                <td>2013/05/28</td>
                <td>$336,046</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: tables/basic-tables -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('[data-toggle=tooltip]').tooltip()
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection