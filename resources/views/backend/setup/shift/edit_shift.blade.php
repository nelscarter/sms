@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Ubah Shift</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{ route('update.student.shift', $editData->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">



                                        <div class="form-group">
                                            <h5>Shift <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}">
                                                @error('name')
                                                <span class="text-danger">Shift yang anda masukan sudah ada!</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Simpan Perubahan">
                                        </div>
                                    </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>


    </div>
</div>

@endsection