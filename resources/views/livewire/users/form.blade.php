@include('common.modalHead')

<div class="row">

<div class="col-sm-12 col-md-8">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" wire:model.lazy="name"
        class="form-control" placeholder="ej: Luis Fax" >
        @error('name') <span class="text-danger er">{{ $message}}</span>@enderror
    </div>
</div>


</div>