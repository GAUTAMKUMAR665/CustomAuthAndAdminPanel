@extends('targlo.main')

@section('content')
    <!-- report content section -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

.toc{
    color: aqua;
}
 h2{
    color: blue
}
    </style>
    <title>Document</title>
</head>
<body>

</body>
</html>
@foreach ($report as $reports)
<section class="reports-section spad">
    <div class="container">
        <h4 class="mb-3">{{ $reports->Title }}</h4>
        <div class="row">
            <div class="col-md-8">

                <button type="button" class="btn btn-primary">
                    Published Date <span class="badge badge-light">{{ $reports->Date_Published }}</span>
                    <span class="sr-only">unread messages</span>
                  </button>
                  <button type="button" class="btn btn-primary">
                    No of pages <span class="badge badge-light">{{ $reports->Total_Page }}</span>
                    <span class="sr-only"></span>
                  </button>
                  <button type="button" class="btn btn-primary">
                    Report ID <span class="badge badge-light">{{ $reports->Category_Id}}</span>
                    <span class="sr-only">unread messages</span>
                  </button>
                  <button type="button" class="btn btn-primary">
                    Pulisher Id <span class="badge badge-light">{{ $reports->Publisher_Id }}</span>
                    <span class="sr-only"></span>
                  </button>
                  <button type="button" class="btn btn-primary">
                 Segmentation <span class="badge badge-light">{{ $reports->Segmentation }}</span>
                    <span class="sr-only"></span>
                  </button>
                  <button type="button" class="btn btn-primary">
                 Key_Player <span class="badge badge-light">{{ $reports->key_player }}</span>
                    <span class="sr-only"></span>
                  </button>
                  <button type="button" class="btn btn-primary">
                 Summary <span class="badge badge-light">{{ $reports->Summary }}</span>
                    <span class="sr-only"></span>
                  </button>
                <div class="responsive-tabs mt-3 pt-3">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li role="presentation" class="">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Report description</a>
                        </li>
                        <li role="presentation" class="">

                        <a href="/toc/{{ $reports->Meta_Title }}" >Table of Content</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Request Sample</a>
                        </li>
                        <li role="presentation" class="">
                          <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Customization </a>
                      </li>
                    </ul>


                    <div id="tabs-content" class="tab-content panel-group">
                        <div class="panel-heading" role="tab" id="heading1">
                            <a href="#tab1" class="" role="button" data-toggle="collapse" data-parent="tabs-content" aria-expanded="true"
                               aria-controls="tab1">Tab 1</a>
                        </div>

                        <div id="tab1" role="tabpanel" class="tab-pane active panel-collapse collapse in" aria-labelledby="heading1">
                            <p>
                                {!! $reports->Description !!}
                             </p>

                        </div>

                        <div class="panel-heading" role="tab" id="heading2">
                            <a href="/toc/" class="collapsed" role="button" data-toggle="collapse" data-parent="tabs-content"
                               aria-expanded="true" aria-controls="tab2">Tab 2</a>
                        </div>



                       {{--  <div id="tab2" role="tabpanel" class="tab-pane panel-collapse collapse" aria-labelledby="heading2">
                            <p class="toc" >
                              {!! $reports->Table_of_Content !!}
                               </p>
                        </div> --}}

                        <div class="panel-heading" role="tab" id="heading3">
                            <a href="#tab3" class="collapsed" role="button" data-toggle="collapse" data-parent="tabs-content"
                               aria-expanded="true" aria-controls="tab3">Tab 3</a>
                        </div>

                        <div id="tab3" role="tabpanel" class="tab-pane panel-collapse collapse" aria-labelledby="heading3">
                          <p>This free Sample Report is purely a representation of our full report, for evaluating the market scope/data and make informed purchase decisions.</p>
                          <form method="POST">
                            <div class="row row-space">
                                <div class="col-12 col-sm-6">
                                    <div class="input-group">
                                        <label class="label">first name</label>
                                        <input class="input--style-4" type="text" name="first_name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group">
                                        <label class="label">last name</label>
                                        <input class="input--style-4" type="text" name="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-12 col-sm-6">
                                    <div class="input-group">
                                        <label class="label">Birthday</label>
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group">
                                        <label class="label">Gender</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Male
                                                <input type="radio" checked="checked" name="gender">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Female
                                                <input type="radio" name="gender">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-12 col-sm-6">
                                    <div class="input-group">
                                        <label class="label">Email</label>
                                        <input class="input--style-4" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="input-group">
                                        <label class="label">Phone Number</label>
                                        <input class="input--style-4" type="text" name="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            </div>
                        </form>
                        </div>
                        <div class="panel-heading" role="tab" id="heading4">
                          <a href="#tab4" class="collapsed" role="button" data-toggle="collapse" data-parent="tabs-content"
                             aria-expanded="true" aria-controls="tab4">Tab 4</a>
                      </div>
                      <div id="tab4" role="tabpanel" class="tab-pane panel-collapse collapse" aria-labelledby="heading4">
                        <p>This free Sample Report is purely a representation of our full report, for evaluating the market scope/data and make informed purchase decisions.</p>
                        <form method="POST">
                          <div class="row row-space">
                              <div class="col-12 col-sm-6">
                                  <div class="input-group">
                                      <label class="label">first name1</label>
                                      <input class="input--style-4" type="text" name="first_name">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                  <div class="input-group">
                                      <label class="label">last name1</label>
                                      <input class="input--style-4" type="text" name="last_name">
                                  </div>
                              </div>
                          </div>
                          <div class="row row-space">
                              <div class="col-12 col-sm-6">
                                  <div class="input-group">
                                      <label class="label">Birthday</label>
                                      <div class="input-group-icon">
                                          <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                          <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                  <div class="input-group">
                                      <label class="label">Gender</label>
                                      <div class="p-t-10">
                                          <label class="radio-container m-r-45">Male
                                              <input type="radio" checked="checked" name="gender">
                                              <span class="checkmark"></span>
                                          </label>
                                          <label class="radio-container">Female
                                              <input type="radio" name="gender">
                                              <span class="checkmark"></span>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row row-space">
                              <div class="col-12 col-sm-6">
                                  <div class="input-group">
                                      <label class="label">Email</label>
                                      <input class="input--style-4" type="email" name="email">
                                  </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                  <div class="input-group">
                                      <label class="label">Phone Number</label>
                                      <input class="input--style-4" type="text" name="phone">
                                  </div>
                              </div>
                          </div>

                          <div class="p-t-15">
                              <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                          </div>
                      </form>
                      </div>

                    </div>
                    </div>
                </div>



            <div class="col-md-4">
              <div class="buy-now-col">

              <h4 class="mb-4">Some headings</h4 class="mb-4">
                <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1" id="radio1" type="radio" checked>
                    <label for="radio1">Single User:{{ $reports->Single_User_Price }}</label>
                </div>
                <div class="rdio rdio-primary radio-inline">
                    <input name="radio" value="2" id="radio2" type="radio">
                    <label for="radio2">Multi User:{{ $reports->Multi_User_Price }}</label>

                </div>
                <div class="rdio rdio-primary radio-inline">
                    <input name="radio" value="3" id="radio3" type="radio">
                    <label for="radio3">Enterprise User: {{ $reports->Enterprise_User_Price }}</label>

                </div>
                <a href="/payment" class="site-btn sb-gradients sbg-line mt-3">Buy now</a>
                <a href="" class="site-btn sb-gradients sbg-line mt-3">Call Us</a>
            </div>

          </div>
        </div>
    </div>
</section>
<!-- report content section -->
@endforeach

@endsection
