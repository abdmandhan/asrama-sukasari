@extends('metronic.layouts.appdashboard')
@section('content')

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    @include('components.subheader',['subTitle'=>'Dashboard','subName'=>'Application'])

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Edit Blog
                            </h3>
                        </div>
                    </div>

                    <form class="kt-form">
                        <div class="kt-portlet__body">
                            <div class="form-group form-group-last">
                                <div class="alert alert-secondary" role="alert">
                                    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                    <div class="alert-text">
                                        The example form below demonstrates common HTML form elements that receive
                                        updated styles from Bootstrap with additional classes.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image</label> {{ $blog }}
                                <img src="{{ asset($blog->imgSrc) }}" alt="" srcset="">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input name="slug" type="text" class="form-control" placeholder="Slug"
                                    value="{{ $blog->slug }}">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" type="text" class="form-control" placeholder="Slug"
                                    value="{{ $blog->title }}">
                            </div>
                            <div class="form-group">
                                <label>Desc</label>
                                <textarea name="slug" cols="30" rows="10"
                                    class="form-control">{{ $blog->desc }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Category</label>
                                <select class="form-control" id="exampleSelect1">
                                    @foreach ($blog->categories as $item)
                                    {{ $item }}
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect2">Example multiple select</label>
                                <select multiple="" class="form-control" id="exampleSelect2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group form-group-last">
                                <label for="exampleTextarea">Example textarea</label>
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <button type="reset" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection