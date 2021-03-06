@extends('template')

@section('content')

<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="index.html">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="#">{{ $title }}</a>
    </li>
  </ul>
</div>
<h3 class="page-title">
{{ $title }}
</h3>

<a href="{{ route('branchtype.create') }}" class="btn blue btn-sm">Add <i class="fa fa-plus-circle"></i></a>
<br/><br/>
<div class="row">
  <div class="col-md-12">
    @include('layouts.partials.alert')
    <div class="portlet box green-haze">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-globe"></i>{{ $title }}
        </div>
        <div class="tools">
          <a href="javascript:;" class="collapse">
          </a>
        </div>
      </div>
      <div class="portlet-body">

        <table class="table table-striped table-bordered table-hover" id="sample_2">
          <thead>
            <tr>
              <th>No.</th>
              <th>Code</th>
              <th>Name</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1 ?>
          @foreach($data as $row)
              <tr>
                  <td style="text-align:center;width:5%;">{{ $i++ }}</td>
                  <td>{{ $row->typecode }}</td>
                  <td>{{ $row->name }}</td>
                  <td style="text-align:center;width:15%;">
                      <a href="{{ URL::route('branchtype.edit', $row->typecode) }}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                      <a href="{{ URL::route('branchtype.delete', $row->typecode) }}" onclick="delete()" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                  </td>
              </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>  
</div>

@endsection


