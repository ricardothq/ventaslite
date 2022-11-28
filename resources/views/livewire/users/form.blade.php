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
<div class="col-sm-12 col-md-4">
    <div class="form-group">
        <label >Telefono</label>
        <input type="text" wire:model.lazy="phone"
        class="form-control" placeholder="ej: 351 115 9550" maxlenght="10">
        @error('phone') <span class="text-danger er">{{ $message }}</span>@enderror
    </div>
</div>
<div class="col-sm-12 col-md-6">
    <div class="form-group">
        <label >Email</label>
        <input type="text" wire:model.lazy="email"
        class="form-control" placeholder="ej: luisfaax@gmail.com" >
        @error('email') <span class="text-danger er">{{ $message }}</span>@enderror
    </div>
</div>
<div class="col-sm-12 col-md-6">
    <div class="form-group">
        <label >Contraseña</label>
        <input type="text" wire:model.lazy="password"
        class="form-control" >
        @error('password') <span class="text-danger er">{{ $message }}</span>@enderror
    </div>
</div>
<div class="col-sm-12 col-md-6">
    <div class="form-group">
        <label >Estados</label>
        <select wire:model.lazy="status" class="form-control">
            <option value="Elegir" selected>Elegir</option>
            <option value="Active" selected>Activo</option>
            <option value="Locked" selected>Bloqueado</option>
        </select>
        @error('status') <span class="text-danger er">{{ $message }}</span>@enderror
    </div>
</div>
<div class="col-sm-12 col-md-6">
    <div class="form-group">
        <label>Asignar role</label>
        <select wire:model.lazy="role" class="form-control">
            <option value="Elegir" selected>Elegir</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}" selected>{{$role->name}}</option>
            @endforeach
        </select>
        @error('role') <span class="text-danger er">{{ $message }}</span>@enderror
    </div>
</div>
<div class="col-sm-12 col-md-6">
    <div class="form-group">
        <label>Imagen de Perfil</label>
        <input type="file" wire:model="image" accept="image/x-png, image/jpeg, image/gif" class="form-control">
        @error('image') <span class="text-danger er">{{ $message }}</span>@enderror

    </div>
</div>
</div>

@include('common.modalFooter')