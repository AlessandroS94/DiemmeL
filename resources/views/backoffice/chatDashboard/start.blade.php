@extends('backoffice/layout/layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            @if($warning ?? '')
            <!-- warning allert -->
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-exclamation"></i></h4>
                Aggiornamento non avvenuto!
            </div>
            <!-- warning allert -->
            @endif
            @error('file.*')
            <!-- warning allert -->
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-exclamation"></i></h4>
                Aggiornamento avvenuto!File non conforme!
            </div>
            <!-- warning allert -->
            @enderror
            @error('user_id')
            <!-- warning allert -->
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-exclamation"></i></h4>
                Aggiornamento avvenuto! Utente non valido!
            </div>
            <!-- warning allert -->
            @enderror
            @error('description')
            <!-- warning allert -->
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-exclamation"></i></h4>
                Aggiornamento avvenuto! Descrizione non valida!
            </div>
            <!-- warning allert -->
            @enderror
            @if($success ?? '')
            <!-- warning allert -->
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-exclamation"></i></h4>
                Aggiornamento avvenuto!
            </div>
            <!-- warning allert -->
            @endif
            <div class="alert alert-success alert-dismissible" style="display: none" id="fileC">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-exclamation"></i></h4>
                File selezionati
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Layout</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Inizia chat</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> Chat </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                <form method="POST" action="{{route('createChatPersist')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Nome del progetto</label>
                                <input required type="text" name="subject" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Inizia la chat con </label>
                                <select name="id_user" class="form-control select2" style="width: 100%;">
                                    @if($users ?? '')
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name_user}} {{$user->surname_user}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" value="Inizia" class="btn btn-success float-right"></form>
            </div>
        </div>

    </section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection