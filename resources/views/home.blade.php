@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="d-flex bd-highlight mb-4">
            <div class="p-2 w-100 bd-highlight">
                <h2>Gästebuch</h2>
            </div>
            <div class="p-2 flex-shrink-0 bd-highlight">
                <button class="btn btn-success" id="btn-add">
                    Beitrag hinzufügen
                </button>
            </div>
        </div>

        <div>
            <table class="table table-inverse">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>E-Mail</th>
                    <th>Text</th>
                </tr>
                </thead>
                <tbody id="gaestebuch-list" name="gaestebuch-list">
                @foreach ($gaestebuch as $data)
                    <tr id="gaestebuch{{$data->idEintrag}}">
                        <td>{{$data->idEintrag}}</td>
                        <td>{{$data->Vorname}}</td>
                        <td>{{$data->Nachname}}</td>
                        <td>{{$data->EMail}}</td>
                        <td>{{$data->Text}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="modal fade" id="formModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="formModalLabel">Gästebuch-Eintrag</h4>
                        </div>
                        <div class="modal-body">
                            <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                                <div class="form-group">
                                    <label>Vorname </label>
                                    <input type="text" class="form-control" id="Vorname" name="Vorname"
                                           placeholder="Bitte Vorname eintragen!" value="">
                                </div>

                                <div class="form-group">
                                    <label>Nachname</label>
                                    <input type="text" class="form-control" id="Nachname" name="Nachname"
                                           placeholder="Bitte Nachname eintragen!" value="">
                                </div>

                                <div class="form-group">
                                    <label>E-Mail</label>
                                    <input type="text" class="form-control" id="EMail" name="EMail"
                                           placeholder="Bitte E-Mail eintragen!" value="">
                                </div>

                                <div class="form-group">
                                    <label>Text</label>
                                    <input type="text" class="form-control" id="Text" name="Text"
                                           placeholder="Bitte Text eintragen!" value="">
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Abschicken
                            </button>
                            <input type="hidden" id="gaestebuch_id" name="gaestebuch_id" value="0">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
