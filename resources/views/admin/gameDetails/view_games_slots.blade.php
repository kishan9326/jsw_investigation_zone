@extends('admin.main-layout')

@section('content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Investigation Zone Games List</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
           <a href="{{ route('addSlots') }}" class="btn btn-info btn-sm" href="#">
                              </i>
                              Add Slot
                          </a>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- <h3 class="card-title">Projects</h3> -->

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          Sr.
                      </th>
                      <th>
                          Slots
                      </th>
                      <th class="project-actions text-right">
                       Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <?php $i=1; ?>
                    @foreach ($data as $finalData)
                    <td>{{$i}}</td>
                      <td>
                          {{$finalData->slots}}
                      </td>
                      <td class="project-actions text-right">
                          <a href="{{ route('editSlot', ['id'=>$finalData->id]) }}" class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                         
                      </td>
                      <?php $i++; ?>
                  </tr>
                 @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.row (main row) -->

@endsection
