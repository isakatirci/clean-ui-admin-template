@extends ('layouts.app')

@section('content')
<!-- START: forms/checkboxes-radio -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Radio Buttons</strong>
      <a
        href="https://.getbootstrap.com/docs/4.2/components/forms/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Default Radio Buttons</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/forms/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="form-check">
            <label class="form-check-label">
              <input
                class="form-check-input"
                type="radio"
                name="exampleRadios"
                id="exampleRadios1"
                value="option1"
                checked
              />
              Option one is this and that&mdash;be sure to include why it's great
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input
                class="form-check-input"
                type="radio"
                name="exampleRadios"
                id="exampleRadios2"
                value="option2"
              />
              Option two can be something else and selecting it will deselect option one
            </label>
          </div>
          <div class="form-check disabled">
            <label class="form-check-label">
              <input
                class="form-check-input"
                type="radio"
                name="exampleRadios"
                id="exampleRadios3"
                value="option3"
                disabled
              />
              Option three is disabled
            </label>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Custom Radio Buttons</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/forms/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default active">
              <input type="radio" name="example4" checked="" />
              Red Label
            </label>
            <label class="btn btn-default">
              <input type="radio" name="example4" />
              Blue Label
            </label>
          </div>
          <br />
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-outline-default">
              <input type="radio" name="example5" />
              Red Label
            </label>
            <label class="btn btn-outline-default">
              <input type="radio" name="example5" />
              Blue Label
            </label>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Custom Radio Buttons</strong></h5>
        <div class="mb-5">
          <label class="cui-utils-control cui-utils-control-radio"
            >First checkbox
            <input type="radio" name="radio" checked="checked" />
            <span class="cui-utils-control-indicator"></span>
          </label>
          <label class="cui-utils-control cui-utils-control-radio"
            >Second checkbox
            <input type="radio" name="radio" />
            <span class="cui-utils-control-indicator"></span>
          </label>
          <label class="cui-utils-control cui-utils-control-radio"
            >Disabled
            <input type="radio" disabled="disabled" />
            <span class="cui-utils-control-indicator"></span>
          </label>
          <label class="cui-utils-control cui-utils-control-radio"
            >Disabled & checked
            <input type="radio" disabled="disabled" checked="checked" />
            <span class="cui-utils-control-indicator"></span>
          </label>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Checkboxes</strong>
      <a
        href="https://.getbootstrap.com/docs/4.2/components/forms/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Default Checkboxes</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/forms/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="" />
              Option one is this and that be sure to include why it's great
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" checked value="" />
              Option two is checked now
            </label>
          </div>
          <div class="form-check disabled">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" value="" disabled />
              Option two is disabled
            </label>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Custom Сheckboxes</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/forms/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default active">
              <input type="checkbox" name="example7" checked="" />
              Red Label
            </label>
            <label class="btn btn-default">
              <input type="checkbox" name="example7" />
              Blue Label
            </label>
          </div>
          <br />
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-outline-default">
              <input type="checkbox" name="example7" />
              Red Label
            </label>
            <label class="btn btn-outline-default">
              <input type="checkbox" name="example7" />
              Blue Label
            </label>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Custom Checkbox</strong></h5>
        <div class="mb-5">
          <label class="cui-utils-control cui-utils-control-checkbox"
            >First checkbox
            <input type="checkbox" checked="checked" />
            <span class="cui-utils-control-indicator"></span>
          </label>
          <label class="cui-utils-control cui-utils-control-checkbox"
            >Second checkbox
            <input type="checkbox" />
            <span class="cui-utils-control-indicator"></span>
          </label>
          <label class="cui-utils-control cui-utils-control-checkbox"
            >Disabled
            <input type="checkbox" disabled="disabled" />
            <span class="cui-utils-control-indicator"></span>
          </label>
          <label class="cui-utils-control cui-utils-control-checkbox"
            >Disabled & checked
            <input type="checkbox" disabled="disabled" checked="checked" />
            <span class="cui-utils-control-indicator"></span>
          </label>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: forms/checkboxes-radio -->

@endsection