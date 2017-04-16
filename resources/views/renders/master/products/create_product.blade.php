@extends('layouts.master')

@section('content')


    <div class="row-fluid">
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-align-justify"></i></span>
                <h5>CREATE PRODUCT</h5>
            </div>
            <div class="widget-content nopadding">


                <form action="/master/product/save" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="control-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">Product Name :</label>
                        <div class="controls">
                            <input type="text" name="name" value="{{ old('name') }}" class="span7"
                                   placeholder="Enter Product Name"/>
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="control-group {{ $errors->has('price') ? ' has-error' : '' }}">
                        <label class="control-label">Price :</label>
                        <div class="controls">
                            <input type="text" name="price" value="{{ old('price') }}" class="span7"
                                   placeholder="Enter Amount"/>
                        </div>
                        @if ($errors->has('price'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="control-group  {{ $errors->has('type') ? 'has-error' : '' }}">
                        <label class="control-label">Type :</label>
                        <div class="controls">
                            <select class="select2-choice span7" name="type" value="{{ old('type') }}">
                                <option value="">Select Product Type</option>
                                @foreach($productTypes as $productType)
                                    <option value="{{$productType->id}}">{{$productType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('type'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="control-group {{ $errors->has('image') ? ' has-error' : '' }}">
                        <label class="control-label">Image :</label>
                        <div class="controls">
                            <input type="file" name="image" value="{{ old('image') }}" class="span7"/>
                        </div>
                        @if ($errors->has('price'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="control-group  {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label class="control-label">Description</label>
                        <div class="controls">
                            <textarea class="textarea_editor span7"
                                      name="description">{{ old('description') }}</textarea>
                        </div>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection