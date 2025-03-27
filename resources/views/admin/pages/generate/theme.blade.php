@extends('admin.layouts.app')

@section('content')
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-sm-6"><h3 class="mb-0">Theme Customize</h3></div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Theme Customize</li>
                </ol>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-12">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card Header-->
                  <div class="card-header">
                    <!--begin::Card Title-->
                    <h3 class="card-title">Sidebar Theme</h3>
                    <!--end::Card Title-->
                    <!--begin::Card Toolbar-->
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                    <!--end::Card Toolbar-->
                  </div>
                  <!--end::Card Header-->
                  <!--begin::Card Body-->
                  <div class="card-body">
                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-md-3">
                        <select
                          id="sidebar-color-modes"
                          class="form-select form-select-lg"
                          aria-label="Sidebar Color Mode Select"
                        >
                          <option value="">---Select---</option>
                          <option value="dark">Dark</option>
                          <option value="light">Light</option>
                        </select>
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-3">
                        <select
                          id="sidebar-color"
                          class="form-select form-select-lg"
                          aria-label="Sidebar Color Select"
                        >
                          <option value="">---Select---</option>
                        </select>
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-6"><div id="sidebar-color-code" class="w-100"></div></div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Card Body-->
                  <!--begin::Card Footer-->
                  <div class="card-footer">
                    Check more color in
                    <a
                      href="https://getbootstrap.com/docs/5.3/utilities/background/"
                      target="_blank"
                      class="link-primary"
                      >Bootstrap Background Colors</a
                    >
                  </div>
                  <!--end::Card Footer-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card mt-4">
                  <!--begin::Card Header-->
                  <div class="card-header">
                    <!--begin::Card Title-->
                    <h3 class="card-title">Navbar Theme</h3>
                    <!--end::Card Title-->
                    <!--begin::Card Toolbar-->
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                    <!--end::Card Toolbar-->
                  </div>
                  <!--end::Card Header-->
                  <!--begin::Card Body-->
                  <div class="card-body">
                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-md-3">
                        <select
                          id="navbar-color-modes"
                          class="form-select form-select-lg"
                          aria-label="Navbar Color Mode Select"
                        >
                          <option value="">---Select---</option>
                          <option value="dark">Dark</option>
                          <option value="light">Light</option>
                        </select>
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-3">
                        <select
                          id="navbar-color"
                          class="form-select form-select-lg"
                          aria-label="Navbar Color Select"
                        >
                          <option value="">---Select---</option>
                        </select>
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-6"><div id="navbar-color-code" class="w-100"></div></div>
                      <!--end::Col-->
                    </div>
                    <!--end::Row-->
                  </div>
                  <!--end::Card Body-->
                  <!--begin::Card Footer-->
                  <div class="card-footer">
                    Check more color in
                    <a
                      href="https://getbootstrap.com/docs/5.3/utilities/background/"
                      target="_blank"
                      class="link-primary"
                      >Bootstrap Background Colors</a
                    >
                  </div>
                  <!--end::Card Footer-->
                </div>
                <!--end::Card-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      @endsection
